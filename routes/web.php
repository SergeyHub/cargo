<?php

use App\Http\Controllers\Reddit;
use App\Http\Controllers\JsonPlaceHolder;
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

Route::get('/post', [JsonPlaceHolder::class, 'index'])->name('post.index');
Route::get('/reddit.index', [Reddit::class, 'index'])->name('reddit.index');
Route::get('/reddit.filter', [Reddit::class, 'filter'])->name('reddit.filter');
Route::get('/reddit.pluck', [Reddit::class, 'pluck'])->name('reddit.pluck');
