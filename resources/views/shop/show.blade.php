@extends('layouts.header')

@section('content')

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{$product->getImage()->getUrl()}}" style="height: 500px; width: 400px;" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">SKU: BST-498</div>
                <h1 class="display-5 fw-bolder">{{$product->title}}</h1>
                <div class="fs-5 mb-5">
                    <span class="text-decoration-line-through">500000FG</span>
                    <span>{{$product->price}}FG</span>
                </div>
                <p class="lead">{{$product->description}}</p>
                <div class="d-flex">
                    <form action="{{route('add.cart')}}" method="post">
                        @csrf 
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Ajouter au panier
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Les différents modèles</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($product->pictures as $picture)
            <div class="col mb-5">
                <div class="card h-100" style="height: 10vh;">
                    <!-- Product image-->
                    <img class="card-img-top img-thumbnail h-50" style="height: 130px;" src="{{$picture->getUrl()}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body">
                        <div class="text-center">
                            <!-- Product name-->
                            <a href="" class="text-decoration-none" style="color: inherit;">
                                <h5 class="fw-bolder">{{$product->title}}</h5>
                            </a>
                            <!-- Product price-->
                            {{$product->price}}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <form action="{{route('add.cart')}}" method="post">
                        @csrf 
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Ajouter au panier
                        </button>
                    </form>
                        <!-- <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="">View options</a>
                        </div> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection