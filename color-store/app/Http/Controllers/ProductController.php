<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cat;
use App\Services\ColorNamingService;
use Illuminate\Http\Request;
use App\Services\ColorNamingServiceProvider;

class ProductController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        
        $cats = Cat::all();
        
        return view('back.products.create', [
            'cats' => $cats
        ]);
    }

    public function colors(Request $request)
    {
        $html = '<h1>OK</h1>';

        $colorsCount = Cat::where('id', $request->cat)->first()->colors_count;
        
        //view priskiriamas kintamajam
        $html = view('back.products.colors')
        ->with(['colorsCount' => $colorsCount])
        ->render();//render- i html kintamuju idejimas uzkrovus puslapi


        return response()->json([
            'html' => $html,
            'message' => 'OK',
        ]);
    }

    public function colorName(Request $request, ColorNamingService $cns)
    {
        return response()->json([
            'name' => $cns->nameIt()
        ]);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}