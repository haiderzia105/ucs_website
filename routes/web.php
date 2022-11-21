<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/page", function(){
    return view::make("dir.page");
 });
 Route::get('/', function () {
    return view("main.frontend.index");
});
Route::get('user/index', function () {
    return view("main.frontend.index");
})->name('home');

Route::get('user/about', function () {
    return view("main.frontend.screens.about_school");
})->name('about');

Route::get('user/admission', function () {
    return view("main.frontend.screens.admission");
})->name('admission');

Route::get('user/contact', function () {
    return view("main.frontend.screens.contact_us");
})->name('contact');
