<!-- mengambil data dari layout master -->
@extends('backend.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog</h6>
        </div>
        <div class="card-body">
            <!-- mendirect ke route blog tambah -->
            <a href="{{route('backend.blog.tambah')}}" class="btn btn-primary mb-2">Tambah</a>
            <!-- memanggil alert dri success dengan text color berwarna merah -->
            @if(Session::has('success'))
            <span style="color: red;">
                {{ Session::get('success') }}
            </span>
            @endif
            <div class="table-responsive">

                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>File</th>
                            <th>Description</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- untuk membuat id -->
                    @php 
                            $no=1;
                        @endphp
                        <!-- untuk memanggil $blog sebagai $item -->
                        @foreach ($blog as $item)
                        <tr>
                            <!-- idnya memakai perulangan -->
                            <td>{{$no++}}</td>
                            <!-- $item sbgi $blog lalu mengambil nilai dari kolom tittle dri tabel blog -->
                            <td>{{$item->tittle}}</td>
                            <!-- mengambil data file dri tabel blog -->
                            <td><img src="{{asset($item->file)}}" width="50%" alt=""></td>
                            <!-- memakai tanda seru agar tidak terlihat tag htmlnya -->
                            <td>{!!$item->description!!}</td>
                            <td><a href="" class="btn btn-warning">Edit</a>
                                <form action="" method="post"></form>
                                <button class="btn btn-danger">hapus</button>
                        
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection