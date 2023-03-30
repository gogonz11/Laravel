@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By : <a href="/posts?author={{ $post->author->name }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->username }}</a></p>
            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden; mt-3">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif
            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>
            <a class="text-decoration-none" href="/posts">Back to blog</a>
        </div>
    </div>
</div>

@endsection
