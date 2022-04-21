<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view('auth.editpassword', [
            'title' => 'Editpassword',
            'active' => 'editpassword'
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => 'required|min:5|max:10',
            'password' => 'required|min:5|max:10|confirmed',
            // 'password_confirmation' => 'required|min:5|max:10',
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)) {

            auth()->user()->update(['password' => Hash::make($request->password)]);

            return back()->with('success', 'Password telah di update');
            
        }

        throw ValidationException::withMessages([

            'current_password' => 'Password yang dimasukkan tidak sesuai'

        ]);
    }
}
