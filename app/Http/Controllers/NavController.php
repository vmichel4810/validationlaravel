<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Designer;

class NavController extends Controller
{
    public function home()
    {
        $characters = Character::all();
        $designers = Designer::all();
        return view('home', ['characters'=> $characters, 'designers'=> $designers]);
    }
}
