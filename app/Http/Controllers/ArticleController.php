<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($article){
        return view('articles.index', compact('article'));
    }
    public function lecture($article, $page){
        return 'article numero : '.$article. ' page numéro : '.$page;
    }
}
