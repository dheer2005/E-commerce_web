@extends('master')
@section('content')
    <div class=" custom-product">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach ($products as $key => $data)
                        <li data-target="#myCarousel" data-slide-to="{{ $key }}"
                            @if ($key === 4) class="active" @endif></li>
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach ($products as $key => $data)
                        <div class="item @if ($key === 0) active @endif">
                           <a href="/detail/{{$data->id}}">
                            <img class="slider-img" src="{{ $data->gallery }}" alt="{{ $data->name }}">
                            <div class="carousel-caption" style="background-color:rgb(42, 74, 102)">
                                <h3>{{ $data->name }}</h3>
                                <p>{{ $data->description }}</p>
                            </div>
                           </a>
                        </div>
                    @endforeach
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div></div>
            <div class="trending-wrapper">
                <h1>Trending Products</h1>
                <div class="carousel-inner">
                    @foreach ($products as $key => $data)
                        <div class="trending-item">
                           <a href="/detail/{{$data->id}}">
                            <img class="trending-img" src="{{ $data->gallery }}" alt="{{ $data->name }}">
                            <div class="" >
                                <h3>{{ $data->name }}</h3>
                                <p></p>
                            </div>
                           </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
