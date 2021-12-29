<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class MainViewController extends Controller
{
        public function home()
    {

        return view('home');
    }

        public function item()
    {
        $items = Item::paginate(2);
        return view('item',[
            'items' => $items
        ]);
    }
}

