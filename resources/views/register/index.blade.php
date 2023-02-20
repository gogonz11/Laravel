@extends('layouts.main')

@section('container')
   

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-register w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
            <form>
              <div class="form-floating">
                <input type="text" class="form-control rounded-top" id="name" name="name" placeholder="Name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="email" name="enail" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <div class="checkbox mb-3">
              </div>
              <button class="w-100 btn btn-lg btn-dark mt-4" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-4">Registered? <a href="/login">Login Now</a></small>
          </main>
    </div>
</div>


@endsection