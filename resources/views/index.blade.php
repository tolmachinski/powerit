@extends('layout')

@section('title', 'Countries')

@section('content')

<a class="btn btn-primary" href="{{route('country.create')}}" role="button">Create Country</a>
<a class="btn btn-primary" href="{{route('region.create')}}" role="button">Create Region</a>
<a class="btn btn-primary" href="{{route('location.create')}}" role="button">Create Location</a>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Country</th>
    </tr>
  </thead>
  <tbody>
    @foreach($countries as $country)
    <tr>
      <th scope="row">{{$country->id}}</th>

      <td>
        {{$country->country_name}} <br>
         
            @foreach($country->regions as $region)
            <li class="list-group-item">Region:
                <ul class="list-group">
                    <li class="list-group-item row">
                        {{$region->region_name}}
                        <form method="POST" action="{{route('region.destroy', $region)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form> 
                    </li>

                    
                </ul>
                <ul class="list-group">
                Locations: 
                @foreach($region->locations as $location)
                <li class="list-group-item row">
                    {{$location->location_name}}
                    <form method="POST" action="{{route('location.destroy', $location)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </li>
                @endforeach
                </ul>
            </li>
            @endforeach
      </td>

      <td>
      <a class="btn btn-success" href="{{route('country.edit', $country)}}" role="button">Edit</a>
        <a class="btn btn-primary" href="{{route('country.show', $country)}}" role="button">Show</a>
        <form method="POST" action="{{route('country.destroy', $country)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>

      

    </tr>
    @endforeach
  </tbody>
</table>

@endsection