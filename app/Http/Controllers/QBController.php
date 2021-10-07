<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QBController extends Controller
{
    public function index(){
        // $larticle = DB::table('articles')
        //     ->where('id','=',5)
        //     ->get('article');
        //     return view('test.monsite', ['larticle'=>$larticle]);

        $lastcom = DB::table('commentaires')
            ->orderBy('created_at','desc')
            ->limit(3)
            ->get('commentaire');
            return view('test.monsite', ['les3com'=>$lastcom]);
    }
}
