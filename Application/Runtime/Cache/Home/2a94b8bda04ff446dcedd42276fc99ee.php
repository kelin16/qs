<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/Public/home/css/navigation.css">
    <meta charset="utf-8" />
    <title>运行管理</title>
<body>
<div class="navBar shadow" style="z-index: 9999;position: relative">
    <div class="navLeft">
        <div>
            <img src="/Public/home/images/run/u142.png" alt="logo" style="width:30px;height:25px;padding-top:9px; margin-left:5px;float:left">
            <div class="title">智慧管廊综合管理平台</div>
        </div>
    </div>
    <div class="nav">
        <ul>
            <?php if(is_array($authinfoA)): foreach($authinfoA as $key=>$v): ?><li>
                    <?php if($v["auth_c"] == '#'): ?><a href="#"><?php echo ($v["auth_name"]); ?></a>
                        <?php else: ?><a href="/index.php/Home/<?php echo ($v["auth_c"]); ?>/<?php echo ($v["auth_a"]); ?>" target="contentFrame"><?php echo ($v["auth_name"]); ?></a><?php endif; ?>
                    <ul>
                        <?php if(is_array($authinfoB)): foreach($authinfoB as $key=>$vv): if(($vv["auth_pid"]) == $v["auth_id"]): ?><li>
                                    <a href="/index.php/Home/<?php echo ($vv["auth_c"]); ?>/<?php echo ($vv["auth_a"]); ?>">
                                        <?php echo ($vv["auth_name"]); ?>
                                        <iframe src="" frameborder="0"></iframe>
                                    </a>
                                </li><?php endif; endforeach; endif; ?>
                    </ul>
                </li><?php endforeach; endif; ?>
        </ul>
    </div>
    <div class="navRight ">
        <img src="/Public/home/images/run/u144.png" alt="" style="margin-left:5px;position: relative">&nbsp;你好！<?php echo (session('admin_name')); ?>
    </div>
    <div class="setting">
        <a href="/index.php/Home/setting/setting" target="iframeContent" >
            <img src="/Public/home/images/run/u148.png" alt="" >
        </a>
    </div>
    <div class="logout">
        <a href="/index.php/Home/User/logout"  target="_parent">
            退出
        </a>
    </div>
</div>
<!--导航条结束-->
        <iframe height="900" width="100%" border="0" frameborder="0" src="<?php echo U('run/index');?>" name="contentFrame" id="contentFrame" title="contentFrame"></iframe>
</body>
</html>