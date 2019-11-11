<?php

use App\Http\Controllers\authorController;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    Route::get('authors','authorController@index');
    Route::get('author/{id}','authorController@show');
    Route::get('authorprofile/{id}','authorController@profile');
    Route::get('events','EventsController@index');
    Route::get('events/{id}','EventsController@show');
    Route::get('eventcategory','EventsController@categories');
    Route::get('eventcategory/{id}','EventsController@showcategory');
});
