@extends('admin.admins')

@section('content')
<div class="content w-75 my-2" id="createModal" style="margin-left: 40px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">{{$product->exists ? 'Mise à jour du produit' : 'Nouveau produit'}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <form action="{{route($product->exists ? 'admin.product.update' : 'admin.product.store', ['slug' => $product->slug, 'product' => $product])}}" method="post" id="formOrder" enctype="multipart/form-data">
                @csrf 
                @method($product->exists ? 'put' : 'post')
                <div class="row border border-1 rounded">
                    <div class="stack gap-2">
                        <div class="col">
                            @include('shared.input', ['class' => 'col', 'name' => 'title', 'value' => $product->title])
                            <div class="col row">
                                @include('shared.input', ['class' => 'col', 'name' => 'price', 'value' => $product->price, 'label' => 'Prix :'])
                                @include('shared.input', ['class' => 'col', 'name' => 'quantity', 'value' => $product->quantity, 'label' => 'Quantité :'])
                            </div>
                        </div>
                        @include('shared.input', ['class' => 'col', 'name' => 'description', 'value' => $product->description, 'type' => 'textarea'])
                    </div>
                    @include('shared.selectcat', ['label' => 'Catégories :', 'name' => 'categories_id', 'value' => $product->categories()->pluck('id')])
                    @include('shared.selectsize', ['label' => 'Taille :', 'name' => 'sizes_id', 'value' => $product->sizes()->pluck('id')])
                    <div>
                    @include('shared.uploadFile', ['label' => 'Images :', 'name' => 'pictures', 'multiple' => true])
                        
                    @foreach($product->pictures as $picture)
                        <div id="picture{{$picture->id}}" class="w-25" width="50" height="50">
                            <img src="{{$picture->getUrl()}}" alt="" class="img-thumbnail w-100">
                            <button class="btn btn-danger w-100" type="button" 
                                    hx-delete="{{route('admin.product.delete', $picture)}}"
                                    hx-target="#picture{{$picture->id}}"
                                    hx-swag="delete">
                                <span class="htmx-indicator spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    @endforeach
                        
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="add" id="add">
                        @if($product->exists) 
                            Mettre à jour
                        @else 
                            Ajouter <i class="fas fa-plus"></i>
                        @endif 
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <script src="{{asset('js/formprocess.js')}}"></script> -->
@endsection