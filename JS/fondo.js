$(document).ready(function(){

	$("#banner").css({"height":$(window).height() + "px"});

	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if(scroll > 300){
			if(!flag){
				$("#log").css({"margin-top": "-5px", "width": "150px","height":"50px"});

				$("#header").css({"background-color": "#8BC53E"});
				flag = true;

				$(".nav li ul li").css({"background-color": "#8BC53E"});
				flag = true;

				$(".nav li a:hover").css({"background-color": "transparent"});
				flag = true;

				$(".nav li a:hover").css({"color": "white"});
				flag = true;

				$(".nav li a").css({"color": "white"});
				flag = true;
			}
		}else{
			if(flag){
				$("#log").css({"margin-top": "250px", "width": "321px","height":"114px"});

				$("#header").css({"background-color": "transparent"});
				flag = false;

				$(".nav li ul li").css({"background-color": "transparent"});
				flag = false;

				$(".nav li a:hover").css({"background-color": "#07BD3E"});
				flag = false;

				$(".nav li a").css({"color": "#8A0808"});
				flag = false;

				$(".nav li a:hover").css({"color": "white"});
				flag=false;
			}
		}
});

});
