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

Route::get('/',['as' => 'home','uses' =>'HomeController@index']); 

Route::get('LostProperty',['as' => 'LostProperty','uses' =>'LostController@index']);

Route::get('Signed',['as' => 'Signed','uses' =>'SignedController@index']); 

Route::get('Stuff',['as' => 'Stuff','uses' =>'StuffController@index']);
Route::get('Stuff/{id}','StuffController@destroy');
Route::post('Stuff/create','StuffController@create');
Route::post('Stuff/edit',['as'=>'edit','uses'=>'StuffController@edit']);

Route::get('LOG',['as' => 'LOG','uses' =>'LOGController@index']);

//lalalalal
// Route::get('sa/{A?}',['as' => 'hello',function($name ='everybody'){
// 	return 'hello ,'.$name;
// }]);

// Route::group(['prefix' =>'dashboard'],function(){
// 	Route::get('A',function(){
// 		return 'admin dashboard';
// 	});
// 	Route::get('B',['as' => 'B',function(){
// 		return 'B';
// 	}]);
// });