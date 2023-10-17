<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogueController;

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

Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue');
// Route::get('/catalogue/search', [CatalogueController::class, 'searchProduct']);
// Route::get('/catalogue/sort', [CatalogueController::class, 'sortProduct']);
Route::get('/product/{id}', [CatalogueController::class, 'show']);
