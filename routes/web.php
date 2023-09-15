




<?php


use App\Http\Controllers\ArtcileController;
use App\Http\Controllers\CardController;

use App\Http\Controllers\searchcontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\GoogleLineController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\CustomLoginController;

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

Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/contactus', function () {
    return view('contactus');
})->middleware(['auth', 'verified']);







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
require __DIR__.'/auth.php';


Route::middleware('auth')->prefix(('card'))->group(function () {
    Route:: resource('card',CardController::class); 
    // Route::get('/card/create',[CardController::class,'create'])->name('ticket.create');
    //  Route::post('/card/create',[CardController::class,'store '])->name('ticket.store');
    
});




Route::middleware('auth')->prefix(('artcile'))->group(function () {
    Route:: resource('artcile',ArtcileController::class); 
    // Route::get('/card/create',[CardController::class,'create'])->name('ticket.create');
    //  Route::post('/card/create',[CardController::class,'store '])->name('ticket.store');
    
});

Route::get('dropdown',[CountryStateCityController::class,'index']);
Route::post('api/fetch-state',[CountryStateCityController::class,'fatchState']);
Route::post('api/fetch-cities',[CountryStateCityController::class,'fatchCity']);





Route::get('/papaer/{course_id}', function (string $course_id) {
  

    return view('categories.papaer',compact("course_id"));});

    Route::get('/dash', [GoogleLineController::class, 'index'],function () {
  

        return view('dash',);});
        Route::get('/dashuser', [GoogleLineController::class, 'index'],function () {
  

            return view('dashuser',);});

        Route::get('/papca/{card}', function (string $course_id) {
  

            return   view('categories.papca',compact("course_id"));});

            Route::get('/search', [SearchController::class, 'index'])->name('search.index');
            Route::post('/search', [SearchController::class, 'search'])->name('search.results');
            Route::get('google-chart', [GoogleController::class, 'googleLineChart']);


            Route::get('laravel-google-line-chart', [GoogleLineController::class, 'index']);

