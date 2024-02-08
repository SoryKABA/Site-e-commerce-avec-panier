<div class="card" style="width: 18rem;">
  @if($product->getImage())
    <img src="{{$product->getImage()->getUrl()}}" style="width: 320px; height: 300px;" class="card-img-top" alt="...">
  @else
    <img src="./vide.jpg" class="card-img-top" alt="...">
  @endif
  <div class="card-body">
    <h5 class="card-title">{{$product->title}}</h5>
    <p class="card-text">{{$product->price}}</p>
    <a href="{{route('products.show', ['slug' => $product->slug, 'product' => $product])}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>