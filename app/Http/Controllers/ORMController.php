<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Commentaire;

class ORMController extends Controller
{
    public function index(){
        // $article = Article::where('id','=',5)
        // ->get(['article']);
        // return view('test.monsite', ['larticle'=>$article]);

        // $lastcom = Commentaire::orderBy('created_at','desc')
        // ->limit(3)
        // ->get('commentaire');
        // return view('test.monsite', ['les3com'=>$lastcom]);

        $articlepost2019 = Article::where('created_at','>','2021-03-01')
        ->count();
        return view('test.monsite', ['nbarticles'=>$articlepost2019]);
    }

}
