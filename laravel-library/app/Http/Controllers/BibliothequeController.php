<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auteur;
use App\Models\Livre;

class BibliothequeController extends Controller
{
    public function rechercher(Request $request)
    {
        $query = $request->get('query'); // Get the search term from the request

        // Search the 'livres' table for books that have a title matching the search term
        $livres = Livre::where('titre', 'LIKE', "%{$query}%")->paginate(10);

        // Return the view with the search results
        return view('rechercher', compact('livres'));
    }

    public function editer($id)
{
    // Find the book by its ID
    $livre = Livre::findOrFail($id);

    // Optionally, you can also load the associated author
    // to pass along to the view if needed
    $auteur = $livre->auteur;

    // Pass the book and author (if loaded) to the view
    return view('editer', compact('livre', 'auteur'));
}
public function modifier(Request $request, $id)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'titre' => 'required|max:255',
        'annee_de_publication' => 'required|integer|between:1900,2023',
        'nombre_de_pages' => 'required|integer',
        'auteur_id' => 'required|exists:auteurs,id',
    ]);

    // Find the book by its ID and update it
    $livre = Livre::findOrFail($id);
    $livre->update($validatedData);

    // Redirect to the updated book's page or back to the editing form
    return redirect()->route('show', $livre->id);
}
    public function show($id)
{
    $livre = Livre::with('auteur')->findOrFail($id);
    $auteurs = Auteur::all();
    return view('show', compact('livre', 'auteurs'));
}
}
