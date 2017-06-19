<?php

namespace App\Http\Controllers;

use App\Company;
use App\Language;
use DB;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    //
     public function index()
    {
        //
		//$languages = Language::find()->orderBy('sort_order', 'desc')->get();
//		$languages = Language::find('all')->orderBy('sort_order', 'desc')->get();
		$languages = DB::table('languages')->orderBy('sort_order', 'desc')->get();
		return view('Employee.index',compact('languages'));
    }
}
