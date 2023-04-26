@extends('layouts.layout')

@section('order')
    <div class="container">
      {{-- <input type="hidden" class="produkID" id="produkID" value="{{ $produk->ProductID }}">
      <input type="hidden" id="userID" value="{{ auth()->user()->id }}"> --}}

            <div class="col-md-12 my-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('cart') }}">E-commerce</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $produk->ProductName }}</li>
                    </ol>
                </nav>
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-2">
                    <div class="row">
                      <div class="col-md-4">
                        <img src="{{ url('images/susu zee.jpg') }}" class=" rounded card-img-top" alt="zee" width="200">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <h2 class="card-title">{{ $produk->ProductName }}</h2>
                          <table class="table table-borderless">
                            <tbody>
                              <tr>
                                <th scope="row">Price</th>
                                <td>:</td>
                                <td>Rp. {{ $produk->Price }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Quantity</th>
                                <td>:</td>
                                <td>{{ $produk->Quantity }}</td>
                              </tr>
                                <tr>
                                  <th scope="row">Order Quantity</th>
                                  <td>:</td>
                                  <td>
                                      <input type="text" name="order_quantity" id="quantity_order" class="form-control" required>
                                      <button type="button" id="buttonSubmit" class="btn btn-success mt-3">Order Now</button>
                                  </td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <a href="{{ url('cart') }}" class="btn btn-success">Kembali</a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
  const buttonSubmit= document.querySelector("#buttonSubmit");

  buttonSubmit.addEventListener("click", function(){
  // const produkID = document.querySelector("#produkID").value;
  // const userID = document.querySelector("#userID").value;
  const quantity_order = document.querySelector("#quantity_order").value;

    fetch('/order/' + {{ $produk->ProductID }}, {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify({
          // users_id: userID,
          quantity: quantity_order
      })
  })
    .then(response => response.json())
    .then(data => {
      window.location.href = "{{ route('cart') }}";
    })
    .catch(error => {
        // Handle network or server error
    });
  })
</script>
@endsection