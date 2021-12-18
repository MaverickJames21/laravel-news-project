<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'avatar',
        'pseudo',
        'ville',
    ];


    //record link like
    public function likes()
        {
        return $this->hasMany (Like::class);
        }
    //record link comment
    public function comments()
        {
        return $this->hasMany(Comment::class);
        }
    //record link post
    public function posts()
        {
        return $this->hasMany(Post::class);
        }

        public function user()
        {
        return $this->belongsTo(User::class);
        }



    // //record link abbonements
    // public function abbonements()
    //     {
    //     return $this->hasOne(Abbonement::class);
    //     }
}
