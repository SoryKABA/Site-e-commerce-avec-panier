@extends('admin.admins')

@section('content')
<div class="content w-50" id="createModal" style="margin-left: 50px;">
@if($errors->any())
    <div class="alert alert-danger">
        <ul class="my-0">
            @foreach($errors->all() as $error)
                <li>{{$error}} </li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">{{$category->exists ? 'Mise à jour de la catégorie' : 'Nouvelle catégorie'}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <form action="{{route($category->exists ? 'admin.category.update' : 'admin.category.store', $category)}}" method="post" id="formOrder">
                @csrf 
                @method($category->exists ? 'put' : 'post')
                <div class="row">
                    <div class="stack gap-2">
                        <div class="col">
                            @include('shared.input', ['class' => 'col', 'label' => 'Catégories :', 'name' => 'categoryname', 'value' => $category->categoryname])
                        </div>    
                    </div>
                    
                </div>
                <div class="modal-footer my-2">
                    <button type="submit" class="btn btn-primary" name="add" id="add">
                        @if($category->exists) 
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