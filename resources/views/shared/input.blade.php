@php 

$type ??= 'text';
$class ??= '';
$name ??= '';
$label ??= ucfirst($name) . ' : ';

@endphp

<div @class(["form-group", $class])>
    @if($type === 'textarea')
        <label for="{{$name}}" class="form-label">{{$label}}</label>
        <textarea name="{{$name}}" type="textarea" class="form-control @error($name) is-invalid @enderror">{{old($name, $value ?? '')}}</textarea>
        @error($name)
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    @else 
        <label for="{{$name}}" class="form-label">{{$label}}</label>
        <input type="{{$type}}" class="form-control @error($name) is-invalid @enderror" name="{{$name}}" value="{{old($name, $value ?? '')}}">
        @error($name)
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    @endif
</div>