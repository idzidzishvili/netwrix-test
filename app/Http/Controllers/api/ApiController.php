<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\PartnerLocator;
use App\Models\State;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCompanies( Request $request){
        $status  = $request->has('status') ? $request->status : null;
        $country = $request->has('country') ? $request->country : null;
        $state   = $request->has('state') ? $request->state : null;

        $countries = [];
        $states = null;

        $companies = PartnerLocator::when($status, function($query) use ($status){
                                        return $query->where('status', $status);
                                    })
                                    ->when($country, function($query) use ($country){
                                        return $query->whereJsonContains('countries_covered', $country);
                                    })
                                    ->when($state, function($query) use ($state){
                                        return $query->whereJsonContains('states_covered', $state);
                                    })
                                    ->get();

        if($country){
            $ctr = Country::where('short_name', $country)->first();
            $states = State::where('country_id', $ctr->country_id)->get();
        }elseif($status){
            $filteredCountries = PartnerLocator::where('status', $status)->pluck('countries_covered');
            foreach ($filteredCountries as $countryJson){
                foreach(json_decode($countryJson, true) as $country){
                    if(!in_array($country, $countries)){
                        array_push($countries, $country);
                    }
                }
            }
        }

        
        return response()->json([
            'companies' => $companies,
            'countries' => $states,
            'states'    => $states,
        ], 200);
    }
}
