@extends('layouts.app')



@section('content')


<div class="card">
    <div class="card-body mx-4">
      <div class="container">
        <p class="my-5 mx-5" style="font-size: 30px;">Thank for your purchase</p>
        <div class="row">
          <ul class="list-unstyled">
            <li class="text-black">{{ $invoice['fullname']}}</li>
            <li class="text-muted mt-1"><span class="text-black">Invoice</span> #12345</li>
            <li class="text-black mt-1">{{ date('Y-m-d') }}</li>
          </ul>
          <hr>
          <div class="col-xl-10">
            <p>{{ $invoice['product_name'] }}</p>
          </div>
          <div class="col-xl-2">
            <p class="float-end">{{ $invoice['price'] }} SAR
            </p>
          </div>
          <hr>
        </div>
        <div class="row">
          <div class="col-xl-10">
            <p>VAT</p>
          </div>
          <div class="col-xl-2">
            <p class="float-end">{{ $invoice['vat'] }} SAR
            </p>
          </div>
          <hr>
        </div>
        <div class="row text-black">
  
          <div class="col-xl-12">
            <p class="float-end fw-bold">Total: {{ $invoice['total'] }} SAR
            </p>
          </div>
        </div>
  
      </div>
    </div>
  </div>

@endsection



