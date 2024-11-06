<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        //$service mengambil data dari model service untuk mengambil data dari table service
        $service = Services::get();
        return view('backend.service.index',['service'=>$service]);
    }
    //function tambah untuk menampilkan tambah service
    public function tambah(){
        return view('backend.service.tambah');
    }
    public function aksi_tambah(Request $request){
        
        //memvalidasi data jadi datanya harus diisi
        $request->validate([
            'tittle' =>'required','description'=>'required'
        ]);
        //variable" untuk menambahkan data dan validasinya
        $data = [
            'tittle' => $request->tittle,
            'description' => $request->description,
            'file' =>'',
            //datanya dari tahun bulan trus hari
            'created_at' => date('Y-m-d h:i:s')
        ];
        //menambahkan data
        Services::insert($data);
        return redirect()->route('backend.service')->with('success', 'Layanan Berhasil ditambahkan');
    }
    public function aksi_hapus($id){
        $ambilDataService=Services::where('id',$id)->first();
        Services::where('id',$id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $service=Services::where('id',$id)->first();
        return view('backend.service.edit',['service'=>$service]);
    }

    public function aksi_edit(Request $request,$id){
        $request->validate([
            'tittle'=>'required|string',
            'description'=> 'required|string'
        ]);
        $data = [
            'tittle' => $request->tittle,
            'description' => $request->description
        ];
        Services::where('id',$id)->update($data);
        return redirect()->route('backend.service');
    }
}
