<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listing data
Route::post('/listings', [ListingController::class, 'store']);

//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Edit submit to Update
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Edit submit to Update
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// show registration form create form
Route::get('/register', [UserController::class, 'create']);

// create new user
Route::post('/users', [UserController::class, 'store']);

// Log user out
Route::post('/logout', [UserController::class, 'logout']);

//Show Login form
Route::get('/login', [UserController::class, 'login']);

//Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

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
