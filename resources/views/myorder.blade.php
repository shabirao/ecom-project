@extends('master')
@section('content')

<div class=" custem-product">

    <div class="col-sm-10">
        <div class="Trending Wrapper">
            <h2> Orders List </h2>
  
            <div class="">
                @foreach($orders as $item)
                <div class="row search-item cart-list-divider">
                    <div class="col-sm-4">
                        <a href="deatil/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div class="slider-text">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                            <h4>Delivery Status : {{$item->status}}</h4>
                            <h4>Payment Status : {{$item->payment_status}}</h4>
                            <h4>Payment Method : {{$item->payment_method}}</h4>
                            <h4>Delivery Address : {{$item->address}}</h4>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@endsection