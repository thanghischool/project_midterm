<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'getData']);
Route::get('/detail/{id}', [PageController::class, 'getDetail'])->name('query_product');
Route::post('/search/product', [PageController::class, 'search_product'])->name('search_product');
