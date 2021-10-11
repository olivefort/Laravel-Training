@extends('layouts.templateContact')

@section('contenu')
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			{{-- grace a l'export de $article du controller on peut utiliser ici la variable $article et donc toute les données lié à l'article visé (par l'id) --}}
			<div class="panel-heading">Article n°{{ $article->id }}</div>
			<div class="panel-body"> 
                <h1>Titre : {{ $article->titre }}</h1>
				<p>Article : {{ $article->article }}</p>
				<p>Commentaires</p>
				<ul>
					{{-- ici on va utilisé la cardinalité faite dans le modèles Article.php et on utilise donc la fonction 'commentaires' créé la bas pour utilisé la table commentaire via la table article puis on le passe dans un alias (as) pour simplifier son nom de variable...  --}}
					@foreach ($article->commentaires as $commentaire)
						{{-- ensuite on a plus qu'a appelé le champ ->commentaire --}}
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
				<p>Les Tags</p>
				<ul>
					@foreach ($article->tags as $tag)
						<li>{{ $tag->mot }} <a href="{{ route('tags.edit',['tag'=>$tag->id, 'article'=>$article->id]) }}">Modifier ce tag</a></li>						
					@endforeach
				</ul>

			</div>
		</div>
	</div>
@endsection