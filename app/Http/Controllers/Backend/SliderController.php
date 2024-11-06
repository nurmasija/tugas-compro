<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sliders;
use Illuminate\Http\Request;
// memanggil code untuk menampilkan strip
use Illuminate\Support\Str;

class SliderController extends Controller
{
    public function index(){
        //$slider mengambil data dari model slider untuk mengambil data dari table slider
        $slider=Sliders::get();
        return view('backend.slider.index',['slider'=>$slider]);
    }
    public function tambah(){
        //function tambah untuk menampilkan tambah slider
        return view('backend.slider.tambah');
    }
    public function aksi_tambah(Request $request){
        
        //memvalidasi data jadi datanya harus diisi
        $request->validate([
            'tittle' =>'required','description'=>'required','file'=>'required|file|mimes:jpeg,png|max:2048'
        ]);
        //variable" untuk menambahkan data dan validasinya
        $data = [
            'tittle' => $request->tittle,
            'description' => $request->description
        ];

        if ($request->hasFile('file')){
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('sliders'), $filename);

            $data['file'] = 'sliders/' . $filename;
        }
        //menambahkan data
        Blogs::insert($data);
        return redirect()->route('backend.slider')->with('success', 'slider Berhasil ditambahkan');
    }
    public function aksi_hapus($id){
        $ambilDataSlider=Sliders::where('id',$id)->first();
        Sliders::where('id',$id)->delete();
        $this->hapus_gambar($ambilDataSlider->file);
        return redirect()->back();
    }
    protected function hapus_gambar($gambar){
        if (file_exists($gambar)){
            unlink($gambar);  
        }
    }
    public function edit($id){
        $slider=Sliders::where('id',$id)->first();
        return view('backend.slider.edit',['slider'=>$slider]);
    }

    public function aksi_edit(Request $request,$id){
        $request->validate([
            'tittle'=>'required|string',
            'description'=> 'required|string',
            'file'=>'required|file|mimes:jpg,png|max:2048'
        ]);
        $data = [
            'tittle' => $request->tittle,
            'description' => $request->description,
            'slug' => Str::slug($request->tittle),
        ];
        if ($request->hasFile('file')){
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('sliders'), $filename);

            $data['file'] = 'sliders/' . $filename;
            $ambilDataSlider=Sliders::where('id',$id)->first();
            $this->hapus_gambar($ambilDataSlider->file);
        }
        Sliders::where('id',$id)->update($data);
        return redirect()->route('backend.slider');
    }
}
