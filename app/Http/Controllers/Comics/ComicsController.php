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

    // public function edit($id)
    // {
    //     //
    // }

    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // public function destroy($id)
    // {
    //     //
    // }
}
