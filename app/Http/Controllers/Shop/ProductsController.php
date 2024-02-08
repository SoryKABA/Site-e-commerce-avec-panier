<?php

namespace App\Http\Controllers\Shop;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductsController extends Controller
{
    public function index() {
        
        return view('shop.index', ['products' => Products::with('pictures')->orderBy('id', 'desc')->limit(8)->get()]);
    }

    public function show(string $slug, Products $product)
    {
        if ($slug !== $product->slug) {
            return to_route('products.show', ['slug' => $product->slug, 'product' => $product]);
        }
        return view('shop.show', ['product' => $product]);
    }
}
