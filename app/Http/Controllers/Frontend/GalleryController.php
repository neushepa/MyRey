<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Models\album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        return view('frontend.gallery.index', [
            'title'     => 'Gallery',
            'galleries' => Gallery::orderBy('created_at', 'desc')->paginate(9),
            'albums'    => album::get(),
        ]);
    }
}
