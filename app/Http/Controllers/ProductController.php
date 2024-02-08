<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\Customer;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CustomerRequest;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductController extends Controller
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
        // $product = Products::find(36);
        // dd($product->getImage());
        // array_map(function($rule) {
        //     Rule::create([
        //         'name' => $rule
        //     ]);
        // }, self::RULES);
        
        return view('products.index', ['products' => Products::with('pictures')->orderBy('created_at', 'desc')->limit(6)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store() {
        dd("Bonjour");
        // $customer = Customer::create([
        //     'name' => $request->validated('name'),
        //     'email' => $request->validated('email'),
        //     'password' => Hash::make($request->validated('password')),
        //     'status' => 0
        // ]);
        // if ($customer) {
        //     dd($customer);
        // }
        // return redirect()->route('products.index')->with('Un message de confirmation vous a été envoyé');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug, Products $product)
    {
        if ($slug !== $product->slug) {
            return to_route('products.show', ['slug' => $product->slug, 'product' => $product]);
        }
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
