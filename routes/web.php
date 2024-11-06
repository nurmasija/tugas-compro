<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Backend\BlogController as BackendBlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\LoginController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/sliders',[HomeController::class,'index'])->name('sliders');
Route::get('/services',[HomeController::class,'index'])->name('services');

Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/blog/detail',
[BlogController::class,'detail'])
->name('blog_detail');



// backend
Route::get('backend/login',[LoginController::class,'index'])->name('backend.login');
Route::get('backend/blog',[BackendBlogController::class,'index'])->name('backend.blog');
Route::get('backend/blog/tambah',[BackendBlogController::class,'tambah'])->name('backend.blog.tambah');
Route::post('backend/blog/aksi_tambah',[BackendBlogController::class,'aksi_tambah'])->name('backend.blog.aksi_tambah');
Route::post('backend/blog/aksi_hapus/{id}',[BackendBlogController::class,'aksi_hapus'])->name('backend.blog.aksi_hapus');
Route::get('backend/blog/edit/{id}',[BackendBlogController::class,'edit'])->name('backend.blog.edit');
Route::post('backend/blog/aksi_edit/{id}',[BackendBlogController::class,'aksi_edit'])->name('backend.blog.aksi_edit');
Route::get('backend/slider',[SliderController::class,'index'])->name('backend.slider');
Route::get('backend/slider/tambah',[SliderController::class,'tambah'])->name('backend.slider.tambah');
Route::post('backend/slider/aksi_tambah',[SliderController::class,'aksi_tambah'])->name('backend.slider.aksi_tambah');
Route::post('backend/slider/aksi_hapus/{id}',[SliderController::class,'aksi_hapus'])->name('backend.slider.aksi_hapus');
Route::get('backend/slider/edit/{id}',[SliderController::class,'edit'])->name('backend.slider.edit');
Route::post('backend/slider/aksi_edit/{id}',[SliderController::class,'aksi_edit'])->name('backend.slider.aksi_edit');
Route::get('backend/service',[ServiceController::class,'index'])->name('backend.service');
Route::get('backend/service/tambah',[ServiceController::class,'tambah'])->name('backend.service.tambah');