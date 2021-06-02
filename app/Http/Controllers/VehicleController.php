<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehiclePhoto;

class VehicleController extends Controller
{
    /*
    |-----------------------------------------
    | AUTHENTICATION
    |-----------------------------------------
    */
    public function __construct(){
    	// body
    	$this->middleware('auth:admin');
    }
    
    /*
    |-----------------------------------------
    | SHOW VIEW INDEX
    |-----------------------------------------
    */
    public function index(Request $request){
    	// body
    	return view('vehicles.index');
    }
    
    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne(Request $request){
    	// body
    	$vehicle = new Vehicle();
    	$data 	 = $vehicle->addOne($request);

    	$request->vehicle_id = $data['vehicle']->id;
    	foreach ($request->car_screenshots ?? [] as $key => $value) {
            # code...
            $owner_name = str_replace(" ", "-", 'rhezon');
            $file = $value;

            $file_name = strtolower($owner_name).'-'.time().rand(000,999).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('documents'), $file_name);
            $request->document_url = env("APP_URL").'/documents/'.$file_name;

            $vehicle_photo = new VehiclePhoto();
    		$vehicle_photo->addOne($request);
        }

    	// return.
    	return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | FETCH DATA 
    |-----------------------------------------
    */
    public function fetchOne(Request $request){
    	// body
    	$vehicle = new Vehicle();
    	$data 	 = $vehicle->fetchOne($request);

    	// return.
    	return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | FETCH ALL DATA 
    |-----------------------------------------
    */
    public function fetchAll(Request $request){
    	// body
    	$vehicle = new Vehicle();
    	$data 	 = $vehicle->fetchAll($request);

    	// return.
    	return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | MODIFY or UPDATE DATA 
    |-----------------------------------------
    */
    public function updateOne(Request $request){
    	// body
    	$vehicle = new Vehicle();
    	$data 	 = $vehicle->updateOne($request);

    	// return.
    	return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | DELETE DATA
    |-----------------------------------------
    */
    public function deleteOne(Request $request){
    	// body
    	$vehicle = new Vehicle();
    	$data 	 = $vehicle->deleteOne($request);

    	// return.
    	return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | DESTROY DATA
    |-----------------------------------------
    */
    public function destroyOne(Request $request){
    	// body
    	$vehicle = new Vehicle();
    	$data 	 = $vehicle->destroyOne($request);

    	// return.
    	return response()->json($data);
    }
}
