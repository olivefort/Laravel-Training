<ul>
@foreach ($tags as $tag)
<li>{{ $tag->mot }}<a href="{{ route('tags.edit',['tag'=>$tag->id])}}">Modifier</a></li>   
@endforeach
</ul>