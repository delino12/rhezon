<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehiclePhoto;

class ExternalPageController extends Controller
{
	/*
	|-----------------------------------------
	| index
	|-----------------------------------------
	*/
	public function index(Request $request){
		// body
		$top_cars = Vehicle::orderBy('id', 'DESC')->limit(6)->get();
		$all_cars = Vehicle::orderBy('id', 'DESC')->get();
		$featured_cars = Vehicle::orderBy('id', 'ASC')->limit(6)->get();

		$top_cars->transform(function($item){
			$item->screenshot = VehiclePhoto::where('vehicle_id', $item->id)->first();
			return $item;
		});

		return view('welcome', compact('top_cars', 'all_cars', 'featured_cars'));
	}

	/*
	|-----------------------------------------
	| search
	|-----------------------------------------
	*/
	public function search(Request $request){
		// body
		$top_cars = Vehicle::orderBy('id', 'DESC')->limit(6)->get();
		$all_cars = Vehicle::orderBy('id', 'DESC')->get();
		$featured_cars = Vehicle::orderBy('id', 'ASC')->limit(6)->get();

		$top_cars->transform(function($item){
			$item->screenshot = VehiclePhoto::where('vehicle_id', $item->id)->first();
			return $item;
		});

		return view('search', compact('top_cars', 'all_cars', 'featured_cars'));
	}
}
