<?php

namespace App\Http\Controllers\Comics;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

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
}
