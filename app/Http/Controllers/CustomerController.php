<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function store(CustomerRequest $request) {
        dd("Bonjour");
        $customer = Customer::create([
            'name' => $request->validated('name'),
            'email' => $request->validated('email'),
            'password' => Hash::make($request->validated('password')),
            'status' => 0
        ]);
        if ($customer) {
            dd($customer);
        }
        return redirect()->route('products.index')->with('Un message de confirmation vous a été envoyé');
    }
}
