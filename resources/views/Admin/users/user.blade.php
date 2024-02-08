@extends('admin.admins')

@section('title', 'Administration des utilisateurs')

@section('content')
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-8 col-sm mb-5 mx-auto">
                <h1 class="fs-4 text-center-lead text-primary">@yield('title')</h1>
            </div>
            @include('shared.flash')
        </div>
        <div class="dropdown-divider border-warning"></div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="fw-bold mb-0">Liste des utilisateurs</h5>
            </div>
            <div class="col-md-6">
                <div class="d-flex justitfy-content-end">
                    <a href="{{route('admin.user.create')}}" class="btn btn-primary btn-sm me-3"><i class="fas fa-folder-plus"></i>Nouveau</a>
                    <a href="" id="export" class="btn btn-success btn-sm"><i class="fas fa-table"></i>Uploader</a>
                </div>
            </div>
        </div>
        <div class="dropdown-divider border-warning"></div>
        <div class="row">
            <div class="table-responsive" id="ordertable">
                <table class="table table-stripe">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>NOM</th>
                            <th>EMAIL</th>
                            <th>ROLE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td><a class="text-primary me-2 text-decoration-none" href="{{route('admin.user.show', $user)}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->rules}}</td>
                                
                                <td>
                                    <a href="#" class="text-info me-2 infobtn" data-bs-toggle="modal" data-bs-target="#createModal" title="Voir détail"><i class="fas fa-info-circle"></i></a>
                                    <a href="{{route('admin.user.edit', $user)}}" class="text-primary me-2 infoedit" title="Modifier"><i class="fas fa-edit"></i></a>
                                    <form style="display: inline-block;" action="{{route('admin.user.destroy', $user)}}" class="border-0" onsubmit="confirm('Voulez-vous vraiment supprimer ce bien ?')" method="post">
                                        @csrf 
                                        @method('delete')
                                        <button class="border-0 text-danger me-2 infodelete" title="Supprimer"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <script src="{{asset('js/process.js')}}"></script>
@endsection