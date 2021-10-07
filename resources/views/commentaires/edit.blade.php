@extends('layouts.templateContact')

@section('contenu')
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Modification du commentaire</div>
			<div class="panel-body"> 
                {!! Form::open(['route' => ['commentaires.update',$commentaire->id]]) !!}
                @method('PUT')
                    <div class="form-group {!! $errors->has('commentaire') ? 'has-error' : '' !!}">
                        {!! Form::textarea('commentaire', $commentaire->commentaire, ['class' => 'form-control', 'placeholder' => 'Votre modification']) !!}
                        {!! $errors->first('commentaire', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Mettre à jour le com ', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
		</div>
	</div>
@endsection