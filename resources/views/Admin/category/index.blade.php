@extends('admin.admins')

@section("content")
    <div class="content">
        <div class="d-flex justify-content-around align-items-center">
            <h1>Les catégorie</h1>
            <a href="{{route('admin.category.create')}}" class="btn btn-primary">Nouveau+</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>NOM</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a class="nav-link" href="{{route('admin.category.show', $category)}}">{{$category->categoryname}}</a></td>
                        <td>
                            <a href="{{route('admin.category.edit', $category)}}" class="text-primary me-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form style="display: inline-block;" action="{{route('admin.category.destroy', $category)}}" class="border-0" onsubmit="confirm('Voulez-vous vraiment supprimer cette catégorie ?')" method="post">
                                @csrf 
                                @method('delete')
                                <button class="border-0 text-danger me-2" title="Supprimer"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection