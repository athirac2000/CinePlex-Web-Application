<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('dashboard', function () {
    return view('admin.dashboard');
});
Route::get('theatre', function () {
    return view('admin.theatre');
});
Route::get('movies', function () {
    return view('admin.movies');
});



Route::get('editt', function () {
    return view('admin.editt');
});
Route::get('editm', function () {
    return view('admin.editm');
});
Route::get('/',function(){
    return view('wel');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','user-access:user'])->group(function(){
    Route::get('/home',[HomeController::class,'index'])->name('home');
});

Route::middleware(['auth','user-access:admin'])->group(function(){
    Route::get('/admin/home',[HomeController::class,'adminhome'])->name('admin.home');
});
Route::middleware(['auth','user-access:theatre'])->group(function(){
    Route::get('/theatre/home',[HomeController::class,'theatrehome'])->name('theatre.home');
});



Route::get('indexTheatre',[AdminController::class,'indexTheatre']);
Route::get('createTheatre', [AdminController::class, 'createTheatre']);
Route::post('storeTheatre', [AdminController::class, 'storeTheatre']);
Route::get('editTheatre/{id}',[AdminController::class,'editTheatre']);
Route::post('updateTheatre/{id}',[AdminController::class,'updateTheatre']);
Route::post('destroyTheatre/{id}',[AdminController::class,'destroyTheatre']);



Route::get('movieIndex',[AdminController::class,'movieindex']);
Route::post('storeMovie',[AdminController::class,'storeMovie']);
Route::get('editMovie/{id}',[AdminController::class,'editMovie']);
Route::post('updateMovie/{id}',[AdminController::class,'updateMovie']);
Route::post('destroyMovie/{id}',[AdminController::class,'destroyMovie']);


Route::get('userTheatreIndex',[AdminController::class,'userTheatreIndex']);
Route::post('storeUserTheatre',[AdminController::class,'storeUserTheatre']);
Route::get('editUserTheatre/{id}',[AdminController::class,'editUserTheatre']);
Route::post('updateUserTheatre/{id}',[AdminController::class,'updateUserTheatre']);
Route::post('destroyUserTheatre/{id}',[AdminController::class,'destroyUserTheatre']);


Route::get('show', function () {
    return view('myshow');
});


Route::get('viewDetails/{id}',[AdminController::class,'viewDetails']);
Route::post('storeDetails',[AdminController::class,'storeDetails']);
Route::post('mybookings',[AdminController::class,'mybookings']);

