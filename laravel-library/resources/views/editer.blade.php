@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Book</h2>
        <form action="{{ route('modifier', $livre->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titre">Title</label>
                <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre', $livre->titre) }}" required>
            </div>
            <div class="form-group">
                <label for="titre">Auteur</label>
                <input type="text" name="auteur" id="auteur" class="form-control" value="{{ old('titre', $livre->auteur) }}" required>
            </div>
            <div class="form-group">
                <label for="annee_de_publication">Year of Publication</label>
                <input type="number" name="annee_de_publication" id="annee_de_publication" class="form-control" value="{{ old('annee_de_publication', $livre->annee_de_publication) }}" min="1900" max="2023" required>
            </div>
            <div class="form-group">
                <label for="nombre_de_pages">Number of Pages</label>
                <input type="number" name="nombre_de_pages" id="nombre_de_pages" class="form-control"  value="{{ old('nombre_de_pages', $livre->nombre_de_pages) }}" required>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top:20px;">Save Changes</button>
        </form>
    </div>
@endsection
