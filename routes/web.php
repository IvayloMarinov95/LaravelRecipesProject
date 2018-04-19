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
Route::get('/', function(){
    return view('welcome');
});
Route::get('/recipes/index', 'RecipeController@index')->name('recipes.index');
Route::get('/recipes/add','RecipeController@add')->name('recipes.add');
Route::get('/reviews/add','ReviewController@add')->name('reviews.add');
Route::post('/recipes/add','RecipeController@create')->name('recipes.store');
Route::post('/reviews/add/','ReviewController@create')->name('reviews.store');
Route::get('/recipes/info/{id}', 'RecipeController@info')->name('recipes.info');
Route::get('/recipes/edit/{id}', 'RecipeController@edit')->name('recipes.edit');
Route::post('/recipes/update/{id}', 'RecipeController@update')->name('recipes.update');
Route::post('/recipes/delete/{id}', 'RecipeController@delete')->name('recipes.delete');
Route::post('/review/delete/{id}', 'ReviewController@delete')->name('reviews.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
