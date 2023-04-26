@extends('layouts.layout')

@section('cart')
<div class="container">
    <div class="row justify-content-center mt-5">
        <h1 class="text-success">WELCOME TO KALBE E-COMMERCE</h1>
        @foreach ($produks as $Produk)
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img src="{{ url('images/susu zee.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $Produk->ProductName }}</h5>
                    <p class="card-text">
                        <strong>Rp. {{ $Produk->Price }}</strong><br>
                        <strong>Jumlah {{ $Produk->Quantity }}</strong>
                    </p>
                    <a href="{{ url('/order') }}/{{ $Produk->ProductID }}" class="btn btn-primary">Order</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection