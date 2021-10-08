@extends('layouts.templateContact')

@section('contenu')
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Les Derniers Articles</div>
			<div class="panel-body">				
				<ul>
					@foreach ($bitenbois as $article)
						<li>
							<a href="{{ route('form.show',['form'=>$article->id]) }}">Voir</a> 
							<a href="{{ route('form.edit',['form'=>$article->id]) }}">Modifier</a> 
							{{ $article->titre }}({{ $article->commentaires->count() }})({{ $article->tags->count() }})</li>
					@endforeach
				</ul>
				<a href="{{ route('form.create') }}">Publier un nouvel article</a>
			</div>
		</div>
	</div>
@endsection