<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>OPPO官方网站-欢迎登录OPPO.COM</title>
	<link rel="stylesheet" type="text/css" href="/web_oppo/Public/Home/css/login.css">
	<script type="text/javascript" src="/web_oppo/Public/Home/js/jquery.js"></script>
	<script type="text/javascript" src="/web_oppo/Public/Home/js/jquery.md5.js"></script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="left">
				<img src="/web_oppo/Public/Home/image/Register/logo_h.png" class="left_img_1">
				<div class="divider"></div>
				<span>欢迎登录</span>
			</div>

			<div class="right">
				<a href="/web_oppo/index.php/Home/Index/index">OPPO官网</a>
				<div class="divider"></div>
				<a href="#">OPPO社区</a>
			</div>
		</div>
	</div>

	<div class="body_1">
		<div class="container">
			<div class="left">
				<img src="/web_oppo/Public/Home/image/Login/login_left_big.png">
			</div>

			<div class="right">
				<form>
					<div class="line1">
						<span>欢迎登录</span>
					</div>
					<div class="line2">
						<input type="text" placeholder="手机/邮箱/会员名" id="form_line2_input" status="0">
					</div>
					<div class="line3">
						<input type="password" placeholder="登录密码" id="form_line3_input" status="0">
					</div>
					<div class="line4">
						<img src="/web_oppo/Public/Home/image/Register/checkboxX.png">
						<span>十天内免登录</span>
						<a href="#">忘记密码?</a>
					</div>
					<div class="line5">
						<input type="button" value="登录" id="form_submit">
					</div>
					<div class="line_5_for_add">
						<img src="/web_oppo/Public/Home/image/Register/ex.png" id="line_5_for_add_img">
						<span id="line_5_for_add_info1">用户名密码不正确</span>
						<span id="line_5_for_add_info2">用户名或密码填写不完整</span>
					</div>
					<div class="line6">
						<span>其他帐号登录:</span>
						<img src="/web_oppo/Public/Home/image/Login/qq.png">
						<img src="/web_oppo/Public/Home/image/Login/xinlang.png">
						<img src="/web_oppo/Public/Home/image/Login/zhifubao.png">
						<a href="/web_oppo/index.php/Home/Register/index">免费注册</a>
					</div>
					<div class="line7">
						<span>OPPO社区帐号、OPPO乐园帐号均可登录</span>
					</div>
				</form>
			</div>
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
<script type="text/javascript" src="/web_oppo/Public/Home/js/Login/index.js"></script>
</html>