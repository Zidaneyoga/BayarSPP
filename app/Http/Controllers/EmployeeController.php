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
        
        return view('admin.datas.datasiswa',compact('data'));
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
        return view('admin.datas.tampildata', compact('data'));
    }

    public function profilesiswa($id){
        
        $data= Employee::find($id);
        return view('admin.datas.profilesiswa', compact('data'));
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
        return view('admin.history.historypembayaran', compact('data'));
    }

    public function profilesekolah($id){
        
        $data= Employee::find($id);
        return view('admin.profil.profilesekolah', compact('data'));
    }

    public function editprofilesekolah($id){
        
        $data= Employee::find($id);
        return view('admin.profil.editprofilesekolah', compact('data'));
    }

    public function updateprofilesekolah(Request $request, $id){
        $data= Employee::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->update();
        }
        return redirect('admin/profil/profilesekolah1')->with('success','Data Berhasil Di Update');
    }

    
    public function kelas_x(){

        $data = Employee::all();
        return view ('admin.settingg.kelas_x',compact('data'));
    }

    public function editdatakelasx($id){
        
        $data= Employee::find($id);
        return view('admin.settingg.editdatakelas_x', compact('data'));
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
        return view ('admin.settingg.kelas_xi',compact('data'));
    }

    public function editdatakelasxi($id){
        
        $data= Employee::find($id);
        return view('admin.settingg.editdatakelas_xi', compact('data'));
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
        return view ('admin.settingg.kelas_xii',compact('data'));
    }

    public function editdatakelasxii($id){
        
        $data= Employee::find($id);
        return view('admin.settingg.editdatakelas_xii', compact('data'));
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
        return view ('user.profil.profilesiswa',compact('data'));
    }

    public function editprofilesiswa($id){
        
        $data= Employee::find($id);
        return view('user.profil.editprofilesiswa', compact('data'));
    }

    public function updateprofilesiswa(Request $request, $id){
        $data= Employee::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->update();
        }
        return redirect('user/profil/profilesiswa1')->with('success','Data Berhasil Di Update');
    }
    
    public function dashboard($id){
        
        $data= Employee::find($id);
        return view('user.dashboard', compact('data'));
    }

    public function profilesekolahuser($id){
        
        $data= Employee::find($id);
        return view('user.profil_sekolah.profilesekolah', compact('data'));
    }

    public function tagihanpembayaran($id){
        
        $data= Employee::find($id);
        return view('user.bayar.tagihanpembayaran', compact('data'));
    }

    public function laporanpembayaran($id){
        
        $data= Employee::find($id);
        return view('user.laporan.laporanpembayaran', compact('data'));
    }


    public function bayarspp($id){
        
        $data= Employee::find($id);
        return view('user.bayar.bayarspp', compact('data'));
    }

    public function konfirmasi($id){
        
        $data= Employee::find($id);
        return view('user.bayar.konfirmasi', compact('data'));
    }
}


