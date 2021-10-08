@extends('layouts.templateContact')

@section('contenu')
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Modification de l'article</div>
			<div class="panel-body"> 
				{!! Form::open(['route' => ['form.update',$article->id]]) !!}
                @method('PUT')
					<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
						{!! Form::text('titre', $article->titre, ['class' => 'form-control', 'placeholder' => 'Votre titre']) !!}
						{!! $errors->first('titre', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('article') ? 'has-error' : '' !!}">
						{!! Form::textarea ('article', $article->article, ['class' => 'form-control', 'placeholder' => 'Votre article']) !!}
						{!! $errors->first('article', '<small class="help-block">:message</small>') !!}
					</div>
					{!! Form::submit('Mettre à jour', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection