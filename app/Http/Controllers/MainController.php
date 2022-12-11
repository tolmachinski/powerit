<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Location;
use App\Models\Regions;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $countries = Country::all();

        // return view('index', [
        //     'countries' => $countries,
        // ]);

        return response()->json(Country::all(), 200);
    }
}
