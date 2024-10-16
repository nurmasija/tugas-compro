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
}
