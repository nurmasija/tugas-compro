@extends('layouts.master')
@section('content')
    <!-- content -->
    <div class="container mt-4 mb-4">
        <div class="row">
            @foreach ($detail as $item)
            <div class="col-8 ">
                <img src="{{ asset($item->file) }}" alt="" class="images border-radius w-100">
                <h5 class="mt-2 mb-1"><strong>{{ $item->tittle }}</strong></h5>
                <p class="mb-1"><strong>24 September 2024</strong></p>
                <p>{{ $item->description }}</p>
            </div>
            @endforeach
            <div class="col-4 ">
            <h3 class="p-2"><strong>blog terbaru</strong></h3>
            @foreach ($detail_terbaru as $item)
                    <div class="row p-2 ">
                        <div class="col-3 ">
                                <img src="{{asset('img/IMG_6997.JPG')}}" class="border-radius w-100 h-100" alt="..." >
                        </div>
                        <div class="col-9 ">
                            <div class="card-body">
                                <h5 class="card-title">Kelas 12 Sija</h5>
                                <h6 class="mb-0">10 september 2024</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            </div>
            </div>
@endsection