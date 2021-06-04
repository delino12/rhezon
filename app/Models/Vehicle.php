<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VehiclePhoto;

class Vehicle extends Model
{
    use HasFactory;

    /*
    |-----------------------------------------
    | GLUE
    |-----------------------------------------
    */
    public function vehicle_photos(){
    	// body
    	return $this->hasMany(VehiclePhoto::class, 'vehicle_id', 'id');
    }

    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne($payload){
    	// body
    	$vehicle 					= new Vehicle();
    	$vehicle->user_id 			= 1;
    	$vehicle->vehicle_type 		= $payload->vehicle_type;
    	$vehicle->vehicle_reg_type 	= $payload->vehicle_type_reg;
    	$vehicle->model 			= $payload->model;
    	$vehicle->year 				= $payload->year;
    	$vehicle->reg_number 		= $payload->reg_number;
    	$vehicle->color 			= $payload->color;
    	$vehicle->features 			= $payload->features;
    	$vehicle->price 			= $payload->price;
    	$vehicle->discount_price 	= $payload->discount_price;
    	$vehicle->location_axis 	= $payload->location_axis;
    	$vehicle->destination_axis 	= $payload->destination_axis;
    	$vehicle->is_avaliable 		= true;
    	$vehicle->is_verified 		= true;
    	$vehicle->save();

    	$data = [
    		'status' 	=> 'success',
    		'message' 	=> 'Vehicle added!',
    		'vehicle' 	=> $vehicle
    	];

    	// return
    	return $data;
    }
    
    /*
    |-----------------------------------------
    | FETCH DATA 
    |-----------------------------------------
    */
    public function fetchOne($payload){
    	// body
    }
    
    /*
    |-----------------------------------------
    | FETCH ALL DATA 
    |-----------------------------------------
    */
    public function fetchAll($payload){
    	// body
    }
    
    /*
    |-----------------------------------------
    | MODIFY or UPDATE DATA 
    |-----------------------------------------
    */
    public function updateOne($payload){
    	// body
    }
    
    /*
    |-----------------------------------------
    | DELETE DATA
    |-----------------------------------------
    */
    public function deleteOne($payload){
    	// body
        $vehicle = Vehicle::find($payload->id)->delete();
        $data = [
            'status'    => 'success',
            'message'   => 'Deleted!'
        ];

        // return
        return $data;
    }
    
    /*
    |-----------------------------------------
    | DESTROY DATA
    |-----------------------------------------
    */
    public function destroyOne($payload){
    	// body
    }
}
