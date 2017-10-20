$(document).ready(function(){
	$(document).ajaxStart(function(){
     	 	$(".status").html("Processing ...");
     	 	$(".status").css("display","block");
  	});
  	$(document).ajaxComplete(function(){
      	$(".status").html("Done");
     	 	$(".status").css("display","none");
  	});

  	$("button.menu-button").click(function(){
  		$module = $(this).attr("id");
      	$.post("./module/"+$module+".php", function(data, status){
         		$("div."+$module).html(data);
      	});
      });
      
	$('button').click(function(){
		$(".main-content div").css("display","none");
		$(".side-menu button").css("background","initial");
		$(this).css("background","lightgrey");
		var abc = $(this).attr("id");
		$('.'+abc).css("display","block");
		$('.'+abc+'>div').css("display","initial");
	});		
});


