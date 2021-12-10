<?php
use Illuminate\Support\Facades\Route;

Route::get('/','SignatureController@index');
Route::post('/','SignatureController@upload')->name('signature');