<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employment;
use App\Career;
use App\Province;
use App\Salary;
use App\Article;
use App\Experience;
use App\Degree;
use App\Level;
use App\Typework;
use App\Companysize;

class EmployerController extends Controller
{
    //
      public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index()
    {
        //
		$languages      = DB::table('languages')->orderBy('sort_order', 'desc')->get();
		$degrees        = Degree::where('is_active', '=', '1')->orderBy('name', 'asc')->get();
		$experiences    = Experience::where('isactive', '=', '1')->orderBy('id', 'asc')->get();
		$careers        = Career::where('status', '=', '1')->orderBy('career_name', 'asc')->get();
        $child_careers  = Career::where([['status', '=', '1'],['parent_id', '<>', '0']])->orderBy('career_name', 'asc')->get();
        $provinces      = Province::where('status', '=', '1')->orderBy('province_name', 'asc')->get();
        $salaries       = Salary::where('is_active', '=', '1')->orderBy('name', 'asc')->get();
        $articles       = Article::where([['isactive', '=', '1'],['category_id', '=', '3']])->orderBy('created', 'desc')->get(); 
        return view('Employer/index',compact('careers','provinces','salaries','articles','child_careers','languages','experiences','degrees'));
    }
    public function detail($id =null)
    {

    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $languages      = DB::table('languages')->orderBy('sort_order', 'desc')->get();
        $typeworks      = Typework::where('isactive', '=', '1')->orderBy('name', 'asc')->get();
        $provinces      = Province::where('status', '=', '1')->orderBy('province_name', 'asc')->get();
        $levels        = Level::where('is_active', '=', '1')->orderBy('level_name', 'asc')->get();
        $careers        = Career::where('status', '=', '1')->orderBy('career_name', 'asc')->get();
        $salaries       = Salary::where('is_active', '=', '1')->orderBy('name', 'asc')->get();
        $experiences    = Experience::where('isactive', '=', '1')->orderBy('id', 'asc')->get();
       
        return view('Employer/create',compact('careers','provinces','levels','salaries','typeworks','experiences','degrees','languages'));
    }
    public function application()
    {

         return view('Employer/application');
    }
    public function profilecompany()
    {
        $languages      = DB::table('languages')->orderBy('sort_order', 'desc')->get();
        $typeworks      = Typework::where('isactive', '=', '1')->orderBy('name', 'asc')->get();
        $provinces      = Province::where('status', '=', '1')->orderBy('province_name', 'asc')->get();
        $levels        = Level::where('is_active', '=', '1')->orderBy('level_name', 'asc')->get();
        $careers        = Career::where('status', '=', '1')->orderBy('career_name', 'asc')->get();
        $salaries       = Salary::where('is_active', '=', '1')->orderBy('name', 'asc')->get();
        $experiences    = Experience::where('isactive', '=', '1')->orderBy('id', 'asc')->get();
        $degrees        = Degree::where('is_active', '=', '1')->orderBy('name', 'asc')->get();
        $degrees        = Degree::where('is_active', '=', '1')->orderBy('name', 'asc')->get();
        $companysizes        = Companysize::where('isactive', '=', '1')->orderBy('name', 'asc')->get();
        $id=1;
        $companies = DB::table('companyusers')
            ->join('users', 'users.id', '=', 'companyusers.user_id')
            ->leftjoin('userinfos', 'userinfos.user_id', '=', 'companyusers.user_id')
            ->join('companies', 'companies.id', '=', 'companyusers.company_id')
            ->select('companies.*','companies.name as company_name','companies.address as company_address','companies.contact_phone as company_contact_phone', 'users.*')->where('companyusers.user_id', '=', $id)
            ->first();    
        return view('Employer/profile',compact('careers','provinces','levels','salaries','typeworks','experiences','degrees','languages','companies','companysizes'));
    }
    public function storecompany(Request $request)
    {
        echo  $request->input('company_name');
        dd($request->input);

        //
    }
}
