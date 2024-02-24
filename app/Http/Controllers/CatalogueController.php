<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Catalogue;
use App\Models\Cover;




class CatalogueController extends Controller
{
    public function catalogo(){

        $imagesCatalogo= Catalogue::all();
        $totalImagesCatalogo = $imagesCatalogo->count();


        return view('layouts.catalogo', compact('imagesCatalogo', 'totalImagesCatalogo'));
    }
    public function obtenerMarcas(){
        $marcas = Cover::distinct()->pluck('marca');
        return response()->json($marcas);
    }

    public function obtenerModelos($marca) {
        $modelos = Cover::where('marca', $marca)->pluck('modelo');
        return response()->json($modelos);
    }
}