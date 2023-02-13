<?php

namespace App\Http\Controllers\Comics;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index() {
        $comics = Comic::all();
        return view('comics.comics', compact('comics'));
    }
}
