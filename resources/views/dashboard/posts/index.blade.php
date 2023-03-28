@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Blog</h1>
  </div>

  <div class="table-responsive col-lg-10">
    <a href="/dashboard/posts/create" class="btn btn-primary"><span data-feather="plus-circle"></span>   Create</a>
    <table class="table table-striped table-sm mt-3">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-sm btn-info"><span data-feather="eye"></span></a>
            <a href="" class="btn btn-sm btn-warning"><span data-feather="edit"></span></a>
            <form action="" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection