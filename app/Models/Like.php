<?php

namespace App\Models;

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
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

      public function comment()
      {
          return $this->belongsTo(Comment::class);
      }
}
