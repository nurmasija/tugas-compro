<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sliders;
use Illuminate\Http\Request;

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
}
