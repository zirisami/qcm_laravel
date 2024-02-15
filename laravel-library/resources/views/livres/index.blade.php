@extends('layouts.app')

@section('content')
    <h1>Liste des Livres</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Année Pub</th>
                <th>Nombre de Pages</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livres as $livre)
                <tr>
                    <td>{{ $livre->titre }}</td>
                    <td>{{ $livre->auteur }}</td>
                    <td>{{ $livre->annee_de_publication }}</td>
                    <td>{{ $livre->nombre_de_pages }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
