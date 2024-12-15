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
        // $song = new Songs();
        // $song->title = $request->title;
        // $song->artist = $request->artist;
        // $song->album = $request->album;
        // $song->description = $request->description;
        
        // $song->save();

        Songs::create([
            'title'=> $request->title,
            'artist'=> $request->artist,
            'album'=> $request->album,
            'description'=> $request->description
        ]);
        
        return redirect(route('homepage'))->with('songCreated', 'Canzone inserita con successo');
    }
}
