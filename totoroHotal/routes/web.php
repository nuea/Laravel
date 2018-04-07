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

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');/**/


/*// route to resources/views/welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});

// การใช้งาน Routing พื้นฐาน 
Route::get('foo', function () {
    return 'Hello World';
});

//Optional Parameters: get parameter
Route::get('user/{id}', function($id){
    return 'User '.$id;
})->where('id', '[0-9]+');      // id ต้องมีค่าเป็น ตัวเลข 0-9 เท่านั้น

Route::get('user/{name}', function($name){
    return 'Hello '.$str;
})->where('name', '[A-Za-z]+');        // str ต้องมีค่าเป็น ตัวอักษร A-Z, a-z เท่านั้น

Route::get('user/{id}/{name}', function($id,$name){
    return 'User Id: '.$id.'<br> User Name: '.$name;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

//routing to views
// route to resources/views/about.blade.php
Route::get('about', function () {
    $arr =[
        'Nuea',
        '24'
    ];
    return view('about', compact('arr'));
});

//routing to controller
//file in app/Http/Controllers/Auth/LoginController.php
Route::get('form','Auth\LoginController@form');
*/