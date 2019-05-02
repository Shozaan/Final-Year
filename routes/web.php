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
/*Route::get('/users/{id}/{name}', function ($id,$name){
    return 'This is user'.$name.'with the Id of'.$id;
});*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/thamel', 'PagesController@thamel');
Route::get('/popular', 'PagesController@popular');
Route::get('/stay', 'PagesController@stay');
Route::get('/anything', 'PagesController@anything');
Route::get('/basantapur', 'PagesController@basantapur');
Route::get('/pashupathi', 'PagesController@pashupathi');
Route::get('/bouddha', 'PagesController@bouddha');
Route::get('/sawaymbhu', 'PagesController@sawaymbhu');
Route::get('/sundhara', 'PagesController@sundhara');
Route::get('/durbarmarg', 'PagesController@durbarmarg');
Route::get('/lazimpat', 'PagesController@lazimpat');
Route::get('/chandragiri', 'PagesController@chandragiri');

Route::resource('posts','PostsController');




Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
