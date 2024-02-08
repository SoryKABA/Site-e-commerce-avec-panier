@php 

$class ??= '';
$multiple ??= false;
$label ??= ucfirst($name) . ' : ';

@endphp

<div @class(["form-group", $class])>
    <label for="{{$name}}" class="form-label">{{$label}}</label>
    <input type="file" @if($multiple) multiple @endif class="form-control @error($name) is-invalid @enderror" name="{{$name . ($multiple ? '[]' : '')}}">
    @error($name)
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
</div>