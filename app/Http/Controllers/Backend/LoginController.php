<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        //menampilkan halaman login
        return view('backend.login.index');
    }
}
