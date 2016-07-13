<?php 	
//header("Access-Control-Allow-Origin: *");
$http_origin = $_SERVER['HTTP_ORIGIN'];
if ($http_origin == "" || $http_origin == ""){ // No origin from same domain
	header("Access-Control-Allow-Origin: $http_origin");
}else{
	?>
		<span data-edstid="pageLayout" id="eds-page-layout" style="display:block;">  
			Please contact <a href="mailto:support@ebsco.com">support@ebsco.com</a> to setup the EDSAPI correctly. <?php echo $http_origin; ?>
		</span>
	<?php		
	die();
}
?> 
<script data-edstid="edsSiteContext">
		
		var loggedIn = jQuery('.loginuser').text().trim();
		<?php 
			$remoteIP = $_SERVER['REMOTE_ADDR'];
			if(strpos($remoteIP,"140.234.") !== false){ ?>
				var ipLoggedIn = "<?php  echo $_SERVER['REMOTE_ADDR']; ?>";
		<?php }?>

		//edsDemo
		//var edsK = 'eyJjdCI6ImFqN21tblNuamd6bjY4SFlldzQwcFVcL3UydUtidVJ2Y3crZlZvZVN0WGZFPSIsIml2IjoiYzUzYzU5N2RlY2UzMzhjYmNkNjI4YjUyM2I0YzkzMDYiLCJzIjoiMGEyYmZjMjc2MDAwMWNjYSJ9';
		//var edsP = 'bnMxODc4MDUuZWRzYWNhZC5lZHNhcGky';
		
		
		//alvetm
		var edsK = 'eyJjdCI6IndxSUwrdmZtd3Z0bjl3Qng0VVVaZllXa0FtbDd1YUtBbUxnSVwvWDFzUkswPSIsIml2IjoiOWNjMTU3NjY5OTRkMDBhOGNkOGUyYWYwZjkzMzBjNmMiLCJzIjoiNWU3ZjdiZDUyYmU1OGQ4MCJ9';
		var edsP = 'YWx2ZXRtLmFwaS5jaXZpY2E=';

		jQuery('.jswrapper').html(EDSTemplate.pageLayout);
</script>