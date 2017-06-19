<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Language;
use App\Career;
use App\Province;
use App\Salary;

class HomepageController extends Controller
{
    //
	public function index()
    {
        //

        $careers 	= Career::where('status', '=', '1')->orderBy('career_name', 'asc')->get();
        $provinces  = Province::where('status', '=', '1')->orderBy('province_name', 'asc')->get();
        $salaries   = Salary::where('is_active', '=', '1')->orderBy('name', 'asc')->get();

		return view('homepage',compact('careers','provinces','salaries'));
    }
}
