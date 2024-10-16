<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
//memanggil model blog
use App\Models\Blogs;
use Illuminate\Http\Request;
// memanggil code untuk menampilkan strip
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(){
        //$blog mengambil data dari model blog untuk mengambil data dari table blog
        $blog=Blogs::get();
        //nampilin halaman ke backend blog dan mereturn nilai blog
        return view('backend.blog.index',['blog'=>$blog]);
    }
    //function tambah untuk menampilkan blog tambah
    public function tambah(){
        return view('backend.blog.tambah');
    }
    public function aksi_tambah(Request $request){
        
        //memvalidasi data jadi datanya harus diisi
        $request->validate([
            'tittle' =>'required','description'=>'required','file'=>'required|file|mimes:jpeg,png|max:2048'
        ]);
        //variable" untuk menambahkan data dan validasinya
        $data = [
            'tittle' => $request->tittle,
            'description' => $request->description,
            'slug' => Str::slug($request->tittle),
            'created_by' => 0,
            //datanya dari tahun bulan trus hari
            'created_at' => date('Y-m-d h:i:s')
        ];

        if ($request->hasFile('file')){
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('blogs'), $filename);

            $data['file'] = 'blogs/' . $filename;
        }
        //menambahkan data
        Blogs::insert($data);
        //mendirect ke halaman blog lagi dgn pesan
        return redirect()->route('backend.blog')->with('success', 'Blog Berhasil ditambahkan');
    }
}
