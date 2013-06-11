<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script>
$(document).ready(function(){
	$(".send").click(function(){
		$.ajax({ // ajax call starts
		  url: 'sendmessage.php', // JQuery loads serverside.php
		  data: { memberid: $("#memberid"), groupid: $("#groupid"), message: $("#message"), subject: $("#subject") }, // message info
		  success: function(data) // Variable data contains the data we get from serverside
		  {
			  $('#confirmation').html(data); // Clear #groups div
			}
		});
	});
});
</script>