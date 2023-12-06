
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Index;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/add-author',[AuthorController::class, 'add_author']);
Route::get('/add-post/{id}',[PostController::class, 'add_post']);

Route::get('/show-post/{id}',[PostController::class, 'show_post']);
Route::get('/show-author/{id}',[AuthorController::class, 'show_author']);

Route::get('/index-author/{id}',[Index::class, 'index_author']);
Route::get('/index_post/{id}',[Index::class, 'index_post']);