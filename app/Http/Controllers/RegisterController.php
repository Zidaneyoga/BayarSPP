<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // public function register()
    // {
    //     return view('auth.register');

    public function registerr()
    {
        return view('auth.registerr', [
            'title' => 'Registerr',
            'active' => 'registerr'
        ]);
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'alamat' => 'required|max:255',
            'password' => 'required|min:5|max:10'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }
}
