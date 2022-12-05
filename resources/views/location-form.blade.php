@extends('layout')

@section('title', 'Location')

@section('content')

<form 
    method="POST" 
    action="{{route('location.store')}}"
>
    @csrf
    @isset($region)
        @method('PUT')
    @endisset
    <label class="form-label">Region</label>
    <select class="form-select" name="region" aria-label="Default select example">
    <option selected>Select Region</option>
        @foreach($regions as $region)
            <option value="{{$region->id}}">{{$region->region_name}}</option>
        @endforeach
        @error('region_id')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </select>

    <div class="mb-3">
        <label class="form-label">Location</label>
        <input type="text" name="location" class="form-control" id="exampleFormControlInput1" placeholder="Your Location">
        @error('location_name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <button class="btn btn-primary" role="button">Save</button>
</form>
@endsection