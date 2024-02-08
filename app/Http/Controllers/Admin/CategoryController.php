<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index', ['categories' => Categories::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = new Categories();
        return view('admin.category.form', [
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        Categories::create($request->validated());
        return to_route('admin.category.index')->with('success', 'Votre catégorie a bien été ajoutée');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $category)
    {
        $products = Products::query()->where('categories_id', '=', $category->id)->get();
        return view('admin.category.categoryproducts', [
            'category' => $category,
            'products' => $products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $category)
    {
        return view('admin.category.form', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Categories $category)
    {
        $category->update($request->validated());
        return to_route('admin.category.index')->with('success', 'Votre catégorie a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $category)
    {
        $category->delete();
        return to_route('admin.category.index')->with('success', 'Votre catégorie a bien été supprimée');
    }
}
