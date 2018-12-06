<?php

namespace App\Http\Controllers;

use App\Location;
use App\State;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class LocationsController extends Controller
{
    public function index(){
    
		$countries = Location::select('country')->distinct()->get();

		
        return response()->json(['error' => false, 'countries' => $countries],200);
	
	}
	
	public function getLgas(Request $request){

		$state = State::where("id",$request->input('state'))->first();

    
		$lgas = Location::where('state', $state->name)->orderBy('lga', 'asc')->get()->toArray();

		
        return response()->json(['error' => false, 'lgas' => $lgas],200);
	}

	public function mobileGetLgas($state){

		$state = State::where("id",$state)->first();

    
		$lgas = Location::where('state', $state->name)->orderBy('lga', 'asc')->get()->toArray();

		
        return response()->json(['error' => false, 'lgas' => $lgas],200);
	}
}
