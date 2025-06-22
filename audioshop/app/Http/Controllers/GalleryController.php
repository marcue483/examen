<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;

class GalleryController extends Controller
{
    public function showGallery()
    {
        $images = GalleryImage::all();
        return view('audioshop', compact('images'));
    }
}
