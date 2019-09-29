<?php

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

//website routs start
// Route::get('/', 'AuthenticationController@login')->name('');
Route::get('/', 'HomeController@index')->name('');
Route::get('/home', 'WebsiteController@index')->name('website_index');
Route::get('allpost', 'WebsiteController@allPost')->name('all_post');
Route::get('subcategory/{id}', 'WebsiteController@allPostCategory')->name('');
Route::post('search', 'WebsiteController@allSearch')->name('');
Route::get('edit/{id}', 'WebsiteController@edit')->name('');
// post delete routs
Route::get('edit/soft_delete/{id}', 'ProcessController@soft_delete')->name('');
Route::get('topic', 'WebsiteController@topic')->name('');
Route::get('comments/{id}', 'WebsiteController@Commentview')->name('');
Route::get('liveide', 'WebsiteController@liveide')->name('');
Route::post('topic/submit', 'ProcessController@insert')->name('');
Route::post('topic/update', 'ProcessController@topicupdate')->name('');
Route::get('new/user/login', 'AuthenticationController@login')->name('user.login');
Route::post('new/user/login/submit', 'AuthenticationController@loginSubmit')->name('user.login.submit');
Route::get('new/user/registration', 'AuthenticationController@registration')->name('');
Route::post('/registration/submit', 'AuthenticationController@registrationProcess')->name('new.register');

//admin panel routs start
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', 'AdminController@index')->name('');
Route::get('admin/user', 'UserController@index')->name('');
Route::get('admin/user/add', 'UserController@add')->name('');
Route::post('admin/user/registration', 'UserController@insert')->name('');
Route::get('admin/user/view/{slug}', 'UserController@view')->name('');
Route::get('admin/alluser', 'UserController@Userinfo')->name('');
Route::get('admin/userpost', 'UserPostController@index')->name('');
Route::get('admin/userpost/view/{id}', 'UserPostController@view')->name('');
Route::get('admin/userpost/postview/{id}', 'UserPostController@postview')->name('');
Route::get('admin/user/update/{id}', 'UserController@approvePost')->name('');
Route::get('admin/user/unapprovedpost', 'UserPostController@unapproved')->name('');
Route::get('admin/user/unapprovedpost/delete/{id}', 'UserPostController@postdelete')->name('');
