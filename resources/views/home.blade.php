@extends('layouts.main')

@section('container')
    <section class="pt-0 pb-5">
        <div class="container" style="background-color: #fff">
            <div class="row">
                <div class="col-lg-5 py-5 mt-4">
                    <div class="row">
                        <div class="col-12 col-lg-10 offset-lg-1 text-black">
                            <h1 class="display-4">Content is<br />anything that<br />adds value to a reader's life</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img src="img/blog.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php $totalCategory = count($categories) - 4; ?>
    <?php $jumlahSlide = 0; ?>
    {{-- {{ $totalCategory }} --}}
    @while ($totalCategory > 0)
        <?php $totalCategory = $totalCategory - 4; ?>
        {{-- {{ $totalCategory }} --}}
        <?php $jumlahSlide = $jumlahSlide + 1; ?>
        {{-- {{ $jumlahSlide }} --}}
    @endwhile

    <section class="pt-5">
        <div class="container pt-3" style="background-color: #fff">
            <div class="row px-2 mb-2">
                <div style="height: 30px" class="carousel slide  col">
                    <button class="carousel-control-prev btn btn-primary p-3" type="button"
                        data-bs-target="#carouselExample" data-bs-slide="prev" style="width: 50px;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                </div>
                <h2 class="col-md-auto">Categories</h2>

                <div style="height: 30px" class="carousel slide col">
                    <button class="carousel-control-next btn btn-primary p-3" type="button"
                        data-bs-target="#carouselExample" data-bs-slide="next" style="width: 50px;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            @for ($j = 0; $j < count($categories); $j++)
                                @if ($j < 4)
                                    <div class="col-md-3 mb-3">
                                        @if ($categories[$j]->image)
                                            <div class="card border-0"
                                                style="background-image: url('storage/{{ $categories[$j]->image }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            height:200px;">
                                            @else
                                                <div class="card border-0"
                                                    style="background-image: url('https://source.unsplash.com/500x300?{{ $categories[$j]->name }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            height:200px;">
                                        @endif
                                        <a href="/posts?category={{ $categories[$j]->slug }}"><span
                                                class="bg-orange position-absolute mt-2 ms-2"
                                                style="padding: 2px 12px;
                                                border-radius: 100px;">{{ $categories[$j]->name }}</span></a>
                                    </div>

                        </div>
                        @endif
                        @endfor
                    </div>
                </div>

                @for ($i = 0; $i < $jumlahSlide; $i++)
                    <?php $itemSlide = 1; ?>
                    @if ($i == 0)
                        <?php $skip = 4; ?>
                    @else
                        <?php $skip = $skip + 4; ?>
                    @endif

                    <div class="carousel-item">
                        <div class="row">
                            @foreach ($categories->skip($skip) as $category)
                                @if ($itemSlide <= 4)
                                    <div class="col-md-3 mb-3">
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
                                        <a href="/posts?category={{ $category->slug }}"><span
                                                class="bg-orange position-absolute mt-2 ms-2"
                                                style="padding: 2px 12px;
                                                    border-radius: 100px;">{{ $category->name }}</span></a>
                                    </div>

                        </div>


                        <?php $itemSlide = $itemSlide + 1; ?>
                @endif
                @endforeach
            </div>
        </div>
        @endfor
        </div>

        </div>
        </div>
    </section>
    <section class="pt-0">
        <h1 class="mb-3 text-center">All Posts</h1>
        @if ($posts->count())
            <section class="pt-4 pb-0">
                <div class="container">
                    <div class="row">
                        @foreach ($posts->take(9) as $post)
                            <div class="col-md-4">
                                <div class="blog-card">
                                    <a href="/posts?category={{ $post->category->slug }}"><span
                                            class="bg-orange position-absolute mt-2 ms-2">{{ $post->category->name }}</span></a>
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . "$post->image") }}"
                                            alt="{{ $post->category->name }}" class="blog-thumbnail">
                                    @else
                                        <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}"
                                            alt="{{ $post->category->name }}" class="blog-thumbnail">
                                    @endif

                                    <div class="blog-container">
                                        <h4 class="m-0"><b>{{ $post->title }}</b></h4>
                                        <p class="mb-2">
                                            <small>
                                                By <a href="/posts?author={{ $post->author->username }}"
                                                    class="text-decoration-none">{{ $post->author->name }}</a> in <a
                                                    href="/posts?category={{ $post->category->slug }}"
                                                    class="text-decoration-none">{{ $post->category->name }}</a>
                                                {{ $post->created_at->diffForHumans() }}
                                            </small>
                                        </p>
                                        <p class="text-muted "
                                            style="display: -webkit-box;
                                    -webkit-line-clamp: 5;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;">
                                            {{ $post->body }}</p>
                                        <div class="col d-flex justify-content-center">
                                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @else
            <p class="text-center fs-4">No post found.</p>
        @endif
    </section>
@endsection
