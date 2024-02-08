@extends('layout')

@section('content')
    <div class="bg-light p-5 mnb-5 text-center">
        <!-- <form action="" method="get" class="container d-flex gap-2">
            <input type="number" placeholder="Budget max" class="form-control" name="price" value="{{$input['price'] ?? ''}}">
            <input type="number" placeholder="Surface minimale" class="form-control" name="surface" value="{{$input['surface'] ?? ''}}">
            <input type="number" placeholder="Nombre de pièces min" class="form-control" name="rooms" value="{{$input['rooms'] ?? ''}}">
            <input type="text" placeholder="Titre" class="form-control" name="title" value="{{$input['title'] ?? ''}}">
            <button class="btn btn-primary btn-sm flex-grow-0"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form> -->
    </div>
    <div class="container-fluid mt-3">
        <div class="row mt-2 w-100">
            <div class="col-8 col-md-8">
                <div class="row ml-2">
                    @forelse($products as $product)
                        <div class="col-4 ">
                            @include('products.card')
                        </div>
                    @empty
                        <div class="col fs-2 text-center">
                            Aucun bien trouvé <i class="fa-regular fa-face-frown-open"></i>      
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="col-4">
                <div class="w-100 my-3">
                    <h4>Je m'inscris pour avoir plus de news</h4>
                    <form action="{{route('customer.register')}}" method="post">
                        @csrf
                        @method('post')
                        <div class="form-group my-2">
                            <input type="text" class="form-control" name="name" placeholder="Nom complet">
                        </div>
                        <div class="form-group my-2">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group my-2">
                            <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-sm">S'inscrire</button>
                            <a href="" class="text-primary text-decoration-none" data-bs-target="#createModal">Se connecter</a>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal" tabindex="-1" id="createModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Se connecter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                @csrf
                                @method('post')
                                <div class="form-group my-2">
                                    <label for="" class="form-label">Votre login :</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group my-2">
                                    <label for="" class="form-label">Votre mot de passe</label>
                                    <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-sm">S'inscrire</button>
                                    <a href="" class="text-primary text-decoration-none">Se connecter</a>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
@endsection