<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\Reddit;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});
//   Post
Route::get('/post', [Post::class, 'index'])->name('post.index');

//   https://www.reddit.com/r/MechanicalKeyboards.json
Route::get('/reddit.index', [Reddit::class, 'index'])->name('reddit.index');
Route::get('/reddit.filter', [Reddit::class, 'filter'])->name('reddit.filter');
Route::get('/reddit.pluck', [Reddit::class, 'pluck'])->name('reddit.pluck');
Route::get('/reddit.contains', [Reddit::class, 'contains'])->name('reddit.contains');
Route::get('/reddit.groupby', [Reddit::class, 'groupby'])->name('reddit.groupby');

//  Cargo
Route::get('/cargo.test', [CargoController::class, 'test'])->name('cargo.test');
Route::get('/cargo.index', [CargoController::class, 'index'])->name('cargo.index');

