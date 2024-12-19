<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSongRequest;

class SongsController extends Controller
{
    public function create()
    {
        return view('song.create');
    }
    public function store(StoreSongRequest $request)
    {
        // $song = new Songs();
        // $song->title = $request->title;
        // $song->artist = $request->artist;
        // $song->album = $request->album;
        // $song->description = $request->description;

        // $song->save(); 

        Songs::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'album' => $request->album,
            'description' => $request->description,
            'cover' => $request->file('cover') ? $request->file('cover')->store('covers', 'public') : 'default/default.png',
        ]);

        return redirect(route('homepage'))->with('songCreated', 'Canzone inserita con successo');
    }


    public function index()
    {
        $songs = Songs::all();
        return view('song.index', ['song' => $songs]);
    }

    public function destroy(Songs $song)
    {
        $song->delete();
        return redirect(route('song.index'))->with('songDelete', 'Canzone eliminata con successo');
    }
}
