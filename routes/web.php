<?php

// use App\Models\Contact;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/', [ContactController::class, 'index']);

Route::resource('contacts', ContactController::class);

// in case we wanna a controller that will only expose a RESTful API
// Route::apiResource('contacts', 'ContactController');