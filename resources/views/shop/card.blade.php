<div class="col mb-5">
    <div class="card h-100">
        <!-- Sale badge-->
        <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
        <!-- Product image-->
        @if($product->getImage())
            <img class="card-img-top" src="{{$product->getImage()->getUrl()}}" style="height: 200px;" alt="..." />
        @else
            <img src="./vide.jpg" class="card-img-top" alt="...">
        @endif
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{$product->title}}</h5>
                <!-- Product price-->
                <span class="text-muted text-decoration-line">{{$product->price}} FG</span>
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer d-flex justify-content-around p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center">
                <form action="{{route('add.cart')}}" method="post">
                    @csrf 
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <button class="btn btn-outline-dark mt-auto btn-sm" id="button">
                        <i class="bi-cart-fill me-1"></i>
                        Ajouter
                    </button>
                </form>
            </div>
            <div class="text-center"><a class="btn btn-outline-dark mt-auto btn-sm" href="{{route('shop.show', ['slug' => $product->slug, 'product' => $product])}}">Voir Plus</a></div>
        </div>
    </div>
</div>