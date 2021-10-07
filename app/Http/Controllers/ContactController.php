<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        return view('contact.index');
    }
    public function postForm(ContactRequest $request){
        return view('contact.confirm', ['nom' => $request->nom]);
    }
}
