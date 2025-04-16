<?php

use App\Http\Controllers\computersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

Route::get('/', [StaticController::class, 'index'])->name('home.index');

Route::get('/about', [StaticController::class, 'about'])->name('home.about'); 

// Route::get('/portfolio', [StaticController::class, 'portfolio'])->name('home.portfolio'); 

Route::get('/contact', [StaticController::class, 'contact'])->name('home.contact'); 

Route::resource('computers', computersController::class);



Route::get('/store/{category?}/{item?}', function ($category = null, $item= null) {
    if(isset($item)){
        return "<h1>{$item }</h1}";
    }else{
        if(isset($category)){
            return "<h1>{$category }</h1}";
        }
    }
    return "bvb";
    });
/*
Route::get('/store', function () {
    $filter = request('store');
    if(isset($filter)){
        return 'this page is viewing <span style="color: red">'.strip_tags($filter).'</span>';

    }
    return 'this page is viewing <span style="color: red"> All products </span>';
});  */
