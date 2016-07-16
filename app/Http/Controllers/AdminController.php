<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
	public function __construct()
	{
		return \Redirect::to('/');
	}
	
    public function index()
    {
        return "You're admin!";
    }
}
