@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="d-flex justify-content-center">
        <div class="col-md-6">
            <div class="search">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <input type="text" class="search-input" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="search-icon border-0" type="submit"><span data-feather="search"></span></button>
                    {{-- <button class="" type="submit">Search</button> --}}
                </form>
            </div>
        </div>
    </div>


    @if ($posts->count())
        <section class="pt-4 pb-0">
            <div class="container">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-4">
                            <div class="blog-card">
                                <a href="/posts?category={{ $post->category->slug }}"><span
                                        class="bg-orange position-absolute mt-2 ms-2">{{ $post->category->name }}</span></a>
                                <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}" class="blog-thumbnail">
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
    <div class="d-flex justify-content-end">
        {{ $posts->links('pagination::simple-default') }}
    </div>
@endsection
