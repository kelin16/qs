<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/7
 * Time: 9:54
 */
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");

class UserController extends Controller{
    public function login(){
        if(IS_POST){
                $user = D('user');
            if (!$shuju = $user->create()){
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $msg =  $user->getError();
                $this->redirect('login', array(), 2,"$msg");
            }else{
                //校验验证码
                $vry = new \Think\Verify();
                if($vry -> check(I('post.verify'))){
                    $shuju['password'] = md5($shuju['password']);
                    //校验用户名、密码
                    $info = $user
                        ->where(array('user_name'=>$shuju['user_name'],'password'=>$shuju['password']))
                        ->find();
                        if($info !== null){
                            //校验用户是否被锁定
                            if($info["islock"]){
                            //持久化用户信息
                            session('admin_id',$info['user_id']);
                            session('admin_name',$info['user_name']);
                            session('admin_role',$info['role_id']); //持久化角色信息
                            //跳转到后台首页面
                            //redirect($url,$params=array(),$delay=0,$msg='')
                            $this -> redirect('index/index');
                            //$this -> success('登陆成功！',U('index/index'),1);
                            }else{
                                $this -> error('用户处于锁定状态，请联系管理员~',U('login'),10);
                            }
                        }else{
                            //$this->redirect('login', array(), 2,'用户名或密码错误，请重新登录~');
                            $this -> error('用户名或密码错误，请重新登录~',U('login'),1);
                        }

                }else{
                   // $this->redirect('login', array(), 2,'验证码错误，请重新登录~');
                    $this -> error('验证码错误，请重新输入~',U('login'),1);
                }
            }
        }else{
            $this -> display();
        }
    }
    function verifyImg(){
        $cfg = array(
            'fontSize'  =>  12,              // 验证码字体大小(px)
            'useCurve'  =>  false,            // 是否画混淆曲线
            'useNoise'  =>  false,            // 是否添加杂点
            'imageH'    =>  34,               // 验证码图片高度
            'useImgBg'  => true,             // 验证码背景图片
            'fontSize'  => 12,              // 验证码字体大小(px)
            'imageW'    =>  80,               // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
        );
        $very = new \Think\Verify($cfg);
        $very -> entry();
    }
    public function register(){
        if(IS_POST){
            $user = D('user');
            $rules = array(
                //array('verify','require','验证码必须！'), //默认情况下用正则进行验证
                array('user_name','require','用户名不能为空@~@'),
                array('password','require','密码不能为空'),
                array('user_name','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
                //array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
                array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
                array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
                array('email','require','邮箱不能为空',1),//
                array('email','email','email格式错误'),
            );
            if (!$shuju = $user->validate($rules)->create()){
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $msg =  $user->getError();
                $this->redirect('register', array(), 2,"$msg");
            }else{
                $shuju['created_at'] = Date('Y-m-d H:i:s');
                $shuju['password'] = md5($shuju['password']);
                if($user->add($shuju)){
                    $this -> success('注册成功,请登录邮箱激活账号',U('login'),1);
                }else{
                    $this -> error('注册失败',U('register'),1);
                }
            }
        }else{
            $this -> display();
        }
    }
    public function logout(){
        session(null);
        $this -> redirect('Index/index');
    }

}