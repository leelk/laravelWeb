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

Route::get('/', function () {
    return view('welcome');
});


Route::post('register',[
   'uses'=>'UserController@RegisterUser',
    'as'=>'signup'
]);



Route::post('login',[
    'uses'=>'UserController@LoginUser',
    'as'=>'signin'
]);


Route::get('home',[
    'uses'=>'userController@getHome',
    'as'=>'home'
])->middleware('auth');


Route::get('signout',[
    'uses'=>'userController@logout',
    'as'=>'signout'
]);

Route::post('/createpost',[
    'uses'=>'PostController@postCreatePost',
    'as'=>'post.create'
]);

Route::get('/post',[
   'uses'=>'PostController@showPost',
   'as'=>'allpost'
]);