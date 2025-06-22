<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

Route::get('/', [GalleryController::class, 'showGallery']);

Route::get('/admin', function (){
    return view('admin');
});
