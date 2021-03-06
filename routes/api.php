<?php

use Illuminate\Http\Request;
Use App\Article;
 
Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
