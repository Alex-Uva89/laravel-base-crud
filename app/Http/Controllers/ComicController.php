<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    protected $messages = [
        'title.required' => 'il titolo è richiesto',
        'title.max' => 'il titolo non può superare i 100 caratteri',
        'description.required' => 'la descrizione è richiesta',
        'thumb.required' => 'l\'immagine è richiesta',
        'price.required' => 'il prezzo è richiesto',
        'price.numeric' => 'il prezzo DEVE essere un numero',
        'series.required' => 'la serie è richiesta',
        'series.max' => 'la serie non può superare i 50 caratteri',
        'sale_date.date' => 'la data di pubblicazione DEVE essere una data valida',
        'type.max' => 'la tipologia non può superare i 50 caratteri',
    ];

    public function index()
    {
        $comics = Comic::paginate(8);
        return view('comics.index', compact('comics'));
    }


    public function create()
    {
        return view('comics.create');
    }

    protected $rulesCreate = [
        'title' => 'required|:comics|max:100',
        'description' => 'required',
        'thumb' => 'required|max:250',
        'price' => 'required|numeric',
        'series' => 'required|max:50',
        'sale_date' => 'nullable|date',
        'type' => 'max:50'
    ];

    public function store(Request $request)
    {
        $this->validate($request, $this->rulesCreate, $this->messages); //validazione dei dati per creare nuovo albo

        $formData = $request->all();
        $comic = Comic::create($formData);
    
        return redirect()->route('comics.show', $comic->id);
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    protected $rulesEdit = [
        'title' => 'required|max:100',
        'description' => 'required',
        'thumb' => 'required|max:250',
        'price' => 'required|numeric',
        'series' => 'required|max:50',
        'sale_date' => 'nullable|date',
        'type' => 'max:50'
    ];

    public function update(Request $request, Comic $comic)
    {
        $this->validate($request, $this->messages, $this->rulesEdit);

        $formData = $request->all();
        $comic->update($formData);
        return redirect()->route('comics.show', $comic->id);
    }

   
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
