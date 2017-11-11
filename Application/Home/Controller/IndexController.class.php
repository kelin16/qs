<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class IndexController extends Controller {
    public function header(){
        $this -> display();
    }
    public function content(){
        $this -> display();
    }
    public function index(){
        if(session('admin_name')){
                $this -> display();
        }else{
            $this->redirect('user/login', array(), 0, "");
        }
    }
}