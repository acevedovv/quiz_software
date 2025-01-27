<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{

    public function index()
    {
        $genres = Genre::with('bands')->get();
        #$genres = Genre::with('bands')->get(); // Supone relación genres -> bands
        return response()->json($genres);

    }

    // Retorna un género con sus bandas por ID
    public function show($id)
    {
        $genre = Genre::with('bands')->find($id);
        if (!$genre) {
            return response()->json(['error' => 'Genre not found'], 404);
        }
        return response()->json($genre);
    }
}
