@extends('layouts.main')

@section('container')

<main class="form-signin text-center">
    <form action="/register" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Please Register</h1>
  
      <div class="form-floating">
        <input required value="{{ old('name') }}" type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror " id="name" placeholder="Name">
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input required value="{{ old('username') }}" type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="username" placeholder="Username">
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input required value="{{ old('email') }}" type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating  mb-3">
        <input required type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password">
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <button class="w-100 btn btn-lg btn-primary  mb-3" type="submit">Register</button>
    </form>
<small class="d-block">Already registered?
  <a href="/login">Login</a>
</small>


  </main>

@endsection
