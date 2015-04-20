<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>OPPO官方网站-欢迎注册OPPO.COM</title>
	<link rel="stylesheet" type="text/css" href="/web_oppo/Public/Home/css/register.css">
	<script type="text/javascript" src="/web_oppo/Public/Home/js/jquery.js"></script>
	<script type="text/javascript" src="/web_oppo/Public/Home/js/jquery.md5.js"></script>
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
			<form method="post" action="/web_oppo/index.php/Home/Register/insert">
				<div class="body_1_form_1">
					<span class="form_left_span" id="form_left_span1">登录名:</span>
					<input type="text" placeholder="手机/邮箱" id="body_1_form_1_input" maxlength="16" name="username">
					<span id="form_1_info_1">(目前仅支持移动、联通手机号码段)</span>
					<img id="form_1_info_1_img" src="/web_oppo/Public/Home/image/Register/ex.png">
					<span id="form_1_info_1_1">请输入邮箱/手机号码</span>
					<span id="form_1_info_1_2">用户名已存在</span>
					<span id="form_1_info_1_3">请输入正确的邮箱/手机号码</span>
				</div>
				<div class="body_1_form_2">
					<span class="form_left_span" id="form_left_span2">登录密码:</span>
					<input type="password" placeholder="6~32位数字、字母或字符组合的密码" maxlength="32" name="passwd" id="body_1_form_2_input">
					<img id="form_1_info_2_img" src="/web_oppo/Public/Home/image/Register/ex.png">
					<span id="form_1_info_2_1">请输入注册密码</span>
					<span id="form_1_info_2_2">请输入6~32位的密码</span>
				</div>
				<div class="body_1_form_3">
					<span class="form_left_span" id="form_left_span3">确认密码:</span>
					<input type="password" placeholder="重复输入密码" maxlength="32" id="body_1_form_3_input">
					<img id="form_1_info_3_img" src="/web_oppo/Public/Home/image/Register/ex.png">
					<span id="form_1_info_3_1">请输入密码</span>
					<span id="form_1_info_3_2">两次输入的密码不一致</span>
				</div>
				<div class="body_1_form_4">
					<span class="form_left_span">图片验证码:</span>
					<input type="text" placeholder="验证码" id="body_1_form_4_input">
					<img src="/web_oppo/index.php/Home/Register/VerifyCode" id="body_1_form_4_img">
					<img src="/web_oppo/Public/Home/image/Register/shuaxin.png" id="body_1_form_4_change">
				</div>
				<div class="body_1_form_5">
					<img src="/web_oppo/Public/Home/image/Register/checkboxX.png" id="body_1_form_5_image" status="0">
					<span>我已阅读并同意</span>
					<a href="#">《OPPO服务协议》</a>
				</div>
				<input type="button" id="submit" value="同意协议并注册">
			</form>
		</div>
	</div>
	<div class="bottom">
		<div class="container">
			<div class="left">
				<img src="/web_oppo/Public/Home/image/Register/logo_f.png">
				<span>© 2005 - 2015 广东欧珀电子工业有限公司 版权所有 (</span>
				<a href="#">粤ICP备 08130115 号</a>
				<span>)</span>
			</div>
			<div class="right">
				<a href="#">版权说明</a>
				<a href="#">使用协议</a>
				<a href="#">网站地图</a>
				<a href="#">友情链接</a>
				<a href="#">联系我们</a>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="/web_oppo/Public/Home/js/Register/index.js"></script>
</html>