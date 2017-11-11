<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/12
 * Time: 9:49
 */
namespace Home\Model;
use Think\Model;

//前台 socket 接受发送模拟模型

class SocketModel  extends Model{
    //模拟生成随机温度等数据
    //温度最大整数
    public $temp_max = 35;
    //温度最小整数
    public $temp_min = 33;
    //温度小数
    public $decimal1;
    public $decimal2;
    //温度整数
    public $digits;
    //随机温度
    public $temps;
   /* function __initialize($temp_min,$temp_max)
    {
        $this->temp_max = $temp_max;
        $this->temp_min = $temp_min;
    }*/
    public function temp(){
        $this->digits = rand($this->temp_min,$this->temp_max);
        $this->decimal1 = rand(0,9);
        $this->decimal2 = rand(0,9);
        $this->temps = $this->digits.".".$this->decimal1.$this->decimal2;
        return $this->temps;
    }


/*$sock = new SocketModel(30.35);
$sock->temp();*/
    public function Socket()
    {
        $address = '192.168.1.191';
        $service_port = 10005;

// 创建并返回一个套接字（通讯节点）
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if ($socket === false) {
           // echo "socket_create() failed, reason: ".socket_strerror(socket_last_error())."\n";
        }

        //echo "Attempting to connect to '$address' on port '$service_port'...";
// 发起socket连接请求
        $result = socket_connect($socket, $address, $service_port);
        if($result === false) {
            echo "socket_connect() failed, reason: ".socket_strerror(socket_last_error($socket))."\n";
        } else {
            //echo "Connect success. \n";
        }

        $input = "your motherfucker"."\n";

// 向socket服务器发送消息
        socket_write($socket, $input, strlen($input));
        //echo  "Client send success \n";

        //echo "Reading response:\n";
// 读取socket服务器发送的消息
        while ($out = socket_read($socket, 8192)) {
            echo $out;
        }

        //分流处理

        echo PHP_EOL;
        socket_close($socket); // 关闭socket连接
    }
}