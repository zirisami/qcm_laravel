@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $livre->titre }}</h1>
        <p>Année de publication: {{ $livre->annee_de_publication }}</p>
        <p>Nombre de pages: {{ $livre->nombre_de_pages }}</p>
        <p>Auteur: {{ $livre->auteur}}</p>
        <p>Année de publication : {{ $livre->annee_de_publication}}</p>
    </div>
@endsection
