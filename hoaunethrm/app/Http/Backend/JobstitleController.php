<?php 
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Backend\BackendController;
use Auth;
use App\Http\Models\JobstitleModel;
use Form;
use Input;
use Validator;
use URL;
use Session;
use Config;

class JobstitleController extends BackendController
{	
	
	public function index(){
		$data['companies'] =array(); 
        //$clsjobtitle      = new jobtitleModel();
        //$data['companies']    = $clsjobtitle->get_all();   
		return view('backend.jobtitle.index',$data);
	}

	public function getRegist(){
        $data =array();
        
		return view('backend.jobtitle.regist',$data);
	}

	public function postRegist()
    {
        $clsjobtitle      = new JobstitleModel();
        $inputs         = Input::all();
        $validator      = Validator::make($inputs, $clsjobtitle->Rules(), $clsjobtitle->Messages());

        if ($validator->fails()) {
            return redirect()->route('backend.jobtitle.regist')->withErrors($validator)->withInput();
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
        
        if ( $clsjobtitle->insert($dataInsert) ) {
            Session::flash('success', trans('common.msg_regist_success'));
        } else {
            Session::flash('danger', trans('common.msg_regist_danger'));
        }
        return redirect()->route('backend.jobtitle.index');
    }

    /**
     * 
     */
    public function getEdit($id)
    {
        $clsjobtitle      = new JobstitleModel();
        $data['belong']  = $clsjobtitle->get_by_id($id);        
        return view('backend.jobtitle.edit', $data);
    }

    /**
     * 
     */
    public function postEdit($id)
    {
        $clsjobtitle      = new JobstitleModel();
        $inputs         = Input::all();
        $validator      = Validator::make($inputs, $clsjobtitle->Rules(), $clsjobtitle->Messages());
        if ($validator->fails()) {
            return redirect()->route('backend.jobtitle.edit', [$id])->withErrors($validator)->withInput();
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

        if ( $clsjobtitle->update($id, $dataUpdate) ) {
            Session::flash('success', trans('common.msg_edit_success'));
        } else {
            Session::flash('danger', trans('common.msg_edit_danger'));
        }
        return redirect()->route('backend.jobtitle.index');
    }

    /**
     * 
     */
    public function getDelete($id)
    {
        $clsjobtitle      = new JobstitleModel();
        $dataUpdate             = array(
            'last_date'         => date('Y-m-d H:i:s'),
            'last_kind'         => DELETE,
            'last_ipadrs'       => $_SERVER['REMOTE_ADDR'],
            'last_user'         => Auth::user()->u_id 
        );
        if ( $clsjobtitle->delete($id, $dataUpdate) ) {
            Session::flash('success', trans('common.msg_delete_success'));
        } else {
            Session::flash('danger', trans('common.msg_delete_danger'));
        }
        return redirect()->route('backend.jobtitle.index');
    }

    
}