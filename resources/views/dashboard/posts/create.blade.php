@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Blog</h1>
  </div>
  <div class="row">
    <div class="col-lg-6">
        <form method="post" action="/dashboard/posts">
            @csrf
              <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" autofocus >
                  @error('title')
                  <div class="invalid-feedback">
                      {{ $message }}
                      @enderror
                </div>
              <div class="mb-3">
                  <label for="slug" class="form-label">Slug</label>
                  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required readonly>
                  @error('slug')
                  <div class="invalid-feedback">
                      {{ $message }}
                      @enderror
                </div>
              <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id">
                      @foreach ($categories as $category)
                      @if (old('category') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                      @else
                      <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                      @endif
                      @endforeach
                </select>
                </div>
              <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                  @error('body')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                  <trix-editor input="body"></trix-editor>
              </div>
                  <button type="submit" class="btn btn-primary">Create Blog</button>
        </form>
    </div>
  </div>
  
<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function() {
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });

  var element = document.querySelector("trix-editor")
  element.editor

  document.addEventListener("trix-file-accept", function(event) {
    event.preventDefault()
  })
</script>

@endsection