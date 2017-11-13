<?php 
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Backend\BackendController;
use Auth;
use App\Http\Models\SkillModel;
use Form;
use Input;
use Validator;
use URL;
use Session;
use Config;

class SkillController extends BackendController
{
	
	/*public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }*/
	
	public function index(){
		$data['companies'] =array(); 
        //$clsskill      = new SkillModel();
        //$data['companies']    = $clsskill->get_all();   
		return view('backend.skill.index',$data);
	}

	public function getRegist(){
        $data =array();
        
		return view('backend.skill.regist',$data);
	}

	public function postRegist()
    {
        $clsskill      = new SkillModel();
        $inputs         = Input::all();
        $validator      = Validator::make($inputs, $clsskill->Rules(), $clsskill->Messages());

        if ($validator->fails()) {
            return redirect()->route('backend.skill.regist')->withErrors($validator)->withInput();
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
        return redirect()->route('backend.skill.index');
    }

    /**
     * 
     */
    public function getEdit($id)
    {
        $clsskill      = new JobstitleModel();
        $data['belong']  = $clsskill->get_by_id($id);        
        return view('backend.skill.edit', $data);
    }

    /**
     * 
     */
    public function postEdit($id)
    {
        $clsskill      = new JobstitleModel();
        $inputs         = Input::all();
        $validator      = Validator::make($inputs, $clsskill->Rules(), $clsskill->Messages());
        if ($validator->fails()) {
            return redirect()->route('backend.skill.edit', [$id])->withErrors($validator)->withInput();
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
        return redirect()->route('backend.skill.index');
    }

    /**
     * 
     */
    public function getDelete($id)
    {
        $clsskill      = new JobstitleModel();
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
        return redirect()->route('backend.skill.index');
    }

    
}