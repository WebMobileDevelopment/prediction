<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['auth', 'admin', 'get.menu'], 'prefix' => 'admin'], function () {
        Route::get('/', 'Admin\AdminController@index')->name('admin.home');
        Route::prefix('games')->group(function () {
            Route::get('/',             'Admin\GamesController@index')->name('games');
            Route::post('/',            'Admin\GamesController@create')->name('games.create');
            Route::get('/edit/{game}',    'Admin\GamesController@edit')->name('games.edit');
            Route::put('/{game}',         'Admin\GamesController@update')->name('games.update');
            Route::delete('/{game}',          'Admin\GamesController@delete')->name('games.destroy');
        });
        Route::prefix('leagues')->group(function () {
            Route::get('/',             'Admin\LeaguesController@index')->name('leagues');
            Route::post('/',            'Admin\LeaguesController@create')->name('leagues.create');
            Route::get('/edit/{league}',    'Admin\LeaguesController@edit')->name('leagues.edit');
            Route::put('/{league}',         'Admin\LeaguesController@update')->name('leagues.update');
            Route::delete('/{league}',          'Admin\LeaguesController@delete')->name('leagues.destroy');
        });
        Route::prefix('leagueTeams')->group(function () {
            Route::get('/{league_id}',             'Admin\LeagueTeamsController@index')->name('leagueTeams');
            Route::post('/{league_id}',            'Admin\LeagueTeamsController@create')->name('leagueTeams.create');
            Route::delete('/{league_id}/{leagueTeam}',          'Admin\LeagueTeamsController@delete')->name('leagueTeams.destroy');
        });
        Route::prefix('matchs')->group(function () {
            Route::get('/{league_id}',             'Admin\MatchsController@index')->name('matchs');
            Route::post('/{league_id}',            'Admin\MatchsController@create')->name('matchs.create');
            Route::get('/edit/{match}',    'Admin\MatchsController@edit')->name('matchs.edit');
            Route::put('/{match}',         'Admin\MatchsController@update')->name('matchs.update');
            Route::delete('/{match}',          'Admin\MatchsController@delete')->name('matchs.destroy');
        });
        Route::prefix('questions')->group(function () {
            Route::get('/{match_id}',             'Admin\QuestionsController@index')->name('questions');
            Route::post('/{match_id}',            'Admin\QuestionsController@create')->name('questions.create');
            Route::get('/edit/{question}',    'Admin\QuestionsController@edit')->name('questions.edit');
            Route::put('/{question}',         'Admin\QuestionsController@update')->name('questions.update');
            Route::delete('/{question}',          'Admin\QuestionsController@delete')->name('questions.destroy');
        });
        Route::prefix('teams')->group(function () {
            Route::get('/',             'Admin\TeamsController@index')->name('teams');
            Route::post('/',            'Admin\TeamsController@create')->name('teams.create');
            Route::get('/edit/{team}',    'Admin\TeamsController@edit')->name('teams.edit');
            Route::put('/{team}',         'Admin\TeamsController@update')->name('teams.update');
            Route::delete('/{team}',          'Admin\TeamsController@delete')->name('teams.destroy');
        });
        Route::prefix('players')->group(function () {
            Route::get('/',             'Admin\PlayersController@index')->name('players');
            Route::post('/',            'Admin\PlayersController@create')->name('players.create');
            Route::get('/edit/{player}',    'Admin\PlayersController@edit')->name('players.edit');
            Route::put('/{player}',         'Admin\PlayersController@update')->name('players.update');
            Route::delete('/{player}',          'Admin\PlayersController@delete')->name('players.destroy');
        });
        Route::prefix('banners')->group(function () {
            Route::get('/',             'Admin\BannersController@index')->name('banners');
            Route::post('/',            'Admin\BannersController@create')->name('banners.create');
            Route::get('/edit/{banner}',    'Admin\BannersController@edit')->name('banners.edit');
            Route::put('/{banner}',         'Admin\BannersController@update')->name('banners.update');
            Route::delete('/{banner}',          'Admin\BannersController@delete')->name('banners.destroy');
        });
        Route::resource('users',        'UsersController')->except(['create', 'store']);
    });

    // user protected routes
    Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
        Route::get('/', 'User\UserHomeController@index')->name('user.home');
    });
});
