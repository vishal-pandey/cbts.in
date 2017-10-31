	$(document).ready(function(){
		$("button.test-login").click(function(){
			$("section.test-login").css("display","block");
			$("section.test-login").animate({height:"100vh" , width:"100%"},"slow");
			$("section.main").css("display","none");
		});

		$(".signup-button").click(function(){
			$(".login-container").animate({marginTop:"100vh"},"fast",function(){
				$(".login-container").css("display","none");
				$(".signup-container").css("display","inline-block");
				$(".signup-container").animate({marginLeft:"0%"},"fast");
			});
		});
		$(".login-button").click(function(){
			$(".signup-container").animate({marginLeft:"100%"},"fast",function(){
				$(".signup-container").css("display","none");
				$(".login-container").css("display","inline-block");
				$(".login-container").animate({marginTop:"30px"},"fast");
			});
		});
	});