<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\LabelJob;
use App\Models\Label;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $company = new Company();
        $company->initDefault($request);


        return view('home');
    }

    /*
    |-----------------------------------------
    | faces
    |-----------------------------------------
    */
    public function faces(Request $request){
        // body
        return view('faces.index');
    }
    

    /*
    |-----------------------------------------
    | videos
    |-----------------------------------------
    */
    public function videos(Request $request){
        $label_job = new LabelJob();
        $all_jobs  = $label_job->fetchAll($request);


        // body
        return view('videos.index', compact('all_jobs'));
    }

    /*
    |-----------------------------------------
    | images
    |-----------------------------------------
    */
    public function images(Request $request){
        // body
        return view('images.index');
    }

    /*
    |-----------------------------------------
    | vr
    |-----------------------------------------
    */
    public function vr(Request $request){
        // body
        return view('vr.index');
    }

    /*
    |-----------------------------------------
    | data
    |-----------------------------------------
    */
    public function data(Request $request){
        // body
        return view('data.index');
    }

    /*
    |-----------------------------------------
    | drones
    |-----------------------------------------
    */
    public function drones(Request $request){
        // body
        return view('drones.index');
    }
}
