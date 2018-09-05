<? include("top.php"); ?>
	<div class="container">
		<script>
			$(function() {
				$("#cardnum").on("keyup", function() {
					$.post( "cardcheck.php", { number: $("#cardnum").val() })
					  .done(function( data ) {
					    if(data == "false"){
					    	$("#userdata").text("");
					    	$("#booknum").hide();
					    }else{
					    	$("#userdata").html(data);
					    	$("#booknum").show();
					    	$("#booknum").focus();
					    }
					  });
				});
				$("#booknum").on("keyup", function(e) {
					if(e.keyCode == 13){
					$.post( "bookcheck.php", { number: $("#booknum").val() })
					  .done(function( data ) {
					    if(data == "false"){
					    	// No book
					    }else{
					    	// console.log(data);
					    	data = $.parseJSON(data);
					    	console.log(data);
					    	$("#booklist").append("<li class=\"list-group-item\" id=\""+data.id+"\">"+data.title+"</li>");
					    	$("#booknum").val("");
					    }
					  });
					}
				});
			});
		</script>
		<input type="number" class="form-control" id="cardnum">
		<p id="userdata"></p>
		<input type="number" class="form-control" id="booknum" style="display: none;">
		<ul class="list-group" id="booklist">
		  
		</ul>
	</div>
<? include("bottom.php"); ?>