<?php

namespace App\Http\Controllers;

use App\Models\Livre; // Assuming Livre is the model for your books

class LivreController extends Controller
{
    public function index()
    {
        $livres = Livre::all(); // Retrieve all livres from the database
        return view('livres.index', compact('livres')); // Pass the livres to the view
    }
}
