<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(function() {
		url = "https://api.cryptonator.com/api/ticker/doge-usd";
	  $("#value").on("keyup", function(e) {
	  	if(e.keyCode == 13) {
	  		$("#amt").text("Loading...");
				$.getJSON( url )
			  .done(function( data ) {
			    // dat = JSON.parse(data);
			    $("#amt").text("$"+data.ticker.price*$("#value").val());
			  });
	  	}
	  });
	});
</script>
<input type="number" step="0.0000001" id="value"><br>
<p id="amt"></p>