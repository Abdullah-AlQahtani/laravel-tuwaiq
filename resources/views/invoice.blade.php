@extends('layouts.app')



@section('content')


<div class="card">
    <div class="card-body">
      <div class="container mb-5 mt-3">
        <div class="row d-flex align-items-baseline">
        @if(Session::has('message'))
            <div class="col-xl-9 d-flex justify-content-center">
                <div class="alert alert-success">{{ Session::get('message') }}</div>
              </div>
        @endif
          <div class="col-xl-9">
            <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID: #{{ $invoice['invoice_id'] }}</strong></p>
          </div>
          <div class="col-xl-3 float-end">
            <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
                class="fas fa-print text-primary" onclick="window.print()"></i> Print</a>
            <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
                class="far fa-file-pdf text-danger" onclick="window.print()"></i> Export</a>
          </div>
          <hr>
        </div>

  
  
          <div class="row">
            <div class="col-xl-8">
              <ul class="list-unstyled">
                <li class="text-muted">To: <span style="color:#5d9fc5 ;">{{ $invoice['fullname'] }}</span></li>
                <li class="text-muted">{{ $invoice['address']}}</li>
              </ul>
            </div>
            <div class="col-xl-4">
              <p class="text-muted">Invoice</p>
              <ul class="list-unstyled">
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="fw-bold">ID:</span>#{{ $invoice['invoice_id'] }}</li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="fw-bold">Creation Date: </span>{{ date('Y-m-d') }}</li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="me-1 fw-bold">Status:</span><span class="badge bg-warning text-black fw-bold">
                    Unpaid</span></li>
              </ul>
            </div>
          </div>
  
          <div class="row my-2 mx-1 justify-content-center">
            <table class="table table-striped table-borderless">
              <thead style="background-color:#84B0CA ;" class="text-white">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Description</th>
                  <th scope="col">Qty</th>
                  <th scope="col">Unit Price</th>
                  <th scope="col">Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>{{ $invoice['product_description']}}</td>
                  <td>1</td>
                  <td>{{ $invoice['price']}}</td>
                  <td>{{ $invoice['price']}}</td>
                </tr>
              </tbody>
  
            </table>
          </div>
          <div class="row">
            <div class="col-xl-8">
              <p class="ms-3">Add additional notes and payment information</p>
  
            </div>
            <div class="col-xl-3">
              <ul class="list-unstyled">
                <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>{{ $invoice['price']}} SAR</li>
                <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(15%)</span>{{ $invoice['vat']}} SAR</li>
              </ul>
              <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                  style="font-size: 25px;">{{ $invoice['total']}} SAR</span></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xl-10">
              <p>Thank you for your purchase</p>
            </div>
            <div class="col-xl-2">
              <button type="button" class="btn btn-primary text-capitalize"
                style="background-color:#60bdf3 ;">Pay Now</button>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>

@endsection



