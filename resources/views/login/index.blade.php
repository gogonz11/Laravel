@extends('layouts.main')

@section('container')
   
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('loginError'))
    <div class="alert alert-danger">
        {{ session('loginError') }}
    </div>
@endif

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="POST">
              @csrf
              <div class="form-floating">
                <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" name="username"  placeholder="username" autofocus required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="checkbox mb-3">
              </div>
              <button class="w-100 btn btn-lg btn-dark mt-4" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-4">Not registered? <a href="/register">Register Now!</a></small>
          </main>
    </div>
</div>


@endsection