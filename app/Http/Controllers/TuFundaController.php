<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cover;

class TuFundaController extends Controller
{
    public function tufunda(){

        $mascaras = Cover::all();

        return view('layouts.tufunda', compact('mascaras') );
    }
}