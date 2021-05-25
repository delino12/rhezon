<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExternalPageController extends Controller
{
	/*
	|-----------------------------------------
	| index
	|-----------------------------------------
	*/
	public function index(Request $request){
		// body
		return view('welcome');
	}

	/*
	|-----------------------------------------
	| search
	|-----------------------------------------
	*/
	public function search(Request $request){
		// body
		return view('search');
	}
}
