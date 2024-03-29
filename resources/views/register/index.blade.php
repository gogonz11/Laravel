@extends('layouts.main')

@section('container')
   
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-register w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
            <form action="/register" method="POST">
              @csrf
              <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
              </div>
                @enderror
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
              </div>
                @enderror
              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required value="{{ old('password') }}">
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
              </div>
                @enderror
              <div class="checkbox mb-3">
              </div>
              <button class="w-100 btn btn-lg btn-dark mt-4" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-4">Registered? <a href="/login">Login Now</a></small>
          </main>
    </div>
</div>

@endsection