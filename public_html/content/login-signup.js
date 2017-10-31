$(document).ready(function(){
	$(".signup-control").submit(function(e) {
	    var url = $(this).attr("action");
	    $.ajax({
	           type: "POST",
	           url: url,
	           data: $(this).serialize(), 
	           success: function(data)
	           {
	           		if (data == 'success') {
	           			window.location.reload();
	           		}else{
	           			$(".signup-error").css("display","inline-block");
		           		$(".signup-error").html(data);
	           		}
	           }
	         });
	    e.preventDefault(); 
	});
	$(".login-control").submit(function(e) {
	    var url = $(this).attr("action");
	    $.ajax({
	           type: "POST",
	           url: url,
	           data: $(this).serialize(), 
	           success: function(data)
	           {
	           		if (data == 'success') {	
	           			window.location.reload();
		           	}else{
	           			$(".login-error").css("display","inline-block");
		           		$(".login-error").html(data);
		           	}
	           }    
	         });
	    e.preventDefault(); 
	});
})