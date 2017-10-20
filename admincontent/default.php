<div class="side-menu col-sm-2">
    <h3 align="center">Menu</h3>
    <br>
    <button class="btn btn-default col-sm-12" id="instruction">Instruction</button>
    
</div>
<div class="main-content col-sm-10 well">
	<div class="instruction">
		<h3 align="center">Instructions</h3>
		<p>
			<ol>
				<li>Select The section to edit for top menu</li>
				<li>Then select some item from side menu to edit</li>
			</ol>
		</p>
	</div>
	
	<div class="contact">
	</div>
	
	
	<span class="status">
	</span>


</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(document).ajaxStart(function(){
       	 	$(".status").html("Processing ...");
       	 	$(".status").css("display","block");
    	});
    	$(document).ajaxComplete(function(){
        	$(".status").html("Done");
       	 	$(".status").css("display","none");
    	});
    	
        
		$(".payment-form").submit(function(e) {
		    var url = "./post/payment-form.php"; 

		    $.ajax({
		           type: "POST",
		           url: url,
		           data: $(this).serialize(), 
		           success: function(data)
		           {
		               $(".charge").text(data);
		           }
		         });

		    e.preventDefault();
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
</script>
<style type="text/css">
	h3{
		margin: 0;
	}
	div.contact{
		display: none;
	}
</style>