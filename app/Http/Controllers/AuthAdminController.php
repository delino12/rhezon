<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
use Redirect;
use Auth;

class AuthAdminController extends Controller
{
    /*
    |-----------------------------------------
    | AUTHENTICATION
    |-----------------------------------------
    */
    public function __construct(){
    	// body
    	// $this->middleware('auth');
    }
    
    /*
    |-----------------------------------------
    | SHOW VIEW INDEX
    |-----------------------------------------
    */
    public function index(Request $request){
    	// body
        if(Auth::guard('admin')->check()){
            return redirect('admin/dashboard');
        }else{
            // check if admin already exits
            $check_admin = Admin::where("email", "admin@rhezon.com")->first();
            if($check_admin == null){

                // create new admin
                $name       = "System Adminstrator";
                $email      = "admin@rhezon.com";
                $password   = bcrypt('password@12345');

                $create_admin           = new Admin();
                $create_admin->level    = 1;
                $create_admin->name     = $name;
                $create_admin->email    = $email;
                $create_admin->password = $password;
                $create_admin->save();
            }
        }

    	return view('auth-admin.login');
    }
    
    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function loginAdmin(Request $request){
    	// body
        $username = $request->admin_email;
        $password = $request->admin_password;

        // remember token
        $rememberToken = $request->remember;

        // check auth for Admin login Guard
        if (Auth::guard('admin')->attempt(['email' => $username, 'password' => $password], $rememberToken)) {
            // if successful 
            $data = array(
                'status'  => 'success',
                'message' => 'Login Successful!'
            );

            // return response
            return response()->json($data);

        } else {
             // if successful 
            $data = array(
                'status'  => 'error',
                'message' => 'Invalid email/password!'
            );

            // return response
            return response()->json($data);
        }
    }
    
    /*
    |-----------------------------------------
    | FETCH DATA 
    |-----------------------------------------
    */
    public function logoutAdmin(Request $request){
    	// body
        Auth::guard('admin')->logout();
        Auth::logout();
        Session::flush();

        // return
        return Redirect::to('/');
    }
    
    /*
    |-----------------------------------------
    | DESTROY DATA
    |-----------------------------------------
    */
    public function destroyOne(Request $request){
    	// body
    }
}
