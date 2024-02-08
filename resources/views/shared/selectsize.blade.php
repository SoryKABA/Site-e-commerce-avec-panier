@php 

$class ??= null;
$name ??= '';
$value ??= null;
$label ??= ucfirst($name) . ' :';
@endphp

<div @class(["form-group", $class])>
    <label for="{{$name}}">{{$label}}</label>
    <select class="form-select @error($name) is-invalid @enderror" id="{{$name}}" name="{{$name}}" value="{{old($name, $value)}}">
        <option value="">----</option>
        @foreach($sizes as $key => $v)
            <option value="{{$key}}" @selected($value->contains($key))> {{$v}} </option>
        @endforeach
    </select>
    @error($name)
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
</div>