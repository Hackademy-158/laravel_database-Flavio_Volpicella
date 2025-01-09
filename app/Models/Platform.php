<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = ['name', 'logo', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
