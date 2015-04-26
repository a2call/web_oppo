$(".animate").hover(function(){
	$(this).animate({"marginTop":"-10"},100);
},function(){
	$(this).animate({"marginTop":"0"},100);
});