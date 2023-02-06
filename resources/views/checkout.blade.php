@extends('layouts.app')



@section('content')

<div class="container">
@if(Session::has('message'))
    <div class="col-xl-9 d-flex justify-content-center">
        <div class="alert alert-danger">{{ Session::get('message') }}</div>
    </div>
@endif
  <div class="row  d-flex justify-content-center">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{$product->name}}</h6>
            <small class="text-muted">{{$product->description}}</small>
          </div>
          <span class="text-muted">{{ $price = $product->price}} SAR</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">VAT</h6>
          </div>
          <span class="text-muted">{{$vat = $product->price * 0.15}} SAR</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (SAR)</span>
          <strong>{{$total =  $price + $vat }} </strong>
        </li>
      </ul>

      <!-- <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form> -->
    </div>
    <div class="col-md-4 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" method="POST" action="{{route('invoice')}}" novalidate="">
        @csrf
          <div class="mb-3">
            <label for="firstName">Full name</label>
            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" value="" required="">
            <div class="invalid-feedback">
              Valid Full name is required.
            </div>
          </div>

        <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
            </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <input type="text" class="form-control d-none" name="product_id" id="product_id" value="{{$product->id}}">
          <input type="text" class="form-control d-none" name="product_name" id="product_name" value="{{$product->name}}">
          <input type="text" class="form-control d-none" name="product_description" id="product_description" value="{{$product->description}}">
          <input type="text" class="form-control d-none" name="price" id="price" value="{{$price}}">
          <input type="text" class="form-control d-none" name="vat" id="vat" value="{{$vat}}">
          <input type="text" class="form-control d-none" name="total" id="total" value="{{$total}}">
        </div>

        <div class="text-center">
            <button class="btn btn-success btn-lg btn-block" type="submit">Purchase Now</button>
        </div>
    </div>

      </form>
    </div>
  </div>

</div>


@endsection



