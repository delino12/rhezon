<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;

class AdminPageController extends Controller
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
    | SHOW DASHBOARD INDEX
    |-----------------------------------------
    */
    public function dashboard(Request $request){
    	// body
        $posts = collect([]);
        $users = collect([]);

    	return view('admin.dashboard', compact('posts', 'users'));
    }
    
    /*
    |-----------------------------------------
    | FREE USERS DATA
    |-----------------------------------------
    */
    public function cars(Request $request){
        // body
        $cars = collect([]);
        return view('admin.cars', compact('cars'));
    }
    
    /*
    |-----------------------------------------
    | PREMIUM USERS DATA 
    |-----------------------------------------
    */
    public function carriers(Request $request){
    	// body
        $posts = collect([]);
        $users = User::where('account_type_id', 2)->get();

        return view('admin.carriers', compact('posts', 'users'));
    }

    /*
    |-----------------------------------------
    | VIEW USER PROFILE
    |-----------------------------------------
    */
    public function viewProfile(Request $request, $username){
        $posts = collect([]);
        $users = collect([]);
        $profile = collect([]);

        return view('admin.view-profile', compact('profile', 'posts'));
    }
    
    /*
    |-----------------------------------------
    | PENDING ACCOUNT DATA 
    |-----------------------------------------
    */
    public function accountPending(Request $request){
    	// body
        $user_bio = UserBio::where('is_verified', false)->get();
        $user_ids = [];
        foreach ($user_bio as $key => $value) {
            array_push($user_ids, $value->user_id);
        }
        
        $users = User::whereIn('id', $user_ids)->get();
        $users->transform(function($item){
            
            return $item;
        });

        return view('admin.account-pending', compact('users'));
    }
    
    /*
    |-----------------------------------------
    | VIEW TRANSACTIONS ACTIVIES 
    |-----------------------------------------
    */
    public function transactionActivities(Request $request){
    	// body
        $posts = collect([]);
        $users = collect([]);
        $transactions = collect([]);

        return view('admin.transactions-activities', compact('posts', 'users', 'transactions'));
    }

    /*
    |-----------------------------------------
    | VIEW TRANSACTIONS ACTIVIES 
    |-----------------------------------------
    */
    public function activityLogs(Request $request){
        // body
        $posts = collect([]);
        $users = collect([]);
        $transactions = collect([]);

        return view('admin.activities-logs', compact('posts', 'users'));
    }
    
    /*
    |-----------------------------------------
    | VIEW SINGLE USER DATA
    |-----------------------------------------
    */
    public function adminViewProfile(Request $request){
    	// body
    }
    
    /*
    |-----------------------------------------
    | VIEW SINGLE POST DATA
    |-----------------------------------------
    */
    public function adminViewPost(Request $request){
    	// body
    }
    
    /*
    |-----------------------------------------
    | ADS
    |-----------------------------------------
    */
    public function ads(Request $request){
        // body
        return view('admin.ads');
    }
    
    /*
    |-----------------------------------------
    | NOTIFICATIONS
    |-----------------------------------------
    */
    public function notifications(Request $request){
        // body
        return view('admin.notifications');
    }
    
    /*
    |-----------------------------------------
    | MESSAGE VIEW
    |-----------------------------------------
    */
    public function messages(Request $request){
        // body
        return view('admin.message-center');
    }

    /*
    |-----------------------------------------
    | PROFILE VIEW
    |-----------------------------------------
    */
    public function profile(Request $request){
        // body
        return view('admin.profile');
    }


    /*
    |-----------------------------------------
    | PAYMENT VIEW
    |-----------------------------------------
    */
    public function payments(Request $request){
        // body
        $posts = collect([]);
        $users = collect([]);
        $payment_gateway = collect([]);

        return view('admin.payments', compact('payment_gateway'));
    }

    /*
    |-----------------------------------------
    | SETTING VIEW
    |-----------------------------------------
    */
    public function settings(Request $request){
        // body
        return view('admin.settings');
    }
}
