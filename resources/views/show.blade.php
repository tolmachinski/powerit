@extends('layout')

@section('title', 'Show Country')

@section('content')

<div class="card">
    <ul class="list-group">
        <li class="list-group-item">Country Name: {{$country->country_name}}</li>
         
            @foreach($country->regions as $region)
            <li class="list-group-item">Region:
                <ul class="list-group">
                    <li class="list-group-item row">
                        {{$region->region_name}}
                    </li>
                </ul>

                <ul class="list-group">
                Locations: 
                @foreach($region->locations as $location)
                <li class="list-group-item row">
                    {{$location->location_name}}
                </li>
                @endforeach
                </ul>
            </li>
            @endforeach
        <li class="list-group-item">Created: {{$country->created_at}}</li>
        <li class="list-group-item">Updated: {{$country->updated_at}}</li>
    </ul>
</div>

@endsection