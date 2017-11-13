<?php 
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Backend\BackendController;
use Auth;
use App\Http\Models\CompanyModel;
use App\Http\Models\TimezoneModel;
use App\Http\Models\CountryModel;
use Form;
use Input;
use Validator;
use URL;
use Session;
use Config;

class CompanyController extends BackendController
{
	
	/*public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }*/
	
	public function index(){
		$data['companies']    = array(); 
        $clsCompany           = new CompanyModel();
        $data['companies']    = $clsCompany->get_all();   
        $data['company_type'] = Config::get('constants.COMPANY_TYPE');
		return view('backend.company.index',$data);
	}

	public function getRegist(){
        $data =array();
        $clsTimezone          = new TimezoneModel();
        $data['time_zones']   = $clsTimezone->get_all();
        $clsCountry           = new CountryModel();
        $data['countries']    = $clsCountry->get_all();
        $data['company_types']= Config::get('constants.COMPANY_TYPE');
		return view('backend.company.regist',$data);
	}

	public function postRegist()
    {
        $clsCompany      = new CompanyModel();
        $inputs         = Input::all();
        $validator      = Validator::make($inputs, $clsCompany->Rules(), $clsCompany->Messages());

        if ($validator->fails()) {
            return redirect()->route('backend.company.regist')->withErrors($validator)->withInput();
        }
        
        $dataInsert = array(
                       'mc_title'          => Input::get('mc_title'),                      
                       'mc_description'    => Input::get('mc_description'),
                       'mc_address'        => Input::get('mc_address'),                      
                       'mc_type'           => Input::get('mc_type'),
                       'mc_country'        => Input::get('mc_country'),                      
                       'mc_parent'         => Input::get('mc_parent'),
                       'mc_timezone'       => Input::get('mc_timezone'),                      
                       'mc_heads'          => Input::get('mc_heads'),
                       'last_date'         => date('Y-m-d H:i:s'),
                       'last_kind'         => INSERT,
                       'last_ipadrs'       => CLIENT_IP_ADRS,
                       //'last_user'         => Auth::user()->u_id            
                       'last_user'         => 1            
                    );
        
        if ( $clsCompany->insert($dataInsert) ) {
            Session::flash('success', trans('common.msg_regist_success'));
        } else {
            Session::flash('danger', trans('common.msg_regist_danger'));
        }
        return redirect()->route('backend.company.index');
    }

    /**
     * 
     */
    public function getEdit($id)
    {
        $clsCompany           = new CompanyModel();
        $clsTimezone          = new TimezoneModel();
        $clsCountry           = new CountryModel();
        $data['company']      = $clsCompany->get_by_id($id);
        $data['time_zones']   = $clsTimezone->get_all();        
        $data['countries']    = $clsCountry->get_all();
        $data['company_types']= Config::get('constants.COMPANY_TYPE');              
        return view('backend.company.edit', $data);
    }

    /**
     * 
     */
    public function postEdit($id)
    {
        $clsCompany      = new CompanyModel();
        $inputs         = Input::all();
        $validator      = Validator::make($inputs, $clsCompany->Rules(), $clsCompany->Messages());
        if ($validator->fails()) {
            return redirect()->route('backend.company.edit', [$id])->withErrors($validator)->withInput();
        }
       
        // update
        $dataUpdate = array(
                        'mc_title'          => Input::get('mc_title'),                      
                       'mc_description'    => Input::get('mc_description'),
                       'mc_address'        => Input::get('mc_address'),                      
                       'mc_type'           => Input::get('mc_type'),
                       'mc_country'        => Input::get('mc_country'),                      
                       'mc_parent'         => Input::get('mc_parent'),
                       'mc_timezone'       => Input::get('mc_timezone'),                      
                       'mc_heads'          => Input::get('mc_heads'),
                       'last_date'         => date('Y-m-d H:i:s'),
                       'last_kind'         => UPDATE,
                       'last_ipadrs'       => $_SERVER['REMOTE_ADDR'],
                       'last_user'         => Auth::user()->u_id 
        );

        if ( $clsCompany->update($id, $dataUpdate) ) {
            Session::flash('success', trans('common.msg_edit_success'));
        } else {
            Session::flash('danger', trans('common.msg_edit_danger'));
        }
        return redirect()->route('backend.company.index');
    }

    /**
     * 
     */
    public function getDelete($id)
    {
        $clsCompany      = new CompanyModel();
        $dataUpdate             = array(
            'last_date'         => date('Y-m-d H:i:s'),
            'last_kind'         => DELETE,
            'last_ipadrs'       => $_SERVER['REMOTE_ADDR'],
            'last_user'         => Auth::user()->u_id 
        );
        if ( $clsCompany->delete($id, $dataUpdate) ) {
            Session::flash('success', trans('common.msg_delete_success'));
        } else {
            Session::flash('danger', trans('common.msg_delete_danger'));
        }
        return redirect()->route('backend.company.index');
    }

    
}