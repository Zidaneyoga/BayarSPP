<?php

namespace App\Http\Controllers;

use App\Models\Bayar;
use Illuminate\Http\Request;

class BayarController extends Controller
{

    public function tagihanpembayaran(){

        $data = Bayar::all();
        return view ('user.bayar.tagihanpembayaran',compact('data'));
    }
    public function bayarspp(){

        $data = Bayar::all();
        return view ('user.bayar.bayarspp',compact('data'));
    }
    
    public function insertbayar(Request $request){
        //dd($request->all());
        $data = Bayar::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('konfirmasi')->with('success','Data Berhasil Di Tambahkan');
        
    }

    

    public function editbayarspp($id){
        
        $data= Bayar::find($id);
        return view('user.bayar.editbayarspp', compact('data'));
    }

    public function detailbayarspp($id){
        
        $data= Bayar::find($id);
        return view('user.bayar.detailbayarspp', compact('data'));
    }


    public function updatebayarspp(Request $request, $id){
        $data= Bayar::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->update();
        }
        return redirect()->route('tagihanpembayaran')->with('success','Data Berhasil Di Update');
    }

    public function deletebayarspp($id){
        $data= Bayar::find($id);
        $data->delete();
        return redirect()->route('tagihanpembayaran')->with('success','Data Berhasil Di Hapus');
    }

    public function konfirmasi(){
        
      
        return view('user.bayar.konfirmasi');
    }

    public function invoice(){
        
      
        return view('user.bayar.invoice');
    }

}
