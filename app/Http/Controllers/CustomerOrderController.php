<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CustomerOrderController extends Controller
{
    /*
    |-----------------------------------------
    | AUTHENTICATION
    |-----------------------------------------
    */
    // public function __construct(){
    // 	// body
    // 	$this->middleware('auth');
    // }
    
    /*
    |-----------------------------------------
    | SHOW VIEW INDEX
    |-----------------------------------------
    */
    public function index(Request $request){
    	// body
    	return view('orders.index');
    }
    
    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne(Request $request){
    	// body
    	$customer_order = new Order();
    	$data           = $customer_order->addOne($request);

    	// return response.
    	return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | FETCH DATA 
    |-----------------------------------------
    */
    public function fetchOne(Request $request){
    	// body
    	$customer_order = new Order();
    	$data           = $customer_order->fetchOne($request);

    	// return response.
    	return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | FETCH ALL DATA 
    |-----------------------------------------
    */
    public function fetchAll(Request $request){
    	// body
    	$customer_order = new Order();
    	$data           = $customer_order->fetchAll($request);

    	// return response.
    	return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | MODIFY or UPDATE DATA 
    |-----------------------------------------
    */
    public function updateOne(Request $request){
    	// body
    	$customer_order = new Order();
    	$data           = $customer_order->updateOne($request);

    	// return response.
    	return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | DELETE DATA
    |-----------------------------------------
    */
    public function deleteOne(Request $request){
    	// body
    	$customer_order = new Order();
    	$data           = $customer_order->deleteOne($request);

    	// return response.
    	return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | DESTROY DATA
    |-----------------------------------------
    */
    public function destroyOne(Request $request){
    	// body
    	$customer_order = new Order();
    	$data           = $customer_order->destroyOne($request);

    	// return response.
    	return response()->json($data);
    }
}
