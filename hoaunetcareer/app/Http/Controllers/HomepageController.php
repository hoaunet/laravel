<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Language;
use App\Career;
use App\Province;
use App\Salary;
use App\Article;
use App\Employment;
use App\Company;


class HomepageController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }
	public function index()
    {
        //        
        $careers 		= Career::where('status', '=', '1')->orderBy('career_name', 'asc')->get();
        $child_careers  = Career::where([['status', '=', '1'],['parent_id', '<>', '0']])->orderBy('career_name', 'asc')->get();
        $provinces  	  = Province::where('status', '=', '1')->orderBy('province_name', 'asc')->get();
        $salaries   	   = Salary::where('is_active', '=', '1')->orderBy('name', 'asc')->get();
        $articles   	   = Article::where([['isactive', '=', '1'],['category_id', '=', '3']])->orderBy('created', 'desc')->get();

        $employment_hots = DB::table('companyusers')
            ->join('employments', 'companyusers.id', '=', 'employments.companyuser_id')
            ->join('companies', 'companies.id', '=', 'companyusers.company_id')
            ->select('companies.*', 'employments.*', 'companyusers.user_id')->where('ishot', '=', '1')
            ->get();
		$employments = DB::table('companyusers')
            ->join('employments', 'companyusers.id', '=', 'employments.companyuser_id')
            ->join('companies', 'companies.id', '=', 'companyusers.company_id')
            ->select('companies.*', 'employments.*', 'companyusers.user_id')->orderBy('employments.created_at', 'desc')
            ->get();	
       /* $employments    = Employment::with(['votes', 'comments' => function ($query) {
								    $query->where('content', 'like', 'foo%');
								}])->get();*/
		//$employments 	= Employment::where('expire_day', '>', 'now()')->orderBy('created', 'desc')->get();
		return view('homepage',compact('careers','provinces','salaries','articles','child_careers','employments','employment_hots'));
    }
}
