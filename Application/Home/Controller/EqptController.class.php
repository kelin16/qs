<?php
namespace Home\Controller;
use Home\Model\SocketModel;
use Think\Controller;

class EqptController extends Controller
{

    public function temp(){
        $Socket = new SocketModel();
        $temp = $Socket->temp();
        echo $temp."℃";
}
    public function index(){
        $this-> display();
    }
    public function eqptLeft(){
        $this-> display();
    }
    public function eqptRightSearch(){
            $this-> display();
        }
    public function eqptRightMes(){
        $cdt['smid'] = I('get.smid');
        $cdt['layer_name'] = I('get.layer_name');
        $info = D('eqpts')
            ->where($cdt)
            ->select();
        $this -> assign('info',$info);
        $this-> display();
    }
    public function eqptBottom(){
            $this-> display();
        }
    public function socket(){
        $Socket = new SocketModel();
        $Socket->socket();
    }
}