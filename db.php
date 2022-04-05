<?php 	
 ob_start("ob_gzhandler");
	ini_set( 'display_errors', 0 );
 	error_reporting( E_ALL );
 	$con = mysqli_connect("localhost", "root", "", "rates");
	date_default_timezone_set("Africa/Lagos");
	if (mysqli_connect_errno()) {
		echo "Failed To Connect To MYSQL" . mysqli_connect_error();
	}
 ?>