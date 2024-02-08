@extends('../layouts.header')

@section('content')
 @if(Cart::count() > 0)
 <div class="container-fluid">
    <div class="row">
        <aside class="col-lg-9">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Produit</th>
                                <th scope="col" width="120">Quantité</th>
                                <th scope="col" width="120">Prix</th>
                                <th scope="col" class="text-right d-none d-md-block" width="200">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(Cart::content() as $product)
                            <tr>
                                <td>
                                    <figure class="itemside align-items-center">
                                        <div class="aside"><img style="width: 150px; height: 100px" src="{{$product->model->getImage()->getUrl()}}" class="img-sm img-thumbnail"></div>
                                        <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">{{$product->model->title}}</a>
                                            <p class="text-muted small">SIZE: {{$product->model->sizes->sizename}} <br> Catégorie: {{$product->model->categories->categoryname}}</p>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td> <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select> </td>
                                <td>
                                    <div class="price-wrap"> <var class="price">{{number_format($product->model->price, 0, '.', '')}} FG </var></div>
                                </td>
                                <td class="text-right d-none d-md-block">
                                    <form action="{{route('cart.product.destroy', $product->rowId)}}" method="post">
                                        @csrf 
                                        @method('delete')
                                        <button class="btn btn-light" data-abc="true"> <i class="fa-solid fa-trash"></i></button></td>
                                    </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </aside>
        <aside class="col-lg-3">
            <div class="card mb-3">
                <div class="card-body">
                    <form>
                        <div class="form-group"> <label>Have coupon?</label>
                            <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <!-- <dl class="dlist-align">
                        <dt>Discount:</dt>
                        <dd class="text-right text-danger ml-3">- $10.00</dd>
                    </dl> -->
                    <dl class="dlist-align">
                        <dt>Total:</dt>
                        <dd class="text-right ml-3">{{number_format(floatval(Cart::subtotal()), 0, '', '.')}} FG
                            
                        </dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Taxe:</dt>
                        <dd class="text-right ml-3">{{number_format(floatval($cart->tax()), 0, '', '.')}} FG</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Prix Total:</dt>
                        <dd class="text-right text-dark ml-3"> <strong>{{number_format(floatval($cart->totale()), 0, '', '.')}} FG</strong></dd>
                    </dl>
                    <hr> <a href="{{route('shop.payment')}}" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Make Purchase </a> 
                         <a href="#" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                </div>
                <a href="{{route('cart.destroy')}}">Vider panier</a>
            </div>
        </aside>
    </div>
 </div>
 @else 
    <div class="alert alert-info my-2">Aucun produit dans le panier</div>
 @endif
@endsection