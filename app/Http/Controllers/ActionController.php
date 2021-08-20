<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Designer;


class ActionController extends Controller
{
    public function add(Request $request)
    {
        // dd($request);
        $character = new Character;
        $character->name = $request->name;
        $character->creation_year = $request->creation_year;
        $character->bd_name = $request->bd_name;
        $character->designer_id = $request->designer_id;
        $character->save();
        return redirect('/');

    }

    public function addDesigner(Request $request)
    {
        // dd($request);
        $designer= new Designer;
        $designer->name = $request->name;
        $designer->birth_year = $request->birth_year;
        $designer->nationality = $request->nationality;
        $designer->save();
        return redirect('/');
    }


    public function updateCharacter(Request $request)
    {
        // dd($request);
        $character= Character::findOrFail($request->id);
        $character->name = $request->name;
        $character->creation_year = $request->creation_year;
        $character->bd_name = $request->bd_name;
        $character->designer_id = $request->designer_id;
        $character->save();
        return redirect('/');
    }

    public function updateDesigner(Request $request)
    {
        // dd($request);
        $designer= Designer::findOrFail($request->id);
        $designer->name = $request->name;
        $designer->birth_year = $request->birth_year;
        $designer->nationality = $request->nationality;
        $designer->save();
        return redirect('/designersList');
    }

    public function deleteCharacter(Request $request)
    {
        $character = Character::findOrFail($request->id);

        $character->delete();

        return redirect('/');
    }

    public function deleteDesigner(Request $request)
    {
        $designer = Designer::findOrFail($request->id);

        $designer->delete();

        return redirect('/');
    }
}
