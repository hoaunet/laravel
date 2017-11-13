<?php 
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Backend\BackendController;
use Auth;
use App\Http\Models\jobModel;
use Form;
use Input;
use Validator;
use URL;
use Session;
use Config;

class JobController extends BackendController
{
	
	/*public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }*/
	
	public function index(){
		$data['companies'] =array(); 
        //$clsjob      = new jobModel();
      //  $data['companies']    = $clsjob->get_all();   
		return view('backend.job.index',$data);
	}

	public function getRegist(){
        $data =array();
        
		return view('backend.job.regist',$data);
	}

	public function postRegist()
    {
        $clsjob      = new jobModel();
        $inputs         = Input::all();
        $validator      = Validator::make($inputs, $clsjob->Rules(), $clsjob->Messages());

        if ($validator->fails()) {
            return redirect()->route('backend.job.regist')->withErrors($validator)->withInput();
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
        
        if ( $clsjob->insert($dataInsert) ) {
            Session::flash('success', trans('common.msg_regist_success'));
        } else {
            Session::flash('danger', trans('common.msg_regist_danger'));
        }
        return redirect()->route('backend.job.index');
    }

    /**
     * 
     */
    public function getEdit($id)
    {
        $clsjob      = new jobModel();
        $data['belong']  = $clsjob->get_by_id($id);        
        return view('backend.job.edit', $data);
    }

    /**
     * 
     */
    public function postEdit($id)
    {
        $clsjob      = new jobModel();
        $inputs         = Input::all();
        $validator      = Validator::make($inputs, $clsjob->Rules(), $clsjob->Messages());
        if ($validator->fails()) {
            return redirect()->route('backend.job.edit', [$id])->withErrors($validator)->withInput();
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

        if ( $clsjob->update($id, $dataUpdate) ) {
            Session::flash('success', trans('common.msg_edit_success'));
        } else {
            Session::flash('danger', trans('common.msg_edit_danger'));
        }
        return redirect()->route('backend.job.index');
    }

    /**
     * 
     */
    public function getDelete($id)
    {
        $clsjob      = new jobModel();
        $dataUpdate             = array(
            'last_date'         => date('Y-m-d H:i:s'),
            'last_kind'         => DELETE,
            'last_ipadrs'       => $_SERVER['REMOTE_ADDR'],
            'last_user'         => Auth::user()->u_id 
        );
        if ( $clsjob->delete($id, $dataUpdate) ) {
            Session::flash('success', trans('common.msg_delete_success'));
        } else {
            Session::flash('danger', trans('common.msg_delete_danger'));
        }
        return redirect()->route('backend.job.index');
    }

    
}