<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Catalogue;





class CatalogueController extends Controller
{
    public function catalogo(){

        $imagesCatalogo= Catalogue::all();
        $totalImagesCatalogo = $imagesCatalogo->count();


        return view('layouts.catalogo', compact('imagesCatalogo', 'totalImagesCatalogo'));
    }
}