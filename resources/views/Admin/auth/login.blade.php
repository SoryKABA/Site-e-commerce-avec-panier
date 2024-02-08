@extends('admin.admin')

@section('title', 'Se connecter')

@section('content')
    <div class="mt-4 content">
        <h2 style="margin-left: 350px;">@yield('title')</h2>
        <form action="{{route('auth.login')}}" method="POST" class="vstack gap-2">
            @csrf 
            <div class="w-50 content" style="margin-left: 350px;">
                @include('shared.input', ['class' => 'col', 'type' => 'email', 'name' => 'email', 'label' => 'Login :'])
                @include('shared.input', ['class' => 'col', 'type' => 'password', 'name' => 'password', 'label' => 'Mot de passe :'])
                <div class="form-group my-4">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </div>
            </div>
        </form>
    </div>

@endsection