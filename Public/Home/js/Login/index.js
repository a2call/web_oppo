$('.left_img_1').click(function(){
	window.location.href="http://localhost/web_oppo/index.php/Home/Index/index";
});

$('#form_line2_input').focus(function(){
	$(this).attr("status", "0");
});

$('#form_line2_input').blur(function(){
	checkName(this);
});

function checkName(obj){
	var val = $(obj).val();

	if(val.length > 0){
		$(obj).attr("status", "1");
	}else{
		$(obj).attr("status", "0");
	}
}

$('#form_line3_input').focus(function(){
	$(this).attr("status", "0");
});

$('#form_line3_input').blur(function(){
	checkPasswd(this);
});

function checkPasswd(obj){
	var val = $(obj).val();

	if(val.length > 0){
		$(obj).attr("status", "1");
	}else{
		$(obj).attr("status", "0");
	}
}

$("#form_submit").click(function(){
	checkAllWrite();
});

function checkAllWrite(){
	checkName($('#form_line2_input'));
	checkPasswd($('#form_line3_input'));

	var status1 = $('#form_line2_input').attr("status");
	var status2 = $('#form_line3_input').attr("status");
	var data = {"username": $('#form_line2_input').val(), "password": $.md5($('#form_line3_input').val())};

	if((status1 != '1') || (status2 != '1')){
		$('#line_5_for_add_img').show();
		$('#line_5_for_add_info1').hide();
		$('#line_5_for_add_info2').show();
	}else{
		$.post("Login", data, function(d){
			if(d == "ok"){
				window.location.href="http://localhost/web_oppo";
			}else{
				$('#line_5_for_add_img').show();
				$('#line_5_for_add_info1').show();
				$('#line_5_for_add_info2').hide();
			}
		});
	}
}