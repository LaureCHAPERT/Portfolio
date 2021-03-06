<?php

use App\Http\Controllers\SkillsController;
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

Route::get('/projets', function () {
    return view ('projects');
});

Route::get('/competences',[SkillsController::class, 'index']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/apropos', function () {
    return view('about');
});

Route::get('/download/{CV}',[ContactController::class, 'download']);
