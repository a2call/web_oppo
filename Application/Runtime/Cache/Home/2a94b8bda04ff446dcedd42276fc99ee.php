<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>OPPO手机官网-OPPO智能手机 OPPO最新款智能手机在线订购</title>
	<link rel="stylesheet" type="text/css" href="/web_oppo/Public/Home/css/index.css">
	<script type="text/javascript" src="/web_oppo/Public/Home/js/jquery.js"></script>
</head>
<body>
	<div class="index_header">
		<div class="index_header_container">
			<div class="left">
				<div class="left_left">
					<a href="#">
						<img src="/web_oppo/Public/Home/image/Index/i-h-sinawb.png" id="index_header_left_image_1">
					</a>
					<a href="#">
						<img src="/web_oppo/Public/Home/image/Index/i-h-qqwb.png" id="index_header_left_image_2">
					</a>
				</div>
				<span>4001-666-888</span>
			</div>
			<?php if(!isset($_SESSION['id'])): ?><div class="right">
					<a href="/web_oppo/index.php/Home/Login/index">登录</a>
					<div class="right_diver"></div>
					<a href="/web_oppo/index.php/Home/Register/index">注册</a>
					<div class="right_diver"></div>
					<a>积分兑换</a>
					<div class="right_diver"></div>
					<a>帮助中心</a>
					<div class="right_diver"></div>
					<div class="right_for_image">
						<img src="/web_oppo/Public/Home/image/Index/i-h-gwc.png">
					</div>
					<a>购物车</a>
				</div>
			<?php else: ?>
				<div class="right_1">
					<a href="#"><?php echo ($_SESSION['username']); ?></a>
					<div class="right_diver"></div>
					<a href="#" id="index_header_right_1_logout">退出</a>
					<div class="right_diver"></div>
					<a href="#">积分兑换</a>
					<div class="right_diver"></div>
					<a href="#">帮助中心</a>
					<div class="right_diver"></div>
					<a href="#">我的订单</a>
					<div class="right_diver"></div>
					<a href="#">MY OPPO</a>
					<div class="right_diver"></div>
					<div class="right_for_image">
						<img src="/web_oppo/Public/Home/image/Index/i-h-gwc.png">
					</div>
					<a>购物车</a>
				</div><?php endif; ?>
		</div>
	</div>
	<div class="index_header2">
		<div class="container">
			<div class="left">
				<img src="/web_oppo/Public/Home/image/Index/logo.png">
			</div>
			<div class="right">
				<a href="#">首页</a>
				<a href="#">手机</a>
				<a href="#">配件</a>
				<a href="#">服务</a>
				<a href="#">体验店</a>
				<a href="#">软件商店</a>
				<a href="#">ColorOS</a>
				<a href="#">社区</a>
			</div>
		</div>
	</div>
	<div class="index_third">
		
	</div>
</body>
<script type="text/javascript" src="/web_oppo/Public/Home/js/Index/index.js"></script>
</html>