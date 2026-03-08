<?php
	$conn = mysqli_connect('localhost', 'investme_allgame12', 'investme_allgame12', 'investme_allgame12');
	
	if (!$conn) {
		echo "Error: " . mysqli_connect_error();
		exit();
	}
	
	date_default_timezone_set("Asia/Kolkata"); 
?>