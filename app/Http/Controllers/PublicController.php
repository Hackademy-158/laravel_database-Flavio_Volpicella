<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware('auth', only: ['dashboard'])
        ];
    }
    public function homepage()
    {
        $song = Songs::orderby('created_at', 'desc')->take(3)->get();
        return view('welcome');
    }

    public function dashboard()
    {
        $song = Songs::where('user_id', Auth::user()->id)->get();
        return view('auth.dashboard');
    }
}
