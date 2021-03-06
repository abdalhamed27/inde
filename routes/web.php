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
*/Route::get('locale/{locale}' ,function($locale){

session::put('locale',$locale);
return redirect()->back();
});

Route::get('/',function(){

	return view('index');
});

Route::get('ContactUs','indcontroller@ContactUs')->name('ContactUs');
Route::get('shop','indcontroller@shop')->name('shop');
Route::get('ContactUs','indcontroller@ContactUs')->name('ContactUs');

Route::get('ABOUT','indcontroller@ABOUT')->name('ABOUT');
Route::post('ContactUs','indcontroller@POSTContactUs')->name('contact');
