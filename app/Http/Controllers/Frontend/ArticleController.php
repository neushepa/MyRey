<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        
    }

    public function show($id)
    {
        return view('frontend.article.detail', [
            'title' => 'Judul Article',
        ]);
    }

}
