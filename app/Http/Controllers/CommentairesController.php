<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;

class CommentairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($article_id)
    {
        // return view('commentaires.create', compact('article_id'));
        //Option : Vu que create et edit font etroitement les même chose, on va créer la même vue pour les 2 : 
        return view('commentaires.union', compact('article_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commentaire = new Commentaire;
        $commentaire->article_id = $request->article_id;
        $commentaire->commentaire = $request->commentaire;
        $commentaire->save();
        return redirect()->route('form.show', ['form'=> $commentaire->article_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        // $commentaire = Commentaire::find($commentaire);
        // return view('commentaires.show', compact('commentaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        // return view('commentaires.edit', compact('commentaire'));
        //Option : la même vue que create
        return view('commentaires.union', compact('commentaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        $commentaire->commentaire = $request->commentaire;
        $commentaire->save();
        //ici on veut rediriger vers l'article sur lequel on a modifier un com. Du coup on reprend la même route que pour le form.show (dans FormController) et on passe en paramètre les précisions du chemin a savoir l'article (form) dont on vient de modifier le com ($commentaire) qu'on cible avec son champ article_id de la bdd
        return redirect()->route('form.show', ['form'=> $commentaire->article_id]);
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
