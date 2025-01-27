<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;

class BandController extends Controller
{
    //Retorna todas las bandas
    public function index()
    {
        $bands = Band::all();
        return response()->json($bands);
    }

    // Retorna una banda por ID
    public function show($id)
    {
        $band = Band::find($id);
        if (!$band) {
            return response()->json(['error' => 'Band not found'], 404);
        }
        return response()->json($band);
    }
}
