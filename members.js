<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".search").click() {
			$.ajax({ // ajax call starts
			  url: 'getmembers.php', // JQuery loads serverside.php
			  dataType: 'json', // Choosing a JSON datatype
			  success: function(data) // Variable data contains the data we get from serverside
			  {
				  $('#members').html(''); // Clear #members div
				  for (var i in data.results) {
                      $('#members').append('<a href="' + data.results[i].link + '">' + data.results[i].name + '</a> <br/>');
                  }				  				  
				}
			});
		}
	});
</script>