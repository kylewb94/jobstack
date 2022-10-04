<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Resource Controller Actions
|--------------------------------------------------------------------------
|
| index   | GET       | Display a listing of the resource 
| create  | GET       | Show the form for creating a new resource
| store   | POST      | Store a newly created resource in storage
| show    | GET       | Display the specified resource
| edit    | GET       | Show the form for editing the specified resource
| update  | PUT/PATCH | Update the specified resource in storage
| destroy | DELETE    | Remove the specified resource from storage
|
*/

/*
|--------------------------------------------------------------------------
| Route Middleware
|--------------------------------------------------------------------------
|
| Auth()  | Redirects to named route (login) 
| Guest() | Redirects to home page (/)
|
*/

/*
| Listing Routes
*/

// index listing
Route::get('/', [ListingController::class, 'index']);

// create listing
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// store listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// manage listings
Route::get('listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// show listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth');

/*
| User Routes
*/

// create user
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// store user
Route::post('/users', [UserController::class, 'store']);

// logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// login user
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// authenticate user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
