@extends('layouts.layout')
   
@section('login')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session()->has('LoginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('LoginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <main class="form-signin">
        <form action="/login" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center text-success">Login</h1>
        <div class="form-floating">
            <input type="email" name="email" class="form-control border border-success @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus>
            <label for="floatingInput">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror           
        </div>
        <div class="form-floating pt-1">
            <input type="password" class="form-control border border-success" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
        <small class="d-block text-center text-success mt-2">Not Registered? <a href="/register">Register</a></small>
        </form>
        </main>
        </div>
    </div>
</div>
@endsection
