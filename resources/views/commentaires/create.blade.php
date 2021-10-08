@extends('layouts.templateContact')

@section('contenu')
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Edition d'un commentaire</div>
			<div class="panel-body"> 
				{!! Form::open(['route' => 'commentaires.store']) !!}
					{{-- Ici on va creer un champ caché pour gérer l'id de l'article --}}
                    {!! Form::hidden('article_id', $article_id ) !!}				
					<div class="form-group {!! $errors->has('commentaire') ? 'has-error' : '' !!}">
						{!! Form::textarea ('commentaire', null, ['class' => 'form-control', 'placeholder' => 'Votre article']) !!}
						{!! $errors->first('commentaire', '<small class="help-block">:message</small>') !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection