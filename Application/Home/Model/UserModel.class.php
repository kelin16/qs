<?php

//命名空间
namespace Home\Model;
use Think\Model;	//表示引入父类Model，引入Model的命名空间

//用户模型
class UserModel extends Model{
    //验证条件
    protected $_validate = array(
        array('user_name','require','用户名不能为空@~@'),
        array('password','require','密码不能为空'),
        array('verify','require','验证码不能为空！'),
    );
}