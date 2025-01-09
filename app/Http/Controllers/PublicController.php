<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('welcome');
    }

    public function dashboard()
    {
        return view('auth.dashboard');
    }
}
