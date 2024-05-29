<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
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
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required',
        ]);

        Comic::create($data);

        return redirect()->route('comics.index');
    }
}
