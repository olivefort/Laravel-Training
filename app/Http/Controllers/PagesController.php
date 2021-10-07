<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index($nom){
        return view('livre.index', compact('nom'));
    }
    public function page($page){
        return ' page numéro : '.$page;
    }
}
