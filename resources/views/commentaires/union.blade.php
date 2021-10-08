@extends('layouts.templateContact')

@section('contenu')
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Modification et Création d'un commentaire</div>
			<div class="panel-body">

                {{-- Ajout d'un titre pour différencier le contexte : si il existe un commentaire ce sera le titre "modification" sinon ce sera "Edition" --}}
                @isset($commentaire)
                    <h3>Modification</h3>
                @else
                    <h3>Edition</h3>
                @endisset

                {{-- On va ajouter ici la methode isset pour vérifier si le commentaire existe. Auquel cas si le commentaire existe on est en edit(modification) sinon on est en create(creation) --}}
                {{-- Dans cette methode on a juste ajouter les 2 routes qui sont dans edit.blade.php etcreate.blade.php --}}
                @isset($commentaire)
                    {{-- si le commentaire existe, c'est la route edit :  --}}
                    {!! Form::open(['route' => ['commentaires.update',$commentaire->id]]) !!}
                    {{-- comme c'est une edition, nous somme en methode PUT contrairement a la creation qui est en méthode POST (qui lui est assigné à défaut quand on utilise le Form::) --}}
                    @method('PUT')
                @else
                    {{-- sinon c'est la route create :  --}}
                    {!! Form::open(['route' => 'commentaires.store']) !!}
                    {{-- dans la methode create on a toujours besoin la aussi de la variable hidden --}}
                    {!! Form::hidden('article_id', $article_id ) !!}
                @endisset

                    {{-- Pour gerer le isset du dessus et donc les condistion nous avons besoin de faire un ternaire à ce niveau --}}
                    <div class="form-group {!! $errors->has('commentaire') ? 'has-error' : '' !!}">
                        {{-- le ternaire : isset(si j'ai une variable $commentaire ->qui a un attribu commentaire) ? je l'affiche sinon : je met rien  --}}
                        {!! Form::textarea('commentaire', isset($commentaire->commentaire) ? $commentaire->commentaire : null, ['class' => 'form-control', 'placeholder' => 'Votre modification']) !!}
                        {!! $errors->first('commentaire', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
		</div>
	</div>
@endsection