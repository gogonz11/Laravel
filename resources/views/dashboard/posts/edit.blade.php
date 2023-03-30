@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Blog</h1>
  </div>
  <div class="row">
    <div class="col-lg-6">
        <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data" >
          @method('put')
            @csrf
              <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}" autofocus >
                  @error('title')
                  <div class="invalid-feedback">
                      {{ $message }}
                      @enderror
                </div>
              <div class="mb-3">
                  <label for="slug" class="form-label">Slug</label>
                  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" required >
                  @error('slug')
                  <div class="invalid-feedback">
                      {{ $message }}
                      @enderror
                </div>
              <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id">
                      @foreach ($categories as $category)
                      @if (old('category', $post->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                      @else
                      <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                      @endif
                      @endforeach
                </select>
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label">Blog image</label>
                  <input type="hidden" name="oldImage" value="{{ $post->image }}">
                  @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid mb-1 col-sm-5 d-block">
                  @else
                    <img class="img-fluid mb-3 col-sm-5">
                  @endif
                  <img class="img-preview img-fluid mb-3 col-sm-5" src="" alt="">
                  <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                  @error('image')
                  <div class="invalid-feedback">
                      {{ $message }}
                  @enderror
                </div>
              <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                  @error('body')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                  <trix-editor input="body"></trix-editor>
              </div>
                  <button type="submit" class="btn btn-primary">Update</button>
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

      function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        };
      }
</script>

@endsection