@extends('layouts.templateContact')

@section('contenu')
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Article n°{{ $article->id }}</div>
			<div class="panel-body"> 
                <h1>Titre : {{ $article->titre }}</h1>
				<p>Article : {{ $article->article }}</p>
				<p>Commentaires</p>
				<ul>
					@foreach ($article->commentaires as $commentaire)
						<li>{{ $commentaire->commentaire }} <a href="{{ route('commentaires.edit',['commentaire'=>$commentaire->id]) }}">Modifier ce commentaire</a></li>						
					@endforeach
				</ul>
				<div>
                	<a href="{{ route('form.index') }}">Retour aux articles</a>
					<span>|</span>
					{{-- ici on veut creer un com. On passe en paramètre les précisions de la route 'commentaires.create' (nom donné dans le web.php) cette route à un dernier argument qui est l'id de l'article, pour le récuperer on va le cherché via la table $article et son champ id --}}
					<a href="{{ route('commentaires.create', ['article_id'=> $article->id]) }}">Commenter cet article</a>
					<span>|</span>
                	<a href="{{ route('form.edit',['form'=>$article->id]) }}">Modifier</a>
				</div>
			</div>
		</div>
	</div>
@endsection