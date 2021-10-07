<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function chat($id){
        return view('membre.discussion', ['user' => $id]);
    }
    public function list($id){
        return view('membre.liste', ['user' => $id]);
    }
}
