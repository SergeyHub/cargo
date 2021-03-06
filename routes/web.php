<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\Cargo;
use App\Http\Controllers\FruitsController;
use App\Http\Controllers\FruitsHomeController;
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
    return view('main');
})->name('home');

//   Post   https://jsonplaceholder.typicode.com/posts
Route::get('/post', [Post::class, 'index'])->name('post.index');
Route::get('/post{id}', [Post::class, 'show'])->name('post.show');

//   https://www.reddit.com/r/MechanicalKeyboards.json
//Route::get('/reddit.show', [Reddit::class, 'show'])->name('reddit.show');
Route::get('/reddit.index', [Reddit::class, 'index'])->name('reddit.index');
Route::get('/reddit.filter', [Reddit::class, 'filter'])->name('reddit.filter');
Route::get('/reddit.pluck', [Reddit::class, 'pluck'])->name('reddit.pluck');
Route::get('/reddit.contains', [Reddit::class, 'contains'])->name('reddit.contains');
Route::get('/reddit.groupby', [Reddit::class, 'groupby'])->name('reddit.groupby');
Route::get('/reddit.sortby', [Reddit::class, 'sortby'])->name('reddit.sortby');

//  Cargo  https://api.cargo.tech/v1/cargos
Route::get('/cargo.show', [CargoController::class, 'show'])->name('cargo.show');
Route::get('/cargo.index', [CargoController::class, 'index'])->name('cargo.index');
Route::get('/cargotest.index', [Cargo::class, 'index'])->name('cargotest.index');


//  Fruits   https://dev.shepherd.appoly.io/fruit.json
//Route::get('/fruits_home', [FruitsHomeController::class, 'index']);
Route::get('/fruit.get.data', [FruitsController::class, 'getData'])->name('fruit.get.data');

