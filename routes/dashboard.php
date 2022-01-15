<?php

$middleware = ['role:agent|non-restricted_agent|admin|super_admin'];

// If Email verification is enabled require user to verify thier email before login 
if((boolean)setting('verify_email', true) === true){
    $middleware[] = 'verified';
}

// All Dashboard routes
Route::group(['middleware' => $middleware], function () {

    // Dashboard home route
    Route::get('/','Dashboard\IndexController@index')->name('dashboard');

    // Employee profile
    Route::group([ 'prefix' => 'profile',], function () {
        Route::get('/', "Dashboard\ProfileController@profile")->name("dashboard.profile");
        Route::post('/', "Dashboard\ProfileController@profile");
    });

    /* Users Routes */
    Route::group([ 'prefix' => 'users', 'middleware' => 'role:admin|super_admin'], function () {
        Route::get('user/{id}', 'Dashboard\UserController@show')->name('dashboard.users.show');
        Route::get('list', 'Dashboard\UserController@list')->name('dashboard.users.list');
    });

    /*-- Setting routes --*/
    Route::group([ 'prefix' => 'settings'], function () {
        Route::get('/', 'Dashboard\SettingsController@index')->name('dashboard.settings');
        Route::get('/advanced_settings', 'Dashboard\SettingsController@advancedSettings')->name('dashboard.advanced_settings');
        Route::post('clear_cache', 'Dashboard\SettingsController@clearCache');
        Route::post('fetch', 'Dashboard\SettingsController@fetch');
        Route::post('save', 'Dashboard\SettingsController@save');
        Route::post('toggle_maintenance_mode', 'Dashboard\SettingsController@toggleMaintenanceMode');
        Route::post('toggle_enable_cache', 'Dashboard\SettingsController@toggleEnableCache');
        Route::post('server_status', 'Dashboard\SettingsController@serverStatus');
    });
    
    /*-- Saved replies routes --*/
    Route::group([ 'prefix' => 'saved_replies'], function () {
        Route::get('/', 'Dashboard\SavedRepliesController@index')->name('dashboard.saved_replies');
        Route::get('/fetch', 'Dashboard\SavedRepliesController@fetch');
        Route::post('/', 'Dashboard\SavedRepliesController@store');
        Route::put('/', 'Dashboard\SavedRepliesController@store');
        Route::delete('/', 'Dashboard\SavedRepliesController@destroy');
        Route::get('/{id}', 'Dashboard\SavedRepliesController@show')->name('dashboard.saved_replies.single');
    });

    /*-- Ticket routes --*/
    Route::group([ 'prefix' => 'tickets' ], function () {
        Route::get('/', 'Dashboard\TicketController@index')->name('dashboard.tickets');
        Route::post('re_assign/{id}', 'Dashboard\TicketController@reAssign');
        Route::post('update/{id}', 'Dashboard\TicketController@update');
        Route::post('conversation/add','Dashboard\TicketConversationController@store');
        Route::post('conversation/delete', 'Dashboard\TicketConversationController@destroy');
        Route::post('conversation/update','Dashboard\TicketConversationController@updateReply');
        Route::get('fetch', 'Dashboard\TicketController@fetch');
        //Route::post('/new', 'Dashboard\TicketController@save');
        Route::get('{id}/conversation', 'Dashboard\TicketConversationController@fetch');
        Route::get('{id}', 'Dashboard\TicketController@show')->name('dashboard.ticket.single');
        Route::post('{id}', 'Dashboard\TicketController@show');
        Route::delete('{id}', 'Dashboard\TicketController@destroy');
    });

    /*-- Manage categories routes --*/
    Route::group([ 'prefix' => 'manage_categories'], function () {
        Route::get('/','Dashboard\ManageCategoryController@index')->name('dashboard.categories');
        Route::post('/','Dashboard\ManageCategoryController@store');
        Route::delete('/{category}','Dashboard\ManageCategoryController@destroy');
        Route::get('fetch','Dashboard\ManageCategoryController@fetch');
        Route::post('view', 'Dashboard\ManageCategoryController@show');
        Route::put('/{category}','Dashboard\ManageCategoryController@update');
        Route::post('/toggle_active/{category}','Dashboard\ManageCategoryController@toggleActive');
        Route::post('/categories_tickets', 'Dashboard\ManageCategoryController@categoriesWithtickets');
    });

    /*-- Manage articles routes --*/
    Route::group([ 'prefix' => 'manage_articles', 'middleware' => 'role:admin|super_admin' ], function () {
        Route::get('/','Dashboard\ManageArticlesController@index')->name('dashboard.manage_articles');
        Route::post('/fetch','Dashboard\ManageArticlesController@fetch');
        Route::get('/create','Dashboard\ManageArticlesController@create')->name('dashboard.articles.create');
        Route::get('/edit/{id}','Dashboard\ManageArticlesController@edit')->name('dashboard.manage_articles.edit');
        Route::post('/','Dashboard\ManageArticlesController@save');
        Route::put('/','Dashboard\ManageArticlesController@update');
        Route::post('/show/{id}','Dashboard\ManageArticlesController@show');
        Route::delete('/{id}','Dashboard\ManageArticlesController@destroy');
        Route::post('/toggle_published','Dashboard\ManageArticlesController@togglePublished');
    });

    /*-- Tags routes --*/
    Route::group([ 'prefix' => 'tags', 'middleware' => 'role:admin|super_admin' ], function () {
        Route::post('/','Dashboard\TagController@index');
    });

    /*-- Manage users --*/
    Route::group([ 'prefix' => 'employees', 'middleware' => 'role:admin|super_admin' ], function () {
        Route::get('/', [
            'uses' => 'Dashboard\UserController@employees',
            'middleware' => 'permission:view_user',
            'as' => 'dashboard.employees'
        ]);
        Route::post('/list', 'Dashboard\UserController@list');
        Route::post('/create', 'Dashboard\UserController@create');
        Route::post('/update', 'Dashboard\UserController@store');
       
        Route::delete('/user/delete',[
            'uses' => 'Dashboard\UserController@destroy',
            'middleware' => 'permission:delete_user'
        ]);
        Route::post('/{user}','Dashboard\UserController@show');
        Route::get('/{user}','Dashboard\UserController@employeeProfile');
    });

     /*-- Manage customers --*/
     Route::group([ 'prefix' => 'customers', 'middleware' => 'role:admin|super_admin' ], function () {
        Route::get('/', 'Dashboard\UserController@customers')->name('dashboard.customers');
        Route::post('/list', 'Dashboard\UserController@customersList');
        Route::post('/create', 'Dashboard\UserController@createCustomer');
        Route::post('/update', 'Dashboard\UserController@storeCustomer');
        Route::delete('/user/delete',[
            'uses' => 'Dashboard\UserController@destroy',
            'middleware' => 'permission:delete_user'
        ]);
        Route::post('/{user}','Dashboard\UserController@show');
        Route::get('/{id}','Dashboard\UserController@customerProfile');
    });

    // get list of roles
    Route::group([ 'prefix' => 'roles', 'middleware' => 'role:admin|super_admin' ], function () {
        Route::post('/list', 'Dashboard\RolesController@listRoles');
    });

    Route::group([ 'prefix' => 'acl', 'middleware' => 'role:admin|super_admin'], function () {
        Route::group([ 'prefix' => 'roles'], function () {
            Route::post('/', 'Dashboard\RolesController@roles');
            Route::post('/{id}/permissions', 'Dashboard\RolesController@permissions');
            Route::post('/{id}/toggle_permission/{permission}', 'Dashboard\RolesController@togglePermissions');
        });
    });

    // Notifications
    Route::group([ 'prefix' => 'notifications'], function(){
        Route::get('/', 'Dashboard\NotificationsController@all');
        Route::post('unread', 'Dashboard\NotificationsController@unread');
        Route::post('mark_as_read', 'Dashboard\NotificationsController@markAsRead');
    });

    /* Upload file */
    Route::post('/upload', 'UploadController@index');

    // Error logs 
    Route::group(['middleware' => 'permission:view_error_logs'], function () {
        Route::get('error_logs', 'Dashboard\ErrorLogsController@index')->name('dashboard.error_logs');
    });

    // Update
    Route::post('/update', 'Dashboard\UpdateController@update');
    Route::post('/update/refresh_app', 'Dashboard\UpdateController@resetAppAfterUpdate');

    // Insights 
    Route::post('insights/tickets', 'Dashboard\InsightsController@ticketsOverview');

    // js lang
    Route::get('lang.js', ['uses' => 'LanguageController@langJs', 'file' => 'js'])->name('dashboard.lang');
    Route::post('available_languages', 'LanguageController@languages');

    // User purchase list
    Route::group([ 'prefix' => '{user_id}/purchases' ], function () {
        Route::post('/', 'Dashboard\CustomerPurchaseController@listPurchase');
        Route::post('/refresh', 'Dashboard\CustomerPurchaseController@updateEnvatoCustomerPurchaseList');
    });
    
    // Modules manager Routes 
    Route::group(['prefix' => 'modules_manager'], function() {
        Route::get('/', 'Dashboard\ModulesManagerController@index')->name('dashboard.modules_manager');
        Route::post('/list', 'Dashboard\ModulesManagerController@list');
        Route::post('/{module}/toggle_module_status', 'Dashboard\ModulesManagerController@toggleModuleStatus')->name('dashboard.modules_manager.toggle_module_status');
        Route::get('/{module}/thumbnail', 'Dashboard\ModulesManagerController@moduleThumbnail')->name('dashboard.modules_manager.thumbnail');
    });

    // Run migration
    Route::group([ 'prefix' => 'database', 'middleware' => 'role:admin|super_admin' ], function () {
        Route::get('/migration', 'Dashboard\SettingsController@migration');
    });
}); 