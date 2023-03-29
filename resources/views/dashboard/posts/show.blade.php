@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="my-3">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success mb-3"><span data-feather="arrow-left"></span>  Back</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3"><span data-feather="edit"></span></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger mb-3" onclick="return confirm('Apakah anda yakin ?')"><span data-feather="x-circle"></span></button>
              </form>
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