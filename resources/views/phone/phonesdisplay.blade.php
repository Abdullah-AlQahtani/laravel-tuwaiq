@extends('layouts.app')



@section('content')

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row row-eq-height justify-content-center">
    @foreach($phone as $items)
      <div class="col-md-4 col-lg-6 col-xl-4">
        <div class="card text-black">
          <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
          <div class="text-center">
            <img src="{{ $items['image_link'] }}" class="card-img-top w-25 text-center" alt="Apple Computer" />
          </div>
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title">{{$items['type']}}</h5>
            </div>
            <div>
            <div class="d-flex justify-content-between">
                <span>Color</span><span>{{$items['color']}}</span>
            </div>
            <div class="d-flex justify-content-between">
                <span>Price</span><span>{{$items['price']}} SAR</span>
            </div>
            </div>

          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection



