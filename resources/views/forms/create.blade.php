@extends('layouts.templateContact')

@section('contenu')
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Articles</div>
			<div class="panel-body"> 
				{!! Form::open(['route' => 'form.store']) !!}
					<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
						{!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'Votre titre']) !!}
						{!! $errors->first('titre', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('article') ? 'has-error' : '' !!}">
						{!! Form::textarea ('article', null, ['class' => 'form-control', 'placeholder' => 'Votre article']) !!}
						{!! $errors->first('article', '<small class="help-block">:message</small>') !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection