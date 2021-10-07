{!! Form::open(['route' => ['tags.update',$tag->id]]) !!}
@method('PUT')
    <div class="tags-group {!! $errors->has('mot') ? 'has-error' : '' !!}">
        {!! Form::text('mot', $tag->mot, ['class' => 'tag-control', 'placeholder' => 'Votre tag']) !!}
        {!! $errors->first('mot', '<small class="help-block">:message</small>') !!}
    </div>
    {!! Form::submit('Mettre à jour', ['class' => 'btn btn-info pull-right']) !!}
{!! Form::close() !!}