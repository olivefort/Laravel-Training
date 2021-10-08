<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\FormsRequest;
use App\Models\Article;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bitenbois = Article::all();
        return view('forms.index', compact('bitenbois'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormsRequest $formRequest)
    {
        $article = new Article;
        $article->titre = $formRequest->titre;
        $article->article = $formRequest->article;
        $article->save();
        return redirect()->route('form.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('forms.show', compact('article'));
        //ici on a stocké dans la variable $article les données d'un article en fonction de son id que l'on renvois à la vue show.blade.php en compact 'article'
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('forms.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormsRequest $request, $id)
    {
        $article = Article::find($id);
        $article->titre = $request->titre;
        $article->article = $request->article;
        $article->save();
        return redirect()->route('form.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
