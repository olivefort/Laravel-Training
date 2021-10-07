@extends('layouts.layout')

@section('titre')
{{ $titre }}
@endsection

@section('content')
Mon nom est {{ $nom }}<br>
Mon prénom est {{ $prenom }}<br>
@endsection

@section('profil')
Je suis développeur web junior
@endsection