<?php 
		require 'connect_db.php';
		$query = 'UPDATE apptable SET downloads = downloads + 1 WHERE id = 1';
		mysql_query($query);
?>

<html>
<head>
	<title>Thank you for downloading..</title>
</head>
<script type="text/javascript" src="plugins/jquery/jquery.min.js"></script>          
<script type="text/javascript">

// Check if the page has loaded completely                                         
$(document).ready( function() { 
    setTimeout( function() { 
        location.replace('Engi\'15.apk'); 
    }, 5000); 
}); 
</script>
<body>
	Thank you for downloading our android apk .. download to start soon...<br> or to force download click <a href="http://engineer.org.in/androidapp.php">Here</a>
	
</body>
</html>