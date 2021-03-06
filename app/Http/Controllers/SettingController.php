<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function editsetting($id){
        
        $data= Setting::find($id);
        return view('admin.settingg.editsetting', compact('data'));
    }
    
    
    public function setting(){

        $data = Setting::all();
        return view ('admin.settingg.settingpembayaran',compact('data'));
    }

    

    public function updatesetting(Request $request, $id){
        $data= Setting::find($id);
        $data->update($request->all());
        return redirect()->route('setting')->with('success','Data Berhasil Di Hapus');
    }

    public function deletesetting($id){
        $data= Setting::find($id);
        $data->delete();
        return redirect()->route('setting')->with('success','Data Berhasil Di Hapus');
    }

    public function tambahsetting(){
        return view('admin.settingg.tambahsetting');
    }

    public function insertsetting(Request $request){
        //dd($request->all())
        $data = Setting::create($request->all());
        return redirect()->route('setting');
    }
}
