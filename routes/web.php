<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('dashboard');
});


// food controller
Route::controller(FoodController::class)->group(function(){
    Route::get('/food/foods','FoodAll')->name('food.all');
    Route::get('/food/drinks','FoodDrink')->name('food.drink');
    Route::get('/food/drinks/foods','FoodAndDrink')->name('food.drink.food');
    Route::get('/food/insert','FoodInsert')->name('food.insert');
    Route::post('/food/store','FoodStore')->name('food.store');
    Route::get('/food/edit/{id}','FoodEdit')->name('food.edit');
    Route::post('/food/update/{id}','FoodUpdate')->name('food.update');
    Route::get('/food/delete/{id}','FoodDelete')->name('food.delete');

    //-------------------------------------------------------------------------
    Route::get('/food','Food')->name('food');
});























Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout','Destroy')->name('admin.logout');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
