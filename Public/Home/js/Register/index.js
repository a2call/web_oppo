$('.left_img_1').click(function(){
	window.location.href="http://localhost/web_oppo/index.php/Home/Index/index";
});

$('#body_1_form_1_input').blur(function(){
	var val = $('#body_1_form_1_input').val();
	var data = {"username": val};
	$.post("check_username",data, function(d){
		if(d == "ok"){
			$('#form_1_info_1').text('1234');
		}else{
			$('#form_1_info_1').text('123');
		}
	});
});

$('#submit').click(function(){
	var username = $('#body_1_form_1_input').val();
	var passwd = $('#body_1_form_2_input').val();
	var password = $.md5(passwd);
	var hello = $.md5($('#body_1_form_4_input').val());
	var data = {"username":username, "passwd":password};
	$.post("insert",data, function(d){
		if(d == 'ok'){
			window.location.href="http://localhost/web_oppo/index.php/Home/Index/index";
		}
	});
});

$('#body_1_form_4_img').click(function(){
	change_verify(this);
});

function change_verify(obj){
	$(obj).attr("src", "http://localhost/web_oppo/index.php/Home/Register/VerifyCode?Math.random()");
}

$('#body_1_form_4_change').click(function(){
	change_verify($('#body_1_form_4_img'));
});

$('#body_1_form_5_image').click(function(){
	if($('#body_1_form_5_image').attr("status") == 0)
	{
		$('#body_1_form_5_image').attr("src", "/web_oppo/Public/Home/image/Register/checkbox2.png");
		$('#body_1_form_5_image').attr("status", "1");
	}else{
		$('#body_1_form_5_image').attr("src", "/web_oppo/Public/Home/image/Register/checkboxX.png");
		$('#body_1_form_5_image').attr("status", "0");
	}
});