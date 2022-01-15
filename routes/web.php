<?php

Route::get('/', 'Frontend\IndexController@index')->name('frontend');

if(defaultSetting('app_parent_folder', null)){
    Route::get(defaultSetting('app_parent_folder', null), 'Frontend\IndexController@index');    
}

if(isOAuthEnabled()){
    Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')
    ->where(['provider' => implode('|', OAuthProviders())])
    ->name('auth.socialite');

    Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')
    ->where(['provider' => implode('|', OAuthProviders())]);
}

// Articles routes
Route::group([ 'prefix' => 'articles'], function () {
    // Article single page route
    Route::get('/{id}/{slug?}', 'Frontend\ArticlesController@index')->name('frontend.article');
    // Update article rate route
    Route::post('/rate', 'Frontend\ArticlesController@updateRate')->name('frontend.article.update_rate');
});

Route::group([ 'prefix' => 'tags'], function () {
    // Display tag articles
    Route::get('{id}/{slug?}', 'Frontend\TagController@index')->name('frontend.tag');
});

Route::group([ 'prefix' => 'categories'], function () {
    // Display category articles
    Route::get('{id}/{slug?}', 'Frontend\CategoryController@index')->name('frontend.category');
});

// Front end search routes
Route::group([ 'prefix' => 'search'], function () {
    // Return search results as json 
    Route::post('/','SearchController@search')->name('frontend.search_json');
    // Return and display search results
    Route::get('/','Frontend\SearchController@index')->name('frontend.search');
});

// js lang
Route::get('lang.js', ['uses' => 'LanguageController@langJs', 'file' => 'frontend_js'])->name('frontend.lang');