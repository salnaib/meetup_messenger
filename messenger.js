<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".send").click() {
			$.ajax({ // ajax call starts
			  url: 'sendmessage.php', // JQuery loads serverside.php
			  data: { memberid: $("#memberid"), groupid: $("#groupid"), message: $("#message"), subject: $("#subject") }, // message info
			  success: function(data) // Variable data contains the data we get from serverside
			  {
				  $('#confirmation').html(data); // Clear #groups div
				}
			});
		}
	});
</script>