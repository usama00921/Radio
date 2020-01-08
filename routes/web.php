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









	

		



//Route::get('admin.index', function () { return view('admin.index');});

Route::prefix('admin')->group(function () {
    
    Auth::routes();

        Route::get('index', 'HomeController@dashboard')->name('dashboard');

        Route::get('/home', 'HomeController@index')->name('home');

        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');

        Route::resource('themes', 'ThemesController');
        Route::resource('theme_styles','ThemeStyleController');
        Route::resource('pages','PagesController');
        Route::resource('users', 'UserController');
        Route::resource('heads', 'HeadController');
        Route::resource('stations', 'StationController');
        Route::resource('stationhead', 'StationHeadController');
        //Route::resource('test', 'SectionheadController');
        

        Route::get('/heads/create/{id}','HeadController@createchild');





        Route::get('logout', function(){
            Session::flush();
            Auth::logout();
            return Redirect::to("admin/login")
            ->with('message', array('type' => 'success', 'text' => 'You have successfully logged out'));
        });

});