<?php

namespace App\Http\Controllers;

use DB;
use App\Employment;
use App\Career;
use App\Province;
use App\Salary;
use App\Article;
use App\Experience;
use App\Degree;

use Illuminate\Http\Request;

class EmploymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Employment $employment)
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
        return view('Employment/index',compact('careers','provinces','salaries','articles','child_careers','languages','experiences','degrees'));
    }

    public function detail($id=null)
    {
        $careers        = Career::where('status', '=', '1')->orderBy('career_name', 'asc')->get();
        $provinces      = Province::where('status', '=', '1')->orderBy('province_name', 'asc')->get();
        $salaries       = Salary::where('is_active', '=', '1')->orderBy('name', 'asc')->get();
        $articles       = Article::where([['isactive', '=', '1'],['category_id', '=', '3']])->orderBy('created', 'desc')->get();
        $employments = DB::table('companyusers')
            ->join('employments', 'companyusers.id', '=', 'employments.company_id')
            ->join('companies', 'companies.id', '=', 'companyusers.company_id')
            ->select('companies.*', 'employments.*', 'companyusers.user_id')->where('employments.id', '=', $id)->orderBy('employments.created', 'desc')
            ->first();
        return view('Employment/detail',compact('careers','provinces','salaries','articles','employments'));
    }
	
	public function viewcareer($id=null)
    {
        $careers        = Career::where('status', '=', '1')->orderBy('career_name', 'asc')->get();
        $provinces      = Province::where('status', '=', '1')->orderBy('province_name', 'asc')->get();
        $salaries       = Salary::where('is_active', '=', '1')->orderBy('name', 'asc')->get();
        $articles       = Article::where([['isactive', '=', '1'],['category_id', '=', '3']])->orderBy('created', 'desc')->get();
        $employments    = Employment::where('career_id',$id)->get();
        return view('Employment/career',compact('careers','provinces','salaries','articles','employments'));
    }
	public function viewcompany($id=null)
	{
		dd($id);
		return view('Employment/viewcompany');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function show(Employment $employment)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function edit(Employment $employment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employment $employment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employment $employment)
    {
        //
    }
}
