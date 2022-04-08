<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;


class DataController extends Controller
{
    public function datasiswa(){

        $data = data::all();
        return view('admin.datas.datasiswa',compact('data'));
    }

    public function tampildatasiswa($id){

        $data = data::find($id);
        return view('admin.datas.editsiswa',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data= data::find($id);
        $data->update($request->all());
        
        return redirect()->route('datasiswa')->with('success','Data Berhasil Di Update');
    }
}
