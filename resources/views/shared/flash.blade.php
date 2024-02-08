@if(session('success'))
    <div class="alert alert-success vstack gap-2 my-3">
        {{session('success')}}
    </div>
@endif
@if($errors->any())
    <div class="content w-50 my-4 alert alert-danger">
        <ul class="my-0">
            @foreach($errors->all() as $error)
                <li>{{$error}} </li>
            @endforeach
        </ul>
    </div>
@endif