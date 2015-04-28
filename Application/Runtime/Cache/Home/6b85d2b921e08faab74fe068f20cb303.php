<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>『OPPO智能手机商城』OPPO最新手机大全_报价_参数_评测-OPPO智能手机官网</title>
	<link rel="stylesheet" type="text/css" href="/web_oppo/Public/Home/css/phone.css">
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
				<a href="/web_oppo/index.php/Home/Index/index">首页</a>
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
	<div class="index_header_3">
		<img src="/web_oppo/Public/Home/image/Phone/142491883858521.jpg">
	</div>

	<div class="index_four">
		<div class="container">
			<div class="index_four_left">
				<div class="index_four_top">
					<span>特殊筛选</span>
				</div>
				<div class="index_four_bottom">
					<ul>
						<li>
							<input type="radio" name="mobile_type" value="1">促销机型
						</li>
						<li>
							<input type="radio" name="mobile_type" value="2">旗舰机型
						</li>
					</ul>
				</div>
			</div>
			<div class="index_four_center">
				<div class="index_four_top">
					<span>网络制式</span>
				</div>
				<div class="index_four_bottom">
					<ul>
						<li>
							<input type="radio" name="network_type" value="1">移动3G
						</li>
						<li>
							<input type="radio" name="network_type" value="2">移动4G
						</li>
						<li>
							<input type="radio" name="network_type" value="3">联通3G
						</li>
						<li>
							<input type="radio" name="network_type" value="4">联通4G
						</li>
						<li>
							<input type="radio" name="network_type" value="5">电信4G
						</li>
					</ul>
				</div>
			</div>
			<div class="index_four_right">
				<div class="index_four_top">
					<span>价格区间</span>
				</div>
				<div class="index_four_bottom">
					<ul>
						<li>
							<input type="radio" name="price_type" value="1">0~1000元
						</li>
						<li>
							<input type="radio" name="price_type" value="2">1001~2000元
						</li>
						<li>
							<input type="radio" name="price_type" value="3">2001~3000元
						</li>
						<li>
							<input type="radio" name="price_type" value="4">3001元以上
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="index_five">
		<div class="container">
			<ul>
				<?php if(is_array($data)): foreach($data as $key=>$each): ?><li>
						<div class="phone">
							<img src="/web_oppo/Public/Home/image/Phone/142500475555828.png">
							<span>支持移动&联通双4G网络</span>
							<span>N3移动&联通双4G版</span>
							<div>
								<span>￥3999</span>
								<img src="/web_oppo/Public/Home/image/Phone/tag.png">
							</div>
						</div>
					</li><?php endforeach; endif; ?>
			</ul>
		</div>
	</div>

	<div class="bottom_2">
		<div class="container">
			<div class="foot_tag1 animate"></div>
			<div class="foot_tag2 animate"></div>
			<div class="foot_tag3 animate"></div>
			<div class="foot_tag4 animate"></div>
			<div class="foot_tag5 animate"></div>
		</div>
	</div>

	<div class="bottom_1">
		<div class="container">
			<div class="row">
				<span class="row_title">关于我们</span>
				<a href="#">关于OPPO</a>
				<a href="#">新闻中心</a>
				<a href="#">人才招聘</a>
			</div>
			<div class="row">
				<span class="row_title">推荐机型</span>
				<a href="#">Find7</a>
				<a href="#">Find5</a>
				<a href="#">N1</a>
				<a href="#">R1</a>
			</div>
			<div class="row">
				<span class="row_title">购物相关</span>
				<a href="#">帮助中心</a>
				<a href="#">周边产品</a>
				<a href="#">OPPO体验店</a>
				<a href="#">客户服务政策</a>
			</div>
			<div class="row">
				<span class="row_title">会员中心</span>
				<a href="#">产品注册</a>
				<a href="/web_oppo/index.php/Home/Register/index">会员注册</a>
				<a href="/web_oppo/index.php/Home/Login/index">会员登录</a>
			</div>
			<div class="row">
				<span class="row_title">关注我们</span>
				<a href="#" class="row_other_1">新浪微博</a>
				<a href="#" class="row_other_2">腾讯微博</a>
				<a href="#" class="row_other_3">人人网</a>
				<a href="#" class="row_other_4">QQ空间</a>
			</div>
			<div class="row_1">
				<span class="row_title">联系我们</span>
				<div class="second">
					<div class="left">
						<img src="/web_oppo/Public/Home/image/Index/tel_s.png">
					</div>
					<div class="right">
						<span class="span_1">4001-666-888</span></br>
						<span class="span_2">7*24小时客服电话</span>
					</div>
				</div>
				<div class="third">
					<div class="left">
						<img src="/web_oppo/Public/Home/image/Index/zxkf.png">
					</div>
					<div class="right">
						<span class="span_1">在线客服</span>
						<img src="/web_oppo/Public/Home/image/Index/zx.png"></br>
						<span class="span_2">服务时段:8:30-22:00</span>
					</div>
				</div>
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
<script type="text/javascript" src="/web_oppo/Public/Home/js/Phone/phone.js"></script>
</html>