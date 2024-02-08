@extends('admin.admins')

@section('content')
    <div class="content">
        <h2 class="fs-3">{{$category->categoryname}}</h2>
        <div class="table-responsive content" id="ordertable">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>NOM</th>
                        <th>PRIX</th>
                        <th>QUANTITY</th>
                        <th>SIZE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{number_format($product->price, 0, '', '.') }} FG</td>
                            <td>{{$product->sizes->sizename}}</td>
                            <td>{{$product->categories->categoryname}}</td>
                            
                            <td>
                                <a href="#" class="text-info me-2 infobtn" data-bs-toggle="modal" data-bs-target="#createModal" title="Voir détail"><i class="fas fa-info-circle"></i></a>
                                <a href="{{route('admin.product.edit', $product)}}" class="text-primary me-2 infoedit" title="Modifier"><i class="fas fa-edit"></i></a>
                                <form style="display: inline-block;" action="{{route('admin.product.destroy', $product)}}" class="border-0" onsubmit="confirm('Voulez-vous vraiment supprimer ce bien ?')" method="post">
                                    @csrf 
                                    @method('delete')
                                    <button class="border-0 text-danger me-2 infodelete" title="Supprimer"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="col fs-2 text-center">
                            Cette catégorie ne contient aucun produit <i class="fa-regular fa-face-frown-open"></i>      
                        </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection