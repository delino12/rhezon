<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiclePhoto extends Model
{
    use HasFactory;

    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne($payload){
    	// body
        if($payload->update_flag == true){
            $data = $this->updateOne($payload);
        }else{
        	$vehicle_photo 					= new VehiclePhoto();
        	$vehicle_photo->vehicle_id 		= $payload->vehicle_id;
        	$vehicle_photo->document_url 	= $payload->document_url;
        	$vehicle_photo->save();
        }

        // $data = [
        //     'status'    => 'success',
        //     'message'   => 'Vehicle photo added!'
        // ];

        // // return
        // return $data;
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
        // dd($payload);
        $vehicle_photo = VehiclePhoto::where("vehicle_id", $payload->vehicle_id)->first();
        if($vehicle_photo !== null){
            $update_vphoto                  = VehiclePhoto::find($vehicle_photo->id);
            $update_vphoto->document_url    = $payload->document_url;
            $update_vphoto->update();
        }else{
            $new_vehicle_photo                  = new VehiclePhoto();
            $new_vehicle_photo->vehicle_id      = $payload->vehicle_id;
            $new_vehicle_photo->document_url    = $payload->document_url;
            $new_vehicle_photo->save();
        }

        // $data = [
        //     'status'    => 'success',
        //     'message'   => 'Vehicle photo updated!'
        // ];

        // // return
        // return $data;
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
