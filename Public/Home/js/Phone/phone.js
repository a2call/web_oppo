$('#index_header_left_image_1').hover(function(){
	$(this).attr("src", "/web_oppo/Public/Home/image/Index/i-h-sinawb-h.png");
},function(){
	$(this).attr("src", "/web_oppo/Public/Home/image/Index/i-h-sinawb.png");
});

$('#index_header_left_image_2').hover(function(){
	$(this).attr("src", "/web_oppo/Public/Home/image/Index/i-h-qqwb-h.png");
},function(){
	$(this).attr("src", "/web_oppo/Public/Home/image/Index/i-h-qqwb.png");
});

$('#index_header_right_1_logout').click(function(){
	var data = null;
	$.post("http://localhost/web_oppo/Home/Index/logout", data, function(){
		window.location.href="http://localhost/web_oppo";
	});
});


$(".animate").hover(function(){
	$(this).animate({"marginTop":"-10"},100);
},function(){
	$(this).animate({"marginTop":"0"},100);
});