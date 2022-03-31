<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;


class DataController extends Controller
{
    public function datasiswa(){

        $data = data::all();
        return view('Admin.datasiswa.datasiswa',compact('data'));
    }

    public function tampildatasiswa($id){

        $data = data::find($id);
        return view('Admin.datasiswa.editsiswa',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data= data::find($id);
        $data->update($request->all());
        
        return redirect()->route('datasiswa')->with('success','Data Berhasil Di Update');
    }
}
