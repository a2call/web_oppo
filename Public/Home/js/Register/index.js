$('.left_img_1').click(function(){
	window.location.href="http://localhost/web_oppo/index.php/Home/Index/index";
});

$('#body_1_form_1_input').focus(function(){
	$('#form_1_info_1').hide();
	$('#form_1_info_1_1').hide();
	$('#form_1_info_1_2').hide();
	$('#form_1_info_1_3').hide();
	$('#form_1_info_1_img').hide();
	$(this).attr("status", "0");
});

$('#body_1_form_1_input').blur(function(){
	$('#form_1_info_1').hide();
	$('#form_1_info_1_1').hide();
	$('#form_1_info_1_2').hide();
	$('#form_1_info_1_3').hide();
	$('#form_1_info_1_img').hide();
	$(this).attr("status", "0");
	checkUsername(this);
});

function checkUsername(obj){
	var val = $(obj).val();

	//正则手机号
	var phone=/^1\d{10}$/g;
	//正则邮箱
	var email=/^[a-zA-Z1-9]\d+\@[a-zA-Z1-9]+(\.com)$/g;

	var test = $(obj).attr("status");

	if(val.length <= 0){
		$('#form_1_info_1_img').show();
		$('#form_1_info_1_1').show();
	}else if(phone.test(val) || email.test(val)){
		var data = {"username": val};
		$.post("check_username",data, function(d){
			if(d == "ok"){
				$(obj).attr("status", "1");
			}else{
				$('#form_1_info_1_img').show();
				$('#form_1_info_1_2').show();
			}
		});
	}else{
		$('#form_1_info_1_img').show();
		$('#form_1_info_1_3').show();
	}
}

$('#body_1_form_2_input').focus(function(){
	$('#form_1_info_2_img').hide();
	$('#form_1_info_2_1').hide();
	$('#form_1_info_2_2').hide();
	$(this).attr("status", "0");
});

$('#body_1_form_2_input').blur(function(){
	checkPasswd(this);
});

function checkPasswd(obj){
	var val = $(obj).val();

	if(val.length <= 0){
		$('#form_1_info_2_img').show();
		$('#form_1_info_2_1').show();
	}else if(val.length < 6 || val.length > 32){
		$('#form_1_info_2_img').show();
		$('#form_1_info_2_2').show();
	}else{
		$(obj).attr("status", "1");
	}
}

$('#body_1_form_3_input').focus(function(){
	$('#form_1_info_3_img').hide();
	$('#form_1_info_3_1').hide();
	$('#form_1_info_3_2').hide();
	$(this).attr("status", "0");
});

$('#body_1_form_3_input').blur(function(){
	$('#form_1_info_3_img').hide();
	$('#form_1_info_3_1').hide();
	$('#form_1_info_3_2').hide();
	$(this).attr("status", "0");
	checkRePasswd(this);
});

function checkRePasswd(obj){
	var val = $(obj).val();
	var val1 = $('#body_1_form_2_input').val();

	if(val.length <= 0){
		$('#form_1_info_3_1').show();
	}else if((val.length != val1.length) || (val != val1)){
		$('#form_1_info_3_2').show();
	}else{
		$(obj).attr("status", "1");
		return;
	}
	$('#form_1_info_3_img').show();
}

$('#body_1_form_4_input').focus(function(){
	$('#body_1_form_4_info_img').hide();
	$('#body_1_form_4_info_1').hide();
	$('#body_1_form_4_info_2').hide();
	$(this).attr("status", "0");
});

$('#body_1_form_4_input').blur(function(){
	$('#body_1_form_4_info_img').hide();
	$('#body_1_form_4_info_1').hide();
	$('#body_1_form_4_info_2').hide();
	$(this).attr("status", "0");
	checkVerifyCode(this);
});

function checkVerifyCode(obj){
	var val = $(obj).val();
	var data = {"code": val};

	if(val.length <= 0){
		$('#body_1_form_4_info_img').show();
		$('#body_1_form_4_info_1').show();
	}else{
		$.post("checkVerifyCode", data, function(d){
			if(d == "ok"){
				$(obj).attr("status", "1");
				return;
			}
			else{
				$('#body_1_form_4_info_img').show();
				$('#body_1_form_4_info_2').show();
			}
		});
	}
}

$('#submit').click(function(){
	var username = $('#body_1_form_1_input').val();
	var passwd = $('#body_1_form_2_input').val();
	var password = $.md5(passwd);
	var hello = $.md5($('#body_1_form_4_input').val());
	var data = {"username":username, "passwd":password};

	if($('#body_1_form_1_input').attr("status") != "1"){
		$('#form_1_info_1_img').show();
		$('#form_1_info_1').hide();
		$('#form_1_info_1_1').show();
	}

	if($('#body_1_form_2_input').attr("status") != "1"){
		$('#form_1_info_2_img').show();
		$('#form_1_info_2_1').show();
	}

	if($('#body_1_form_3_input').attr("status") != "1"){
		$('#form_1_info_3_img').show();
		$('#form_1_info_3_1').show();
	}

	if($('#body_1_form_4_input').attr("status") != "1"){
		$('#body_1_form_4_info_img').show();
		$('#body_1_form_4_info_1').show();
	}

	if($('#body_1_form_5_image').attr("status") != "1"){
		$('#body_1_form_5_info_img').show();
		$("#body_1_form_5_info_1").show();
	}

	if(($('#body_1_form_1_input').attr("status") == "1") 
		&& ($('#body_1_form_2_input').attr("status") == "1") 
		&& ($('#body_1_form_3_input').attr("status") == "1")
		&& ($('#body_1_form_4_input').attr("status") == "1")
		&& ($('#body_1_form_5_image').attr("status") == "1")
	){
		$.post("insert",data, function(d){
			if(d == 'ok'){
				window.location.href="http://localhost/web_oppo/index.php/Home/Index/index";
			}
		});
	}
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
	$('#body_1_form_5_info_img').hide();
	$("#body_1_form_5_info_1").hide();

	if($('#body_1_form_5_image').attr("status") == 0)
	{
		$('#body_1_form_5_image').attr("src", "/web_oppo/Public/Home/image/Register/checkbox2.png");
		$('#body_1_form_5_image').attr("status", "1");
	}else{
		$('#body_1_form_5_image').attr("src", "/web_oppo/Public/Home/image/Register/checkboxX.png");
		$('#body_1_form_5_image').attr("status", "0");
	}
});