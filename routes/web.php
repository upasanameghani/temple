<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PastworkController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FrontController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
 
Auth::routes();
Route::group(["middleware" => ["auth"]], function(){
Route::get('/home', [HomeController::class, 'index'])->name('home');

// About 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home-about',[AboutController::class,'about']);
Route::get('add-about',[AboutController::class,'add']);
Route::post('store-about',[AboutController::class,'store']);
Route::get('edit-about/{id}',[AboutController::class,'edit']);
Route::patch('update-about/{id}',[AboutController::class,'update']);


// Slider 
     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
     Route::get('home-slider',[SliderController::class,'slider']);
     Route::get('add-slider',[SliderController::class,'add']);
     Route::post('store-slider',[SliderController::class,'store']);
     Route::get('edit-slider/{id}',[SliderController::class,'edit']);
     Route::patch('update-slider/{id}',[SliderController::class,'update']);



     //Product
  
     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
     Route::get('home-product',[ProductController::class,'product']);
     Route::get('add-product',[ProductController::class,'add']);
     Route::post('store-product',[ProductController::class,'store']);
     Route::get('edit-product/{id}',[ProductController::class,'edit']);
     Route::patch('update-product/{id}',[ProductController::class,'update']);

     //Blog
      
  
       Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
       Route::get('home-blog',[BlogController::class,'blog']);
       Route::get('add-blog',[BlogController::class,'add']);
       Route::post('store-blog',[BlogController::class,'store']);
       Route::get('edit-blog/{id}',[BlogController::class,'edit']);
       Route::patch('update-blog/{id}',[BlogController::class,'update']);

        //Past_Work
  
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('home-work',[PastworkController::class,'work']);
        Route::get('add-work',[PastworkController::class,'add']);
        Route::post('store-work',[PastworkController::class,'store']);
        Route::get('edit-work/{id}',[PastworkController::class,'edit']);
        Route::patch('update-work/{id}',[PastworkController::class,'update']);

         //Service
  
         Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
         Route::get('home-service',[ServiceController::class,'service']);
         Route::get('add-service',[ServiceController::class,'add']);
         Route::post('store-service',[ServiceController::class,'store']);
         Route::get('edit-service/{id}',[ServiceController::class,'edit']);
         Route::patch('update-service/{id}',[ServiceController::class,'update']);

           //Service
  
           Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
           Route::get('home-gallery',[GalleryController::class,'gallery']);
           Route::get('add-gallery',[GalleryController::class,'add']);
           Route::post('store-gallery',[GalleryController::class,'store']);
           Route::get('edit-gallery/{id}',[GalleryController::class,'edit']);
           Route::patch('update-gallery/{id}',[GalleryController::class,'update']);
  
         //Contact
         Route::get('home-contact',[ContactController::class,'contact']);
});

Route::get('/', [FrontController::class, 'index']);
Route::get('/aboutus', [FrontController::class, 'about'])->name('aboutus');
