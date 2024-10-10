@extends('backend.layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2>Tambah Service</h2>
            <form class="user" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="tittle" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Masukan Judul" >

                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control editor" placeholder="masukan deskripsi" id="" cols="30" rows="3" ></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-user">Tambah</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection