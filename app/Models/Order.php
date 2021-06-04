<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Location;

class Order extends Model
{
    use HasFactory;

    // public $appends = ['location', 'destination'];


    // /*
    // |-----------------------------------------
    // | GLUDE
    // |-----------------------------------------
    // */
    // public function getLocationAttribute(){
    // 	// body
    // 	$location = Location::where('name', $this->location)->first();
    // 	return $location;
    // }

    // /*
    // |-----------------------------------------
    // | GLUDE
    // |-----------------------------------------
    // */
    // public function getDestinationAttribute(){
    // 	// body
    // 	$destination = Location::where('name', $this->destination)->first();
    // 	return $destination;
    // }

    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne($payload){
    	// body
    	$order 					= new Order();
    	$order->vehicle_id 		= $payload->car_id;
    	$order->name 			= $payload->customer;
    	$order->email 			= $payload->email;
    	$order->phone 			= $payload->phone;
    	$order->reference 		= $payload->reference;
    	$order->location 		= $payload->location;
    	$order->destination 	= $payload->destination;
    	$order->pickup_date 	= Carbon::parse($payload->pickup);
    	$order->dropoff_date 	= Carbon::parse($payload->dropoff);
    	$order->duration 		= $payload->duration;
    	$order->no_of_passenger = $payload->members;
    	$order->budget 			= $payload->budget ?? 0;
    	$order->order_type 		= 'Day Trip';
    	$order->is_paid 		= true;
    	$order->save();

    	$data = [
    		'status' 	=> 'success',
    		'message' 	=> 'Order have been sent! Your order code is: '.$payload->reference
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
