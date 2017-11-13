<?php 
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Backend\BackendController;
use Auth;
use App\Http\Models\LanguageModel;
use Form;
use Input;
use Validator;
use URL;
use Session;
use Config;

class LanguageController extends BackendController
{
	
	/*public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }*/
	
	public function index(){
		$data['companies'] =array(); 
        //$clsskill      = new LanguageModel();
        //$data['companies']    = $clsskill->get_all();   
		return view('backend.loan.index',$data);
	}

	public function getRegist(){
        $data =array();
        
		return view('backend.loan.regist',$data);
	}

	public function postRegist()
    {
        $clsskill      = new LanguageModel();
        $inputs         = Input::all();
        $validator      = Validator::make($inputs, $clsskill->Rules(), $clsskill->Messages());

        if ($validator->fails()) {
            return redirect()->route('backend.loan.regist')->withErrors($validator)->withInput();
        }
        
        $dataInsert             = array(
            'belong_name'       => Input::get('belong_name'),
            'belong_sort'       => $max + 1,            
            'belong_code'       => Input::get('belong_code'),
            'last_date'         => date('Y-m-d H:i:s'),
            'last_kind'         => INSERT,
            'last_ipadrs'       => CLIENT_IP_ADRS,
            'last_user'         => Auth::user()->u_id            
        );
        
        if ( $clsskill->insert($dataInsert) ) {
            Session::flash('success', trans('common.msg_regist_success'));
        } else {
            Session::flash('danger', trans('common.msg_regist_danger'));
        }
        return redirect()->route('backend.loan.index');
    }

    /**
     * 
     */
    public function getEdit($id)
    {
        $clsskill      = new LanguageModel();
        $data['belong']  = $clsskill->get_by_id($id);        
        return view('backend.loan.edit', $data);
    }

    /**
     * 
     */
    public function postEdit($id)
    {
        $clsskill      = new LanguageModel();
        $inputs         = Input::all();
        $validator      = Validator::make($inputs, $clsskill->Rules(), $clsskill->Messages());
        if ($validator->fails()) {
            return redirect()->route('backend.loan.edit', [$id])->withErrors($validator)->withInput();
        }
       
        // update
        $dataUpdate = array(
            'belong_name'       => Input::get('belong_name'),
            'belong_code'       => Input::get('belong_code'),
            'last_date'         => date('Y-m-d H:i:s'),
            'last_kind'         => UPDATE,
            'last_ipadrs'       => $_SERVER['REMOTE_ADDR'],
            'last_user'         => Auth::user()->u_id 
        );

        if ( $clsskill->update($id, $dataUpdate) ) {
            Session::flash('success', trans('common.msg_edit_success'));
        } else {
            Session::flash('danger', trans('common.msg_edit_danger'));
        }
        return redirect()->route('backend.loan.index');
    }

    /**
     * 
     */
    public function getDelete($id)
    {
        $clsskill      = new LanguageModel();
        $dataUpdate             = array(
            'last_date'         => date('Y-m-d H:i:s'),
            'last_kind'         => DELETE,
            'last_ipadrs'       => $_SERVER['REMOTE_ADDR'],
            'last_user'         => Auth::user()->u_id 
        );
        if ( $clsskill->delete($id, $dataUpdate) ) {
            Session::flash('success', trans('common.msg_delete_success'));
        } else {
            Session::flash('danger', trans('common.msg_delete_danger'));
        }
        return redirect()->route('backend.loan.index');
    }

    
}