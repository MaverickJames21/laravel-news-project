<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'img',
        'content',
    ];


    //record link comment
    public function comments()
        {
        return $this->hasMany(Comment::class);
        }
    //record link like
    public function likes()
        {
        return $this->hasMany (Like::class);
        }
    //record link user
    public function user()
        {
        return $this->belongsTo(Profil::class);
        }
}
