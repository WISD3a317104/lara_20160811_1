<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*Route::get('/',function(){
    return view('welcome');
});*/
/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/',function(){
    return redirect('welcome');
});*/
/*Route::get('hello/{name?}',['as'=>'hello.index',function($name='Everybody'){
    return 'Hello,'.$name;
}]);
Route::get('say/{name?}',['as'=>'hello.index',function($name='Everybody'){
    return view('welcome');
}]);
Route::get('dashboard',function(){
    return 'dashboard';
});
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return  'admindashboard';
    });
});

*/
Route::get('/',['as'=>'home.index','uses'=>'HomeController@index']);

