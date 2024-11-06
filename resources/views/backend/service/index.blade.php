@extends('backend.layouts.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Service</h6>
        </div>
        <div class="card-body">
            <a href="{{route('backend.service.tambah')}}" class="btn btn-primary mb-2">Tambah</a>
            <div class="table-responsive">

                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>deskripsi</th>
                            <th>Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $no=1;
                        @endphp
                        @foreach ($service as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->tittle}}</td>
                            <td>{!!$item->description!!}</td>
                            <td><a href="{{route('backend.service.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{route('backend.service.aksi_hapus',$item->id)}}" method="post">
                                @csrf 
                                <button class="btn btn-danger">hapus</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection