@extends('admin.admins')

@section('content')
<div class="content" id="createModal">
@if($errors->any())
    <div class="alert alert-danger">
        <ul class="my-0">
            @foreach($errors->all() as $error)
                <li>{{$error}} </li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="modal-dialog w-75" style="margin-left: 50px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">{{$user->exists ? "Mise à jour de l'utilisateur" : 'Nouvel utilisateur'}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <form action="{{route($user->exists ? 'admin.user.update' : 'admin.user.store', $user)}}" method="post" id="formOrder">
                @csrf 
                @method($user->exists ? 'put' : 'post')
                <div class="row">
                    <div class="stack gap-2">
                        <div class="col">
                            @include('shared.input', ['class' => 'col', 'label' => 'Nom de l\'ulisateur :', 'name' => 'name', 'value' => $user->name])
                            @include('shared.input', ['class' => 'col', 'label' => 'Email :', 'name' => 'email', 'value' => $user->email, 'type' => 'email'])
                            
                        </div>
                        <div class="col">
                            <label for="rules" class="form-label">Rôles de l'utilisateur</label>
                            <select name="rules" id="rules" class="form-select @error('rules') is-invalid @enderror" value="{{'rules', $user->rule}}">
                                <option value="">---Rôles---</option>
                                @foreach($rules as $rule)
                                    <option value="{{$rule}}" @selected($user->rule === $rule)>{{$rule}}</option>
                                @endforeach
                            </select>
                            @if($user->exists)
                                @include('shared.input', ['class' => 'col', 'label' => 'Ancien mot de passe :', 'name' => 'newpassword', 'type' => 'password'])
                                @include('shared.input', ['class' => 'col', 'label' => 'Mot de passe de confirmation :', 'name' => 'passwordconfirme', 'type' => 'password'])
                            @endif
                            @include('shared.input', ['class' => 'col', 'label' => $user->exists ? 'Nouveau mot de passe' : 'Mot de passe', 'name' => 'password', 'type' => 'password'])
                        </div>    
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="add" id="add">
                        @if($user->exists) 
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