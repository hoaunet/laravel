<?php

namespace App\Http\Controllers;

use App\Company;
use App\Language;
use DB;
use App\Career;
use App\Province;
use App\Salary;
use App\Article;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    //
     public function index()
    {
        //
		//$languages = Language::find()->orderBy('sort_order', 'desc')->get();
		$languages = DB::table('languages')->orderBy('sort_order', 'desc')->get();
		$careers        = Career::where('status', '=', '1')->orderBy('career_name', 'asc')->get();
        $child_careers  = Career::where([['status', '=', '1'],['parent_id', '<>', '0']])->orderBy('career_name', 'asc')->get();
        $provinces      = Province::where('status', '=', '1')->orderBy('province_name', 'asc')->get();
        $salaries       = Salary::where('is_active', '=', '1')->orderBy('name', 'asc')->get();
        $articles       = Article::where([['isactive', '=', '1'],['category_id', '=', '3']])->orderBy('created', 'desc')->get();
		return view('Employee.index',compact('careers','provinces','salaries','articles','child_careers','languages'));
    }
	 public function detail(Employee $employee)
     {
        $careers        = Career::where('status', '=', '1')->orderBy('career_name', 'asc')->get();

        $provinces      = Province::where('status', '=', '1')->orderBy('province_name', 'asc')->get();
        $salaries       = Salary::where('is_active', '=', '1')->orderBy('name', 'asc')->get();
        $articles       = Article::where([['isactive', '=', '1'],['category_id', '=', '3']])->orderBy('created', 'desc')->get(); 
         return view('Employee/detail',compact('careers','provinces','salaries','articles'));
     }
}
