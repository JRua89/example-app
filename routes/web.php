<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

//All listings
Route::get('/', [ListingController::class, 'index']);

//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);





Route::get('/hello', function () {
    return response('hello world', 200)->header('Content-Type', 'text/plain');
});

Route::get('/post/{id}', function ($id) {
    return response('post ' . $id);
})->where('id', '[0-9]+');


Route::get('/search', function (Request $request) {
    return response($request->name. ' ' . $request->city);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';
