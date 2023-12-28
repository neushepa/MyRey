<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        return view('frontend.activity.index', [
            'title' => 'Activity',
        ]);
    }
    
    public function category($category)
    {
        return view('frontend.activity.index', [
            'title' => 'category : ' . $category,
        ]);
    }

    public function show($slug)
    {
        return view('frontend.activity.detail', [
            'title' => 'Judul Aktivitas',
        ]);
    }

}
