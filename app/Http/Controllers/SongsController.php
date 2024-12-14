<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    public function create() {
        return view ('song.create');
    }
    public function store(Request $request) {
        $song = new Songs();
        $song->title = $request->title;
        $song->artist = $request->artist;
        $song->album = $request->album;
        $song->save();
    }
}
