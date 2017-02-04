<?php

Route::group(['prefix'=>'admin','middleware'=>'checkAdmin'],function(){
	Route::post('postlogin','userController@postLogin');
	Route::get('/','userController@getLogin');
});

Route::group(['prefix'=>'admin','middleware'=>'checkAdmin2'],function(){
	Route::get('editprofile/{id}','userController@editProfile');
	Route::post('postedit/{id}','userController@postEditProfile');
	Route::post('avataredit/{id}','userController@avatarEdit');

	Route::get('profile/{slug}','userController@getProfile');

	Route::get('register','userController@getRegister');
	Route::post('postregister','userController@postRegister');

	Route::get('viewall','userController@getAll');

	Route::get('logout','userController@adminLogout');

	Route::get('salespage','userController@adminsalespage');
	Route::get('users','userController@allUsers');
	Route::get('dashboard','userController@adminDashboard');
});

Route::group(['prefix'=>'user'],function(){
	Route::get('register','userController@userRegister');
	Route::post('postregister','userController@postUserRegister');

	Route::get('landingpage/{slug}','pageController@getLandingPage');
	Route::get('introductionpage/{slug}','pageController@getIntroductionPage');
	Route::get('salespage/{slug}','pageController@getSalesPage');

	Route::post('search','userController@search');
	Route::get('/','userController@getUser');
});

Route::get('/',function(){
	dd('this is the home of surich');
});
