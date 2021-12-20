<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource as UserResource;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
       /* return User:: all();*/
        $users=User::paginate(10);

        /* return User:: all();*/
        return UserResource::collection($users);

    }
}


