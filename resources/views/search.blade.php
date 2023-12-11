@extends('master')
@section('content')
    <div class=" custom-product">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-5">
       <div class="seacrch-wrapper">
                <h4>Result for Products</h4>
                <div class="carousel-inner">
                    @foreach ($products as $key => $data)
                        <div class="searched-item">
                           <a href="/detail/{{$data->id}}">
                            <img class="trending-img" src="{{ $data->gallery }}" alt="{{ $data->name }}">
                            <div class="" >
                                <h3>{{ $data->name }}</h3>
                                <h4>{{$data->description}}</h4>
                            
                            </div>
                           </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
@endsection
