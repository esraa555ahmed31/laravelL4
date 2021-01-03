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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/myinfo', function () {
    $arr=["name"=>"esraa", "age"=>"23","address"=>"Mansoura"];
    return $arr;
});
//display req param:
Route::get('/request', function () {
    $reqParam=request();

    return $reqParam;

});
//request name
Route::get('/requestName', function () {
    $reqParam=request("name");
if ($reqParam) {
    return $reqParam;
} else {
   return "name not found";
}});
//6.	Create pages called BlogHome


Route::get('/BlogHome', function () {
    return view('BlogHome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
//posts
use App\Http\Controllers;
// Route::get('/posts', "App\Http\Controllers\lab2@getPost");

// Route::get('/posts/{key}', "App\Http\Controllers\lab2@getBody");

// Route::get('/blogs', "App\Http\Controllers\blogController@getBlogs");
// //add blog form
// Route::get('/BlogCreate', [Controllers\blogController::class,'create'])->name('Design');
// Route::post('/save', [Controllers\blogController::class,'store'])->name('save');
//resource Route
Route::resource('blg',Controllers\blogController2::class);
    




