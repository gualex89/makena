<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cover;

class TuFundaController extends Controller
{
    public function tufunda(){

        

        return view('layouts.tufunda', compact('mascaras') );
    }
    
    public function obtenerMarcas(){
        $marcas = Cover::distinct()->pluck('marca');
        return response()->json($marcas);
    }
}