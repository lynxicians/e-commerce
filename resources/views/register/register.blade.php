@extends('layouts.layout')
   
@section('login')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
        <main class="form-registration">
            <form action="/register" method="post">
                @csrf
            <h1 class="h3 mb-3 fw-normal text-center text-success">Registration</h1>
            <div class="form-floating">
                <input type="text" class="form-control border border-success @error('name')is-invalid @enderror" id="name" placeholder="name" name="name">
                <label for="floatingInput">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating pt-1">
                <input type="text" class="form-control border border-success @error('address')is-invalid @enderror" id="address" placeholder="address" name="address">
                <label for="floatingInput">Address</label>
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating pt-1">
                <input type="text" class="form-control border border-success @error('gender')is-invalid @enderror" id="gender" placeholder="gender" name="gender">
                <label for="floatingInput">Gender</label>
                @error('gender')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating pt-1">
                <input type="date" class="form-control border border-success @error('tanggallahir')is-invalid @enderror" id="Tanggal Lahir" placeholder="tanggallahir" name="tanggallahir">
                <label for="floatingInput">Tanggal Lahir</label>
                @error('tanggallahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating pt-1">
                <input type="text" class="form-control border border-success @error('username')is-invalid @enderror" id="username" placeholder="username" name="username">
                <label for="floatingInput">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating pt-1">
                <input type="email" class="form-control border border-success @error('email')is-invalid @enderror" id="email" placeholder="email@example.com" name="email">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating pt-1">
                <input type="password" class="form-control border border-success @error('password')is-invalid @enderror" id="password" placeholder="Password" name="password">
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-success mt-2" type="submit">Register</button>
            <small class="d-block text-center text-success mt-2">Already Registered? <a href="/login">Login</a></small>
            </form>
        </main>
        </div>
    </div>
</div>
@endsection
