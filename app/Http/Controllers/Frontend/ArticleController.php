<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        return view('frontend.article.index', [
            'title' => 'Artikel',
        ]);
    }

    public function category($category)
    {
        return view('frontend.article.index', [
            'title' => 'category : ' . $category,
        ]);
    }

    public function show($id)
    {
        return view('frontend.article.detail', [
            'title' => 'Judul Article',
        ]);
    }

}
