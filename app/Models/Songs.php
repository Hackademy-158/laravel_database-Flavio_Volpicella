<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    protected $fillable = ['title', 'artist', 'album', 'description'];
}
