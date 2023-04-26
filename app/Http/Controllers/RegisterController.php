<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
       return view('register.register');
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'username' => 'required|min:3|max:225|unique:users',
            'email' => 'required|email:dns|unique:users',
            'address' => 'required|max:225',
            'gender' => 'required|max:225',
            'tanggallahir' => 'required|max:225',
            'password' => 'required|min:8|max:225|'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        session()->flash('success', 'Your account has been created successfully.');

        return redirect(route('login'));
    }
}
