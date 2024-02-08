<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function login() {
        User::create([
            'name' => 'Sory Kaba',
            'rules' => 'Super admin',
            'email' => 'sory@kaba.sn',
            'password' => Hash::make('4444')
        ]);
        return view('admin.auth.login');
    }

    public function dologin(LoginAuthRequest $request) {
        $credential = $request->validated();
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.product.index'));
        }
        return back()->withErrors([
            'email' => 'Identifiant incorrect'
        ])->onlyInput('email');
    }

    public function logout() {
        Auth::logout();
        return to_route('login')->with('success', 'Vous êtes maintenant déconnecté');
    }
}
