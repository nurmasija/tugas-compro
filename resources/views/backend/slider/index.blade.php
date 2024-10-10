@extends('backend.layouts.master')

@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">

<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Slider</h6>
        </div>
        <div class="card-body">
            <a href="" class="btn btn-primary mb-2">Tambah</a>
            <div class="table-responsive">

                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>File</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Membuat Blog 1</td>
                            <td><img src="images/IMG_0451.JPG" width="50%" alt=""></td>
                            <td>Contoh </td>
                            <td><a href="" class="btn btn-warning">Edit</a>
                                <form action="" method="post"></form>
                                <button class="btn btn-danger">hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection