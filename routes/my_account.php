<?php

$middleware = ['role:customer|non-restricted_agent|agent|admin|super_admin'];

if((boolean)setting('verify_email', true) === true){
    $middleware[] = 'verified';
}

Route::group(['middleware' => $middleware], function () {
    
    // Customer home page
    Route::get('/', 'MyAccount\IndexController@index')->name('my_account');

    // Customer page
    Route::group([ 'prefix' => 'profile',], function () {
        Route::get('/', "MyAccount\ProfileController@profile")->name("my_account.profile");
        Route::post('/', "MyAccount\ProfileController@profile");
    });

    // Upload file 
    Route::post('/upload', 'UploadController@index');

    // Ticket routes
    Route::group([ 'prefix' => 'tickets'], function () {

        // List tickets
        Route::get('/', "MyAccount\TicketsController@index")->name("my_account.tickets");

        // Create new ticket
        Route::group([ 'middleware' => 'permission:create_ticket'], function () {
            Route::get('/new', "MyAccount\TicketsController@new")->name("my_account.tickets.create");
        });

        // Get tickets categories
        Route::post('/categories', "MyAccount\TicketsController@categories");

        // Save new ticket
        Route::group([ 'middleware' => 'permission:create_ticket'], function () {
            Route::post('/save', "MyAccount\TicketsController@save");
        });

        // View ticket
        Route::group([ 'middleware' => 'permission:view_ticket'], function () {
            // Fetch ticket, json response
            Route::post('/fetch', "MyAccount\TicketsController@fetch");
            
            // Add new ticket reply
            Route::post('/conversation/add','MyAccount\TicketConversationController@store');
            
            // View single ticket
            Route::get('/{id}', "MyAccount\TicketsController@view")->name("my_account.tickets.view");
            
            // get ticket details
            Route::post('/{id}', "MyAccount\TicketsController@details");
            
            // Get ticket conversation
            Route::get('/{id}/conversation', 'MyAccount\TicketConversationController@fetch');
            
        });
    });

    // Notifications
    Route::group([ 'prefix' => 'notifications'], function(){
        // Get all notifications
        Route::get('/', 'MyAccount\NotificationsController@all');

        // Get unread notifications
        Route::post('unread', 'MyAccount\NotificationsController@unread');
        
        // Make notifications as read
        Route::post('mark_as_read', 'MyAccount\NotificationsController@markAsRead');
    });

     // js lang
     Route::get('lang.js', ['uses' => 'LanguageController@langJs', 'file' => 'js'])->name('my_account.lang');

});