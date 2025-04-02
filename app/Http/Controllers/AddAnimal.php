<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddAnimal extends Controller
{
    // camelCase
    function AddAnimal(){
        return view('add-animal');
    }
}
