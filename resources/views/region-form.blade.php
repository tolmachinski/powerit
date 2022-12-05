@extends('layout')

@section('title', 'Region')

@section('content')

<form 
    method="POST" 
    action="{{route('region.store')}}"
>
    @csrf
    @isset($country)
        @method('PUT')
    @endisset
    <label class="form-label">Country</label>
    <select class="form-select" name="country" aria-label="Default select example">
    <option selected>Select Country</option>
        @foreach($countries as $country)
            <option value="{{$country->id}}">{{$country->country_name}}</option>
        @endforeach
        @error('country_id')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </select>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Region</label>
        <input type="text" name="region" class="form-control" id="exampleFormControlInput1" placeholder="Your Region">
        @error('region_name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <button class="btn btn-primary" role="button">Save</button>
</form>
@endsection