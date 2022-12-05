@extends('layout')

@section('title', isset($country) ? 'Edit Country' : 'Create Country')

@section('content')

<form 
    method="POST" 
    @if(isset($country))
    action="{{route('country.update', $country)}}"
    @else
    action="{{route('country.store')}}"
    @endif
>
    @csrf
    @isset($country)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Country</label>
        <input 
            type="text" 
            name="country" 
            class="form-control" 
            value ="{{old('country', isset($country) ? $country->country_name : null)}}"
            placeholder="Your Country"
        >
        @error('country_name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <button class="btn btn-primary" role="button">Save</button>
</form>
@endsection