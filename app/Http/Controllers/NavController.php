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

    public function designersList()
    {
        $designers = Designer::all();
        return view('designersList', ['designers'=> $designers]);
    }

    public function addCharacter()
    {
        $designers = Designer::all();

        return view('addCharacter', ['designers' => $designers]);
    }

    public function addDesigner()
    {
        return view('addDesigner');
    }
    
    public function updateCharacter(Request $request)
    {
        $character = Character::findOrFail($request->id);
        $designers= Designer::All();
        return view('updateCharacter', ['character'=>$character, 'designers'=>$designers]);
    }

    public function updateDesigner(Request $request)
    {
        $designer = Designer::findOrFail($request->id);
        return view('updateDesigner', ['designer'=>$designer]);
    }

    
}

