<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/test', function () {
    return view('test');
});
//rotes partie admin
Route::resource("category",CategoryController::class);
Route::resource("product",ProductController::class);
Route::resource("order",OrderController::class);

//routes partie client

Route::get('front/products/{cat}',[FrontController::class,"products"])->name("front.products");
Route::get('/',[FrontController::class,"index"])->name("front.index");

Route::post('front/panier/store',[FrontController::class,"store"])->name("front.panier.store");

Route::get('front/panier/list',[FrontController::class,"list"])->name("front.panier.list");
Route::get('front/panier/checkout',[FrontController::class,"checkout"])->name("front.panier.checkout");
//Route::get('front/products',[FrontController::class,"products1"])->name("front.products1");
/*Route::get('/',[AcceuilController::class,"acceuil"])->name("accueil");
Route::get('/about',[AcceuilController::class,"presentation"])->name("presentation");
Route::get('/produits',[AcceuilController::class,"produits"])->name("produits");
Route::get('/contact',[AcceuilController::class,"contact"])->name("contact");
Route::post('/contact/save',[AcceuilController::class,"save"])->name("contact.save");*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
