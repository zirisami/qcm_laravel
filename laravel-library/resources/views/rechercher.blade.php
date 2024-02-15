@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Recherche de livres</h2>
        <form action="{{ route('rechercher') }}" method="GET">
            <div class="form-group">
                <label for="query">Rechercher un livre</label>
                <input type="text" name="query" id="query" class="form-control" placeholder="Entrez le titre du livre..." value="{{ request()->get('query') }}">
            </div>
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>

        <hr>

        @if($livres->isEmpty())
            <p>Aucun livre trouvé.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Année de Publication</th>
                        <th>Nombre de Pages</th>
                        <th>Auteur</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($livres as $livre)
                        <tr>
                            <td>{{ $livre->titre }}</td>
                            <td>{{ $livre->annee_de_publication }}</td>
                            <td>{{ $livre->nombre_de_pages }}</td>
                            <td>{{ $livre->auteur->nom }} {{ $livre->auteur->prenom }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $livres->links() }}
        @endif
    </div>
@endsection
