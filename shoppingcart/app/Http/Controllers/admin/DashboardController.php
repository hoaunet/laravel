<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth:admin');
    }
    public function getIndex(){
     return view('admin.dashboard');

    }
    public function getProfile(){
     return view('admin.profile');
    }
}
