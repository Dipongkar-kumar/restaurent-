<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\homecontroller;
use App\Http\controllers\Admincontroller;

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


Route::get('/',[homecontroller::class,"index"]);

Route::get('/users',[Admincontroller::class,"users"]);



Route::get('/deletemenu/{id}',[Admincontroller::class,"deletemenu"]);

Route::get('/updateview/{id}',[Admincontroller::class,"updateview"]);

Route::post('/update/{id}',[Admincontroller::class,"update"]);

Route::get('/foodmenu',[Admincontroller::class,"foodmenu"]);

Route::post('/uploadfood',[Admincontroller::class,"upload"]);

Route::get('/deleteuser/{id}',[Admincontroller::class,"deleteuser"]);


Route::get('/redirects',[homecontroller::class,"redirects"]);

Route::post('/reservation',[Admincontroller::class,"reservation"]);

Route::get('/viewreservation',[Admincontroller::class,"viewreservation"]);



Route::get('/viewchef',[Admincontroller::class,"viewchef"]);
Route::post('/uploadchef',[Admincontroller::class,"uploadchef"]);
Route::get('/updatechef/{id}',[Admincontroller::class,"updatechef"]);
Route::post('/updatefoodchef/{id}',[Admincontroller::class,"updatefoodchef"]);
Route::get('/deletechef/{id}',[Admincontroller::class,"deletechef"]);

Route::post('/addcart/{id}',[homecontroller::class,"addcart"]);

Route::get('/showcart/{id}',[homecontroller::class,"showcart"]);

Route::get('/remove/{id}',[homecontroller::class,"remove"]);

Route::post('/orderconfirm',[homecontroller::class,"orderconfirm"]);

Route::get('/orders',[Admincontroller::class,"orders"]);

Route::get('/search',[Admincontroller::class,"search"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
