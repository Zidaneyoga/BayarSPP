<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Employee::where('nama','LIKE','%' .$request->search. '%')->paginate(3);
        }else{
            $data = Employee::paginate(3);
        }
        
        return view('admin.datasiswa',compact('data'));
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        $data = Employee::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('siswa')->with('success','Data Berhasil Di Tambahkan');
        
    }

    public function tampildata($id){
        
        $data= Employee::find($id);
        return view('admin.tampildata', compact('data'));
    }

    public function profilesiswa($id){
        
        $data= Employee::find($id);
        return view('admin.profilesiswa', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data= Employee::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->update();
        }
        return redirect()->route('datasiswa')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){
        $data= Employee::find($id);
        $data->delete();
        return redirect()->route('datasiswa')->with('success','Data Berhasil Di Hapus');
    }

    public function historypembayaran($id){
        
        $data= Employee::find($id);
        return view('admin.historypembayaran', compact('data'));
    }

    public function profilesekolah($id){
        
        $data= Employee::find($id);
        return view('admin.profilesekolah', compact('data'));
    }

    public function editprofilesekolah($id){
        
        $data= Employee::find($id);
        return view('admin.editprofilesekolah', compact('data'));
    }

    public function updateprofilesekolah(Request $request, $id){
        $data= Employee::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->update();
        }
        return redirect('admin/profilesekolah1')->with('success','Data Berhasil Di Update');
    }

    
    public function kelas_x(){

        $data = Employee::all();
        return view ('admin.kelas_x',compact('data'));
    }

    public function editdatakelasx($id){
        
        $data= Employee::find($id);
        return view('admin.editdatakelas_x', compact('data'));
    }

    public function updatekelas_x(Request $request, $id){
        $data= Employee::find($id);
        $data->update($request->all());
        return redirect()->route('kelas_x')->with('success','Data Berhasil Di Hapus');
    }

    public function deletedatakelas_x($id){
        $data= Employee::find($id);
        $data->delete();
        return redirect()->route('kelas_x')->with('success','Data Berhasil Di Hapus');
    }

    public function kelas_xi(){

        $data = Employee::all();
        return view ('admin.kelas_xi',compact('data'));
    }

    public function editdatakelasxi($id){
        
        $data= Employee::find($id);
        return view('admin.editdatakelas_XI', compact('data'));
    }

    public function updatekelas_xi(Request $request, $id){
        $data= Employee::find($id);
        $data->update($request->all());
        return redirect()->route('kelas_xi')->with('success','Data Berhasil Di Hapus');
    }

    public function deletedatakelas_xi($id){
        $data= Employee::find($id);
        $data->delete();
        return redirect()->route('kelas_xi')->with('success','Data Berhasil Di Hapus');
    }

    public function kelas_xii(){

        $data = Employee::all();
        return view ('admin.kelas_xii',compact('data'));
    }

    public function editdatakelasxii($id){
        
        $data= Employee::find($id);
        return view('admin.editdatakelas_Xll', compact('data'));
    }

    public function updatekelas_xii(Request $request, $id){
        $data= Employee::find($id);
        $data->update($request->all());
        return redirect()->route('kelas_xii')->with('success','Data Berhasil Di Hapus');
    }

    public function deletedatakelas_xii($id){
        $data= Employee::find($id);
        $data->delete();
        return redirect()->route('kelas_xii')->with('success','Data Berhasil Di Hapus');
    }

    public function profileuser($id){

        $data= Employee::find($id);
        return view ('user.profilesiswa',compact('data'));
    }

    public function editprofilesiswa($id){
        
        $data= Employee::find($id);
        return view('user.editprofilesiswa', compact('data'));
    }

    public function updateprofilesiswa(Request $request, $id){
        $data= Employee::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->update();
        }
        return redirect('user/profilesiswa1')->with('success','Data Berhasil Di Update');
    }
    
    public function bayarspp($id){
        
        $data= Employee::find($id);
        return view('user.bayarspp', compact('data'));
    }

    public function dashboard($id){
        
        $data= Employee::find($id);
        return view('user.dashboard', compact('data'));
    }

    public function profilesekolahuser($id){
        
        $data= Employee::find($id);
        return view('user.profilesekolah', compact('data'));
    }

    public function tagihanpembayaran($id){
        
        $data= Employee::find($id);
        return view('user.tagihanpembayaran', compact('data'));
    }

    public function laporanpembayaran($id){
        
        $data= Employee::find($id);
        return view('user.laporanpembayaran', compact('data'));
    }
}


