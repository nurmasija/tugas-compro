@extends('layouts.master')
@section('content')
<!-- artikel -->
<div class="container mt-4">
        <div class="row">
            <!-- Kolom 1 dengan col-8 dan border -->
            <div class="col-lg-8 p-2">
            @foreach ($blog as $item)
                <div class="row my-2">
                
                <div class="col-5 ">
                    <img src="{{ $item->file }}" class="card-img-top border-radius" alt="...">
                </div>
                <div class="col-7 ">
                    <div class="card-body">
                        <h3 class="card-title">{{ $item->tittle }}</h3>
                        <h6 class="mb-0">10 september 2024</h6>
                        <a href="{{route('blog_detail')}}" class="text-black"><b>Read More</b></a>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
            <!-- Kolom 2 dengan col-4 dan border -->
            <div class="col-lg-4 p-4 ">
                <h3><b>Blog Terbaru</b></h3>
                @foreach ($blog_terbaru as $item)
                <div class="row p-2">
                
                    <div class="col-3">
                            <img src="{{ $item->file }}" class="border-radius w-100 h-100" alt="..." >
                    </div>
                    <div class="col-9 ">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->tittle }}</h5>
                            <h6 class="mb-0">10 september 2024</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <h3><b>Blog Lainnya</b></h3>
        <div class="row my-2">
            @foreach ($blog_lainnya as $item)
            <div class="col-6 ">
                <div class="row my-2">
                    <div class="col-5 ">
                        <img src="{{ $item->file }}" class="card-img-top border-radius " alt="...">
                    </div>
                    <div class="col-7 ">
                        <div class="card-body">
                            <h3 class="card-title">{{$item->tittle}}</h3>
                            <h6 class="mb-0">10 september 2024</h6>
                            <a href="{{route('blog_detail')}}   " class="text-black"><b>Read More</b></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection