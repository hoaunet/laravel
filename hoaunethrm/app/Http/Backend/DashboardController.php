<?php 
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Backend\BackendController;
use Auth;

use Input;
use Validator;
use Session;
use Config;

class DashboardController extends BackendController
{	
	
	public function index(){		         
		return view('backend.dashboard.index');
	}
	
}