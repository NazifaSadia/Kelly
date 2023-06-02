<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = 'contact';

	$connect = mysqli_connect($servername, $username, $password, $databasename);

	if($connect){
		//echo "Successful";
	}
	else {
		echo 'Database is not connected.';
	}
?>