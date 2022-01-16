<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
    return view('register.create');
    }
    public function store()
    {
    $attributes = request()->validate([
    'name' => 'required|max:150',
    'username' => 'required|min:4|max:70|unique:users,username',
    'email' => 'required|email|max:150|unique:users,email',
    'password' => 'required|min:7|max:150'
    ]);
   $user = User::create($attributes);
//     $attributes['password'] = bcrypt($attributes['password']);
    auth()->login($user);

    return redirect('/')->with('success', 'Your account has been created.');
    }
}
