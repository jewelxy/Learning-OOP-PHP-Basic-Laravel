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
//Route::get('sayhello','HelloController@index');  //from url insert

//Route::get('/','HelloController@index'); //from home directory

/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Without create controller
//-----------------------------------
// Route::get('/',function(){
//     return view('hello');
// });

//Get value from url with condition
//------------------------------------
// Route::get('/{firstName}','HelloController@index')->where(['firstName'=>"[0-9]+"]);

//Get value from url without condition
//-------------------------------------------
// Route::get('/{firstName}','HelloController@index');

/*---------------------------------------
In laravel parameter has two types:
    1. Optional
    2.Required
----------------------------------------*/
//Optional
//----------------------------------
// Route::get('/{max}/{min?}',function($max,$min=0){
//         echo "max = ".$max."<br/>";
//         echo "min = ".$min."<br/>";
// });
/*------------------------------
        Middleware
// php artisan make:middleware middlewareName
-------------------------------*/
// Route::get('/',function(){

//     return view ('hello');
// })->middleware('test');

/*------------------------------
       Controller
// php artisan make:controller controllerName
-------------------------------*/
// Route::get('/','testController@showWelcome');

/*------------------------------
       Controller
Send Data on view using controller
-------------------------------*/
Route::get('/receive','sendDataController@sendData');