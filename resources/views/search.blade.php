@extends('master')
@section('content')
<div class=" custem-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="Trending Wrapper">
            <h4> Results for Products </h4>
            <div class="">
                @foreach($products as $item)
                <div class="serached-item">
                    <a href="deatil/{{$item['id']}}">
                    <img class="trending-img" src="{{$item['gallery']}}">
                    <div class="">
                            <h2>{{$item['name']}}</h2>
                            <h5>{{$item['description']}}</h5>
                        </div>
                        @endforeach
                </div>
            </div>
</div>
            @endsection