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
	$(this).attr("src", "http://localhost/web_oppo/index.php/Home/Register/VerifyCode?Math.random()");
});