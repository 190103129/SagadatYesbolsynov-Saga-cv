<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post; 
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
})->name('default');

Route::get('/home', function () {
    return view('home_page');
})->name('home');

Route::get('/contact', function () {
    return view('contact_page');
})->name('contact');

Route::get('/education', function () {
    return view('edu_page');
})->name('education');

Route::get('/post/add', function () {
    DB::table('post')->insert([
        'title' => 'Hello',
        'body' => 'FirstPost',
    ]);
});

Route::get('/post', function () {
    $post = post::find(1);
    return $post;
});