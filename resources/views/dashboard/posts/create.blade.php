@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Blog</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts">
            @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="Title">
          </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
          </div>
          
            <button type="submit" class="btn btn-primary">Create Blog</button>
        </form>
    </div>
  </div>
  
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    
    title.addEventListener('change', function() {
        fetch('/dashboard/posts/createSlug')
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })
    
    // document.addEventListener('trix-file-accept', function(e) {
    //     e.preventDefault();
    // })
</script>

@endsection