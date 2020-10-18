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
Route::get('/','HomeController@index')->name('home');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['auth', 'admin','get.menu'], 'prefix' => 'admin'], function () {
        Route::get('/', 'Admin\AdminController@index')->name('admin.home');
        Route::prefix('games')->group(function () {
            Route::get('/',             'admin\GamesController@index')->name('games');
            Route::post('/',            'admin\GamesController@create')->name('games.create');
            Route::get('/edit/{game}',    'admin\GamesController@edit')->name('games.edit');
            Route::put('/{game}',         'admin\GamesController@update')->name('games.update');
            Route::delete('/{game}',          'admin\GamesController@delete')->name('games.destroy');
        });
        Route::prefix('leagues')->group(function () {
            Route::get('/',             'admin\LeaguesController@index')->name('leagues');
            Route::post('/',            'admin\LeaguesController@create')->name('leagues.create');
            Route::get('/edit/{league}',    'admin\LeaguesController@edit')->name('leagues.edit');
            Route::put('/{league}',         'admin\LeaguesController@update')->name('leagues.update');
            Route::delete('/{league}',          'admin\LeaguesController@delete')->name('leagues.destroy');
        });
        Route::prefix('leagueTeams')->group(function () {
            Route::get('/{league_id}',             'admin\LeagueTeamsController@index')->name('leagueTeams');
            Route::post('/{league_id}',            'admin\LeagueTeamsController@create')->name('leagueTeams.create');
            Route::delete('/{league_id}/{leagueTeam}',          'admin\LeagueTeamsController@delete')->name('leagueTeams.destroy');
        });
        Route::prefix('matchs')->group(function () {
            Route::get('/{league_id}',             'admin\MatchsController@index')->name('matchs');
            Route::post('/{league_id}',            'admin\MatchsController@create')->name('matchs.create');
            Route::get('/edit/{match}',    'admin\MatchsController@edit')->name('matchs.edit');
            Route::put('/{match}',         'admin\MatchsController@update')->name('matchs.update');
            Route::delete('/{match}',          'admin\MatchsController@delete')->name('matchs.destroy');
        });
        Route::prefix('questions')->group(function () {
            Route::get('/{match_id}',             'admin\QuestionsController@index')->name('questions');
            Route::post('/{match_id}',            'admin\QuestionsController@create')->name('questions.create');
            Route::get('/edit/{question}',    'admin\QuestionsController@edit')->name('questions.edit');
            Route::put('/{question}',         'admin\QuestionsController@update')->name('questions.update');
            Route::delete('/{question}',          'admin\QuestionsController@delete')->name('questions.destroy');
        });
        Route::prefix('teams')->group(function () {
            Route::get('/',             'admin\TeamsController@index')->name('teams');
            Route::post('/',            'admin\TeamsController@create')->name('teams.create');
            Route::get('/edit/{team}',    'admin\TeamsController@edit')->name('teams.edit');
            Route::put('/{team}',         'admin\TeamsController@update')->name('teams.update');
            Route::delete('/{team}',          'admin\TeamsController@delete')->name('teams.destroy');
        });
        Route::prefix('players')->group(function () {
            Route::get('/',             'admin\PlayersController@index')->name('players');
            Route::post('/',            'admin\PlayersController@create')->name('players.create');
            Route::get('/edit/{player}',    'admin\PlayersController@edit')->name('players.edit');
            Route::put('/{player}',         'admin\PlayersController@update')->name('players.update');
            Route::delete('/{player}',          'admin\PlayersController@delete')->name('players.destroy');
        });
        Route::resource('users',        UsersController::class)->except(['create', 'store']);
    });

    // user protected routes
    Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
        Route::get('/', 'User\UserHomeController@index')->name('user.home');
    });
});
