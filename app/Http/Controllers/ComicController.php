<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    // Mostra il form di modifica per il comic specificato
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }


    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
        ]);

        $comic->update($request->only(['title', 'description', 'price', 'series', 'sale_date', 'type']));

        return redirect()->route('comics.index')->with('success', 'Comic updated successfully');
    }



    public function index()
    {
        $comics = Comic::all();
        //dd($comics);
        return view('comics.index', compact('comics'));
    }
    

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required',
        ]);

    // Aggiorna i campi fillable
    $comic->update($request->only(['title', 'description', 'price', 'series', 'sale_date', 'type']));

    // Reindirizza l'utente con un messaggio di successo
    return redirect()->route('comics.index')->with('success', 'Comic updated successfully');
    }
}
