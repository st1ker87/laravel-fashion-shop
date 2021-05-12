@extends('layouts.app');

@section('title', 'Products')
    
@section('content')
    <div class="shop_container">

    </div>
    @foreach ($dresses as $dress)
        <h2>{{$dress['brand']}}</h2>
        <img style="max-width: 200px;" src="{{$dress['img_path']}}" alt="">
    @endforeach


@endsection