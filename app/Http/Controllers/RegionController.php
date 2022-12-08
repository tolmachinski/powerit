<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegionRequest;
use App\Models\Country;
use App\Models\Regions;
use Illuminate\Http\Request;

class RegionController extends BaseController
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $countries = Country::all();
        return view('region-form',['countries' => $countries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegionRequest $request)
    {
        $region = new Regions();
        
        $region->region_name = $request->input('region');
        $region->country_id = $request->input('country');
        
        $region->save();
        
        return redirect('/main');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function edit(Regions $regions)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regions  $Regions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regions $regions)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regions  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regions $region)
    {
        $region->delete();
        return redirect('/main');
    }

    /**
     *
     * @param  \App\Models\Country  $country
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function show(Regions $regions)
    {   
    }
}
