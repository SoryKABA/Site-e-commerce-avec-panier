@extends('layouts.header')

@section('content')

<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach($products as $product)
            @include('shop.card')
        @endforeach
    </div>
</div>

@endsection