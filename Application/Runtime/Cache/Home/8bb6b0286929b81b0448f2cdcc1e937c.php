<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>OPPO官方网站-欢迎注册OPPO.COM</title>
	<link rel="stylesheet" type="text/css" href="/web_oppo/Public/Home/css/register.css">
	<script type="text/javascript" src="/web_oppo/Public/Home/js/jquery.js"></script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="left">
				<img src="/web_oppo/Public/Home/image/Register/logo_h.png" class="left_img_1">
				<div class="divider"></div>
				<span>注册帐号</span>
			</div>

			<div class="right">
				<a href="/web_oppo/index.php/Home/Login/index">登录</a>
				<div class="divider"></div>
				<a href="/web_oppo/index.php/Home/Index/index">MY OPPO</a>
			</div>
		</div>
	</div>
	<div class="body_1">
		<div class="container">
			<div class="body_1_header">
				<span id="body_1_header_for_header">欢迎注册</span>
				<span id="body_1_header_for_normal">(如已有帐号，请</span>
				<a href="/web_oppo/index.php/Home/Login/index">点此登录</a>
				<span id="body_1_header_for_normal">)</span>
			</div>
			<form>
				<div class="body_1_form_1">
					<span class="form_left_span" id="form_left_span1">登录名:</span>
					<input type="text" placeholder="手机/邮箱">
					<span id="form_1_info_1">(目前仅支持移动、联通手机号码段)</span>
				</div>
				<div class="body_1_form_2">
					<span class="form_left_span" id="form_left_span2">登录密码:</span>
					<input type="password" placeholder="6~16位数字、字母或字符组合的密码" maxlength="16">
				</div>
				<div class="body_1_form_3">
					<span class="form_left_span" id="form_left_span3">确认密码:</span>
					<input type="password" placeholder="重复输入密码" maxlength="16">
				</div>
				<div class="body_1_form_4">
					<span class="form_left_span">图片验证码:</span>
					<input type="text" placeholder="验证码" id="body_1_form_4_input">
					<img src="#">
				</div>
				<div class="body_1_form_5">
					<img src="/web_oppo/Public/Home/image/Register/checkboxX.png">
					<span>我已阅读并同意</span>
					<a href="#">《OPPO服务协议》</a>
				</div>
				<button type="submit" class="submit">同意协议并注册</button>
			</form>
		</div>
	</div>
	<div class="bottom">
		
	</div>
</body>
<script type="text/javascript" src="/web_oppo/Public/Home/js/Register/index.js"></script>
</html>