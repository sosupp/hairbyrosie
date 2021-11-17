<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicGalleryController extends Controller
{
    public function index()
    {
        return view('frontend.gallery.index');

    }
}
