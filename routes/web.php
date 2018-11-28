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
    return view('homepage');
});

Route::get('/data', function () {
    $data = array('jhon', 'Maria', 'henk');
    return $data;
});

Route::get('/article-op-nummer/nummer-{nummer}', 'ArticleController@showArticle')
    ->where('nummer', '\d+')
    ->name('article.opnummer')
;

Route::get('/article/{naam}', function ($naam, $leeftijd) {
    return "ARTICLE" . $naam . "LEEFTIJD = " .$leeftijd;
})->where('naam', '[a-zA-Z-]+')
    ->where('leeftijd', '\d+')
    ->name('article.opnaam')
;
