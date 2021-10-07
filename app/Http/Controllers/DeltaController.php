<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Article;


class DeltaController extends Controller
{
    public function index(){
        // $articles = DB::table('articles')->get('titre');
        // dd($articles);
        // return $spot;

        $commentaires = Article::find(1)->commentaires()->get();
        // dd($commentaires);
        $articles = Article::where('id','<',5)
            ->where('titre','like','%possibilité%')
            ->get(['id','article']);
        dd($articles);
    }
}
