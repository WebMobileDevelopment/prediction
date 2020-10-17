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

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => ['get.menu']], function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::group(['middleware' => ['role:admin']], function () {
            Route::resource('bread',        'BreadController@index'); //create BREAD (resource)
            Route::resource('games',        'admin\GamesController@index');
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
            Route::resource('roles',        'RolesController');
            Route::resource('mail',        'MailController');
            Route::get('prepareSend/{id}',        'MailController@prepareSend')->name('prepareSend');
            Route::post('mailSend/{id}',        'MailController@send')->name('mailSend');
            Route::get('/roles/move/move-up',      'RolesController@moveUp')->name('roles.up');
            Route::get('/roles/move/move-down',    'RolesController@moveDown')->name('roles.down');
            Route::prefix('menu/element')->group(function () {
                Route::get('/',             'MenuElementController@index')->name('menu.index');
                Route::get('/move-up',      'MenuElementController@moveUp')->name('menu.up');
                Route::get('/move-down',    'MenuElementController@moveDown')->name('menu.down');
                Route::get('/create',       'MenuElementController@create')->name('menu.create');
                Route::post('/store',       'MenuElementController@store')->name('menu.store');
                Route::get('/get-parents',  'MenuElementController@getParents');
                Route::get('/edit',         'MenuElementController@edit')->name('menu.edit');
                Route::post('/update',      'MenuElementController@update')->name('menu.update');
                Route::get('/show',         'MenuElementController@show')->name('menu.show');
                Route::get('/delete',       'MenuElementController@delete')->name('menu.delete');
            });
            Route::prefix('menu/menu')->group(function () {
                Route::get('/',         'MenuController@index')->name('menu.menu.index');
                Route::get('/create',   'MenuController@create')->name('menu.menu.create');
                Route::post('/store',   'MenuController@store')->name('menu.menu.store');
                Route::get('/edit',     'MenuController@edit')->name('menu.menu.edit');
                Route::post('/update',  'MenuController@update')->name('menu.menu.update');
                Route::get('/delete',   'MenuController@delete')->name('menu.menu.delete');
            });
            Route::prefix('media')->group(function () {
                Route::get('/',                 'MediaController@index')->name('media.folder.index');
                Route::get('/folder/store',     'MediaController@folderAdd')->name('media.folder.add');
                Route::post('/folder/update',   'MediaController@folderUpdate')->name('media.folder.update');
                Route::get('/folder',           'MediaController@folder')->name('media.folder');
                Route::post('/folder/move',     'MediaController@folderMove')->name('media.folder.move');
                Route::post('/folder/delete',   'MediaController@folderDelete')->name('media.folder.delete');;

                Route::post('/file/store',      'MediaController@fileAdd')->name('media.file.add');
                Route::get('/file',             'MediaController@file');
                Route::post('/file/delete',     'MediaController@fileDelete')->name('media.file.delete');
                Route::post('/file/update',     'MediaController@fileUpdate')->name('media.file.update');
                Route::post('/file/move',       'MediaController@fileMove')->name('media.file.move');
                Route::post('/file/cropp',      'MediaController@cropp');
                Route::get('/file/copy',        'MediaController@fileCopy')->name('media.file.copy');
            });
            Route::get('/colors', function () {
                return view('dashboard.colors');
            });
            Route::get('/typography', function () {
                return view('dashboard.typography');
            });
            Route::get('/charts', function () {
                return view('dashboard.charts');
            });
            Route::get('/widgets', function () {
                return view('dashboard.widgets');
            });

            Route::prefix('base')->group(function () {
                Route::get('/breadcrumb', function () {
                    return view('dashboard.base.breadcrumb');
                });
                Route::get('/cards', function () {
                    return view('dashboard.base.cards');
                });
                Route::get('/carousel', function () {
                    return view('dashboard.base.carousel');
                });
                Route::get('/collapse', function () {
                    return view('dashboard.base.collapse');
                });

                Route::get('/forms', function () {
                    return view('dashboard.base.forms');
                });
                Route::get('/jumbotron', function () {
                    return view('dashboard.base.jumbotron');
                });
                Route::get('/list-group', function () {
                    return view('dashboard.base.list-group');
                });
                Route::get('/navs', function () {
                    return view('dashboard.base.navs');
                });

                Route::get('/pagination', function () {
                    return view('dashboard.base.pagination');
                });
                Route::get('/popovers', function () {
                    return view('dashboard.base.popovers');
                });
                Route::get('/progress', function () {
                    return view('dashboard.base.progress');
                });
                Route::get('/scrollspy', function () {
                    return view('dashboard.base.scrollspy');
                });

                Route::get('/switches', function () {
                    return view('dashboard.base.switches');
                });
                Route::get('/tables', function () {
                    return view('dashboard.base.tables');
                });
                Route::get('/tabs', function () {
                    return view('dashboard.base.tabs');
                });
                Route::get('/tooltips', function () {
                    return view('dashboard.base.tooltips');
                });
            });
            Route::prefix('buttons')->group(function () {
                Route::get('/buttons', function () {
                    return view('dashboard.buttons.buttons');
                });
                Route::get('/button-group', function () {
                    return view('dashboard.buttons.button-group');
                });
                Route::get('/dropdowns', function () {
                    return view('dashboard.buttons.dropdowns');
                });
                Route::get('/brand-buttons', function () {
                    return view('dashboard.buttons.brand-buttons');
                });
            });
            Route::prefix('icon')->group(function () {  // word: "icons" - not working as part of adress
                Route::get('/coreui-icons', function () {
                    return view('dashboard.icons.coreui-icons');
                });
                Route::get('/flags', function () {
                    return view('dashboard.icons.flags');
                });
                Route::get('/brands', function () {
                    return view('dashboard.icons.brands');
                });
            });
            Route::prefix('notifications')->group(function () {
                Route::get('/alerts', function () {
                    return view('dashboard.notifications.alerts');
                });
                Route::get('/badge', function () {
                    return view('dashboard.notifications.badge');
                });
                Route::get('/modals', function () {
                    return view('dashboard.notifications.modals');
                });
            });
            Route::resource('notes', 'NotesController');
        });
        Route::group(['middleware' => ['role:user']], function () {
            Route::get('/user', 'front\UserHomeController@index')->name('user.home');
        });

        Route::resource('resource/{table}/resource', 'ResourceController')->names([
            'index'     => 'resource.index',
            'create'    => 'resource.create',
            'store'     => 'resource.store',
            'show'      => 'resource.show',
            'edit'      => 'resource.edit',
            'update'    => 'resource.update',
            'destroy'   => 'resource.destroy'
        ]);
    });
});

Route::get('/404', function () {
    return view('errors.404');
});
Route::get('/500', function () {
    return view('errors.500');
});
Route::get('/503', function () {
    return view('errors.503');
});
Route::get('/contact', function () {
    return  view('auth.contact');
})->name('contact');
Route::get('/terms', function () {
    return  view('auth.terms');
})->name('terms');
Route::get('/faq', function () {
    return  view('auth.faq');
})->name('faq');
Route::get('/account', function () {
    return  view('auth.account');
})->name('account');
Route::get('/construction', function () {
    return  view('auth.construction');
})->name('construction');
Route::get('/wallet', function () {
    return  view('auth.wallet');
})->name('wallet');
Route::get('/learning', function () {
    return  view('auth.learning');
})->name('learning');
Route::get('image-cropper', 'ImageCropperController@index');
Route::post('image-cropper/upload', 'ImageCropperController@upload');
Auth::routes();
