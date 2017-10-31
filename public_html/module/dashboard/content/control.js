$(document).ready(function(){
	$(".user-control").submit(function(e) {
	    var url = $(this).attr("action");
	    $.ajax({
	           type: "POST",
	           url: url,
	           data: $(this).serialize(), 
	           success: function(data)
	           {
	           		
           			if (data == 1) {
	           			$.notify({
			            	icon: 'pe-7s-info',
			            	message: "Profile Updated Succesfully",

			            },{
			                type: 'info',
			                timer: 4000
			            });
			        }else{
			        	$.notify({
			            	icon: 'pe-7s-info',
			            	message: data,

			            },{
			                type: 'danger',
			                timer: 4000
			            });
			        }
	           		
	           }
	         });
	    e.preventDefault(); 
	});

	$(".password-control").submit(function(e) {
	    var url = $(this).attr("action");
	    $.ajax({
	           type: "POST",
	           url: url,
	           data: $(this).serialize(), 
	           success: function(data)
	           {
	           		if (data == 1) {
	           			$.notify({
			            	icon: 'pe-7s-info',
			            	message: "Password Updated Succesfully",

			            },{
			                type: 'info',
			                timer: 4000
			            });
			        }else{
			        	$.notify({
			            	icon: 'pe-7s-info',
			            	message: data,

			            },{
			                type: 'danger',
			                timer: 4000
			            });
			        }
	           }
	         });
	    e.preventDefault(); 
	});
})