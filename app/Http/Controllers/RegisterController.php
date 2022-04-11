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
            'npsn' => 'required|max:11',
            'password' => 'required|min:5|max:10'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }

    public function profilesekolah($id){
        
        $data= User::find($id);
        return view('admin.profil.profilesekolah', compact('data'));
    }

    public function editprofilesekolah($id){
        
        $data= User::find($id);
        return view('admin.profil.editprofilesekolah', compact('data'));
    }

    public function updateprofilesekolah(Request $request, $id){
        $data= User::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->update();
        }
        return redirect('/profil/profilesekolah1')->with('success','Data Berhasil Di Update');
    }

    public function profilesekolahuser($id){
        
        $data= User::find($id);
        return view('user.profil_sekolah.profilesekolah', compact('data'));
    }

}
