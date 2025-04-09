<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddAnimal;

class AddAnimal extends Controller
{
    // camelCase
    function AddAnimal(){
        return view('add-animal');
    }

    function inserir(Request $request){
        $animal = new AddAnimal();
        $animal -> create($request->all());
    }
}
