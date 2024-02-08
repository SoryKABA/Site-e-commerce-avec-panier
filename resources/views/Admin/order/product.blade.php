@extends('admin.admins')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité commandé</th>
                    <th>Prix du produit (GNF)</th>
                    <th>Titre du produit</th>
                    <th>Numéro produit</th>
                    <th>Nom Client(e)</th>
                    <th>Email</th>
                    <th>Numéro de téléphone</th>
                    <th>Date de commande</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $products)
                <tr>
                    @for($i=count($products)-1; $i >= 0 ; $i--)
                        @if(strpos($products[$i], 'http://', 0) === 0)
                            <td>
                                <img src="{{$products[$i]}}" alt="" class="img-thumnail rounded w-75" height="60" width="60">
                            </td>
                        @else
                            <td>{{$products[$i]}} </td>
                        @endif
                    @endfor
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <h3><strong>Total : </strong></h3> <b>{{number_format((float)$total, 0, ' ', '.')}} GNF</b>
    </div>
@endsection