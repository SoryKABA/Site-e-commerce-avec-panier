<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use App\Models\Sizes;
use App\Models\Category;
use App\Models\Products;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Picture;
use App\Models\Rule;

use function PHPSTORM_META\map;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // const RULES = [
    //     'admin',
    //     'super admin',
    //     'standard', 
    //     'user'
    //    ];
    public function index()
    { 
        // array_map(function($rule) {
        //     Rule::create([
        //         'name' => $rule
        //     ]);
        // }, self::RULES);
        
        return view('admin.product.indexe', [
            'products' => Products::all(),
            'sizes' => Sizes::pluck('sizename', 'id'),
            'categories' => Categories::pluck('categoryname', 'id')
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Products();
        return view('admin.product.form',[
            'product' => $product,
            'categories' => Categories::pluck('categoryname', 'id'),
            'sizes' => Sizes::pluck('sizename', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        //dd($request->validated());
        $product = Products::create($request->validated());
        $product->categories()->associate($request->validated('categories'));
        $product->sizes()->associate($request->validated('sizes'));
        $product->attachFiles($request->validated('pictures'));
        return to_route('admin.product.index')->with('success', 'Votre produit a bien été ajouté !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        return view('admin.product.form',[
            'product' => $product,
            'categories' => Categories::pluck('categoryname', 'id'),
            'sizes' => Sizes::pluck('sizename', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Products $product)
    {
        
        $product->categories()->associate($request->validated('categories'));
        $product->sizes()->associate($request->validated('sizes'));
        $product->update($request->validated());
        $product->attachFiles($request->validated('pictures'));
        return redirect()->route('admin.product.index')->with('success', 'Votre produit a bien été modifié !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        Picture::destroy($product->pictures()->pluck('id'));
        $product->delete();
        return redirect()->route('admin.product.index', [
            'products' => Products::all()
            ]
        )->with('success', 'Votre produit a bien été supprimé');
    }
}
