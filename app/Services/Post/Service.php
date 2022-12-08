<?php

namespace App\Services\Post;

use App\Http\Requests\CountryRequest;
use App\Models\Country;

class Service 
{
    public function countryStore(CountryRequest $request)
    {
        $country = new Country();
        
        $country->country_name = $request->input('country');
        
        $country->save();
        
    }

    public function countryUpdate(CountryRequest $request, Country $country)
    {
        $country->country_name = $request->input('country');
        
        $country->save();
    }
}