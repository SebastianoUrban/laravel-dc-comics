<?php

namespace App\Http\Controllers\Comics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    public function index() {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function show($id) {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    public function create() {
        return view('comics.create');
    }

    
    public function store(Request $request) {
        $data = $request->all();

        $request->validate([
            'title' => 'required|string|min:2|max:100',
            'description' => 'nullable',
            'thumb' => 'required|url|min:5',
            'price' => 'required|numeric|max_digits:2',
            'series' => 'required|string|max:20',
            'sale_date' => 'required',
            'type' => 'required|string|max:20'
        ],
        [
            'title.required' => 'Il campo TITOLO è obbligatorio!',
            'title.string' => 'Il campo TITOLO deve essere una STRINGA!',
            'title.min' => 'Il campo TITOLO deve essere lungo ALMENO 2 CARATTERI!',
            'title.max' => 'Il campo TITOLO deve essere lungo AL MASSINO 100 CARATTERI!',
            'thumb.required' => 'Il campo THUMB è obbligatorio!',
            'thumb.min' => 'Il campo THUMB deve essere lungo ALMENO 5 CARATTERI!',
            'price.required' => 'Il campo PRICE è obbligatorio!',
            'price.max_digits' => 'Il campo PRICE deve avere AL MASSINO 2 DIGITS!',
            'series.required' => 'Il campo SERIES è obbligatorio!',
            'series.string' => 'Il campo SERIES deve essere una STRINGA!',
            'series.max' => 'Il campo SERIES deve essere lungo AL MASSINO 20 CARATTERI!',
            'sale_date.required' => 'Il campo SALE DATE è obbligatorio!',
            'type.required' => 'Il campo TYPE è obbligatorio!',
            'type.string' => 'Il campo TYPE deve essere una STRINGA!',
            'type.max' => 'Il campo TYPE deve essere lungo AL MASSINO 20 CARATTERI!'
        ]);
        
        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->save();
        
        return redirect()->route('comics.show', $newComic->id);
    }

    public function edit(Comic $comic) {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic) {
        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    public function destroy(Comic $comic) {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
//check