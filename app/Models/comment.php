<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = ['content'];

    //record link user
    public function profil()
    {
        return $this->belongTo(Profil::class);
    }

    //record link post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
