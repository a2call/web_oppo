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
	$.post("Home/Index/logout", data, function(){
		window.location.href="http://localhost/web_oppo";
	});
});

var timeline = setInterval(function(){

	$("#bg_select_line_2").animate({"width":1180},3500,function(){
		$("#bg_select_line_2").css({"width":0});
	});

},5500);

var img = 0;

var time = setInterval(function(){

	if(img == 4){
		img = 0;
	}

	$('.bg_center_1').eq(img).animate({"left":0}, 800, function(){
		$(this).delay(2800).animate({"left":"150%"},800,function(){
			$(this).css({"left":"-150%"});
		});
	});

	img++;
},5500);