@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="my-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>  Back</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span></a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span></a>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>


            <a class="text-decoration-none" href="/posts">Back to blog</a>
        </div>
    </div>
</div>
@endsection