<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>运行管理</title>
    <style>
        #iframeHeader{
            width: 100%;
            height: 100px;
        }
        #iframeContent{
            width: 100%;
            height: 800px;
        }
    </style>
<body>
<div id="index">
    <iframe id="iframeHeader" name="iframeTop" frameborder="0" scrolling="no" src="/index.php/Home/Index/header"></iframe>
    <iframe id="iframeContent" name="iframeContent" scrolling="no" frameborder="0" src="/index.php/Home/run/index"></iframe>
</div>
</body>
</html>