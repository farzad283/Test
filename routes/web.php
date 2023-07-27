<?php

 use App\Http\Controllers\BottleController;
 use App\Http\Controllers\CellarController;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\SAQController;
 
 use App\Http\Livewire\SingleBottle;
 use App\Http\Livewire\SingleCellar;

 use App\Http\Livewire\ManyBottles;
 use App\Http\Livewire\ManyCellars;


use App\Http\Livewire\AddCellar;
use App\Http\Livewire\AddBottle;
use App\Http\Controllers\CustomAuthController;
use App\Http\Livewire\BottleAdvancedForm;
use App\Http\Livewire\SearchAdvancedResults;
use App\Http\Livewire\BottleSearch;
use App\Http\Livewire\AddBottlesToCellar;

use App\Http\Livewire\UpdateBottle;

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
Route::middleware('auth')->group(function (){ 
Route::get('/', function () {
    return view('welcome');
});

// À refaire avec LiveWire  N'oublier pas de mettre des commentaire en Français et le phpDoc aussi. 


/////////////////////// Maryline ///////


/////////////////////// Fin Maryline ///////


/////////////////////// Farzad ///////
//Route::get('bottles',ManyBottles::class);
Route::get('/bottles/{bottle_id}', SingleBottle::class);
Route::get('/cellars', ManyCellars::class)->name('cellars');
Route::get('/bottle', BottleAdvancedForm::class)->name('bottle-advanced-form');
Route::get('/search', SearchAdvancedResults::class)->name('search-advanced-results');
Route::get('/bottlesearch', BottleSearch::class)->name('bottle-search');

/////////////////////// Fin Farzad ///////



/////////////////////// Camille ///////

Route::get('add-bottle', AddBottle::class)->name('add-bottle');
Route::get('wishlist', AddBottle::class)->name('wishlist');
/////////////////////// Fin Camille ///////


/////////////////////// Safoora //////////////////

Route::get('update',[SaqController::class,'updateSAQ']);
////////////////////////////////////////////////////////////////////////////////////////

Route::get('bottles',ManyBottles::class)->name('bottles');
Route::get('/bottles/{bottle_id}', SingleBottle::class);

Route::get('/add-cellar', AddCellar::class)->name('add-cellar');


Route::get('/update_bottle/{cellar_id}/{bottle_id}', UpdateBottle::class)->name('update_bottle');
Route::get('/add-bottles-to-cellar/{bottle_id}/{unliste}', AddBottlesToCellar::class)->name('add-bottles-to-cellar');

// Route::get('/ajouter-cellier', AjouterCellier::class)->name('ajouter_cellier');



//////////////////////////////////////////////////////////////////////////////////////
//we have to delete these routes (just for guide)
Route::get('cellar',[CellarController::class,'index']);
Route::get('cellar',[CellarController::class,'store']);



Route::post('addNewBottle',[BottleController::class,'addNewBottle']);
Route::post('drinkBottleFromCellar',[BottleController::class,'drinkBottleFromCellar']);
Route::post('addBottleToCellar',[BottleController::class,'addBottleToCellar']);
Route::get('searchBottle',[BottleController::class,'searchBottle']);

/////////////////////// Fin Safoora ///////


/////////////////////// Xavier ///////
Route::get('/singleCellar/{cellar_id}',SingleCellar::class)->name('singleCellar');
}); 

Route::post('register', [CustomAuthController::class, 'store']);
Route::get('register', [CustomAuthController::class, 'create'])->name('register');
Route::get('login', [CustomAuthController::class,'index'])->name('login');
Route::post('login', [CustomAuthController::class,'authentication']);