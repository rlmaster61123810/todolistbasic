<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

});
Route::get('/gmail', function () {

});
Route::get('/test', function () {
    return view('test'); ;
});
Route::post('/test1', function () {

});
Route::get('/user/{id}/{age}', function ($id, $age) {

});
Route::get('/calculat/{num1}ก{num2}', function ($num1,$num2) {
    return 'ผลรวมของ'.$num1."และ". $num2. 'คือ'.($num1+$num2) ;
});
