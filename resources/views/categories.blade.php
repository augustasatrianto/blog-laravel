@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center">Post Categories</h1>

    <div class="container mb-5">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-3 mb-4"><a href="/posts?category={{ $category->slug }}">
                        @if ($category->image)
                            <div class="card border-0"
                                style="background-image: url('storage/{{ $category->image }}');
background-position: center;
background-repeat: no-repeat;
background-size: cover;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
height:200px;">
                            @else
                                <div class="card border-0"
                                    style="background-image: url('https://source.unsplash.com/500x300?{{ $category->name }}');
background-position: center;
background-repeat: no-repeat;
background-size: cover;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
height:200px;">
                        @endif


                        <a href="/posts?category={{ $category->slug }}"><span class="bg-orange position-absolute mt-2 ms-2"
                                style="padding: 2px 12px;
                                border-radius: 100px;">{{ $category->name }}</span></a>
                </div>

                </a>
        </div>
        @endforeach
    </div>
    </div>
@endsection
