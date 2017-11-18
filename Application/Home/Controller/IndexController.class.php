<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class IndexController extends Controller {
    public function content(){
        $this -> display();
    }
    public function index(){
        if(session('admin_name')){
            $role_id = session('admin_role');
            $admin_id = session('admin_id');
            $admin_name = session('admin_name');
            if($admin_name == 'admin'){
                $authinfoA = D('auth')
                    ->where(array('auth_level'=>0))
                    ->select();
                $authinfoB = D('auth')
                    ->where(array('auth_level'=>1))
                    ->select();
            }else{
                $roleinfo = D('role')->find($role_id);
                $authids = $roleinfo['role_auth_ids'];
                $authinfoA = D('auth')
                    ->where(array('auth_level'=>0,'auth_id'=>array('in',$authids)))
                    ->select();
                $authinfoB = D('auth')
                    ->where(array('auth_level'=>1,'auth_id'=>array('in',$authids)))
                    ->select();
            }
            $this ->assign('authinfoA',$authinfoA);
            $this ->assign('authinfoB',$authinfoB);
            $this -> display();
        }else{
            $this->redirect('user/login', array(), 0, "");
        }
    }
}