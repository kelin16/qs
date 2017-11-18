<?php if (!defined('THINK_PATH')) exit(); if(C('LAYOUT_ON')) { echo ''; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{  background: #888888; font-family: '微软雅黑'; color: #fff; font-size: 16px;text-align: center}
.system-message{ padding: 24px 48px; }
.system-message h1{ font-size: 80px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message .jump{ padding-top: 10px;margin-bottom: 20px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
    #wait{
        font-size:46px;
    }
#href{
    display: inline-block;
    margin-right: 10px;
    font-size: 16px;
    line-height: 18px;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    border: 0 none;
    background-color: #8B0000;
    padding: 10px 20px;
    color: #fff;
    font-weight: bold;
    border-color: transparent;
    text-decoration:none;
}
</style>
</head>
<body>
<div class="system-message">
<?php if(isset($message)): ?><br>
    <br>
    <br>
<p class="success"><?php echo($message); ?></p>
<?php else: ?>
    <br>
    <br>
    <br>
<p class="error"><?php echo($error); ?></p><?php endif; ?>
<p class="detail"></p>
<p class="jump">
等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
    <br>
    <a id="href" href="<?php echo($jumpUrl); ?>">立即跳转</a>
</p>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>