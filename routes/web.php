<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sign-up' , function() {
	return view('sign_up');
})->name('sign-up'); 

Route::post('/sign-up' , function() {
	echo "This website is just a demo"; 
})->name('sign-up'); 

Route::get('/sign-in' , function() {
	return view('sign_in');
})->name('sign-in'); 

Route::post('/sign-in', function() {
	return 'This website is just a demo';
})->name('sign-in'); 

Route::get('/contact' , function() {
	return view('contact'); 
})->name('contact'); 

Route::post('/contact' , function() {
	return 'This website is just a demo'; 
})->name('contact'); 

Route::get('/about' , function() {
	return view('about'); 
})->name('about'); 


//news letter 
Route::post('/news-letter' , function() {
	return 'This website is just a demo'; 
})->name('news-letter'); 