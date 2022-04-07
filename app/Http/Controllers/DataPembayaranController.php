<?php

namespace App\Http\Controllers;

use App\Models\DataPembayaran;
use Illuminate\Http\Request;

class DataPembayaranController extends Controller
{
    public function editdatapembayaran($id){
        
        $data= DataPembayaran::find($id);
        return view('admin.editdatapembayaran', compact('data'));
    }

    public function datapembayaran(){

        $data = DataPembayaran::all();
        return view ('admin.datapembayaran',compact('data'));
    }

    public function updatedatapembayaran(Request $request, $id){
        $data= DataPembayaran::find($id);
        $data->update($request->all());
        return redirect()->route('datapembayaran')->with('success','Data Berhasil Di Hapus');
    }

    public function deletedata($id){
        $data= DataPembayaran::find($id);
        $data->delete();
        return redirect()->route('datapembayaran')->with('success','Data Berhasil Di Hapus');
    }
}
