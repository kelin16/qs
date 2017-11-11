<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!-- 登录主体部分start -->
<div class="login w990 bc mt10 regist">
    <div class="login_hd">
        <h2>用户注册</h2>
        <b></b>
    </div>
    <div class="login_bd">
        <div class="login_form fl">
            <form action="/index.php/Home/User/regist.html" method="post">
                <ul>
                    <li><label for="">用户名：</label>
                        <input type="text" class="txt" name="user_name" />
                        <p>3-20位字符，可由中文、字母、数字和下划线组成</p>
                    </li>
                    <li><label for="">密码：</label>
                        <input type="password" class="txt" name="password" />
                        <p>6-20位字符，可使用字母、数字和符号的组合，不建议使用纯数字、纯字母、纯符号</p>
                    </li>
                    <li><label for="">确认密码：</label>
                        <input type="password" class="txt" name="password2" />
                        <p> <span>请再次输入密码</span></p>
                    </li>
                    <li><label for="">邮箱：</label>
                        <input type="text" class="txt" name="email" />
                    </li>
                    <li><label for="">&nbsp;</label>
                        <input type="submit" value="提交" class="login_btn" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
<!-- 登录主体部分end -->

<div style="clear:both;"></div>

</body>
</html>