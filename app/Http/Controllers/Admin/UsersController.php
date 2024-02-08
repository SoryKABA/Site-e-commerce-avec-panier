<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    const RULES = [
        'admin',
        'super admin',
        'standard'
       ];
    public function index() {
        return view('admin.users.user',[
            'users' => User::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.users.form',
       [
        'rules' => self::RULES,
        'user' => new User()
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request, User $user)
    {
        // $user->rules = $request->validated('rules');
        $user->create([
            'name' => $request->validated('name'),
            'email' => $request->validated('email'),
            'rules' => $request->validated('rules'),
            'password' => Hash::make($request->validated('passwprd'))
        ]);
        
        $user->password = Hash::make($request->validated('password'));
        return to_route('admin.users.user')->with('success', 'Utilisateur a été ajouté');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.form',
       [
        'rules' => self::RULES,
        'user' => $user
       ]);
    }

    public function show(User $user) {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return to_route('admin.users.user')->with('success', "L'utilisateur a bien été supprimé");
    }
}
