<?php
	//connect to mysql
	$con = mysqli_connect("localhost","root","","jsshoutbox");  //name of server, username of mysql, password of mysql, name of database

	if(mysqli_connect_errno()) {
		echo "failed to connect: ".mysqli_connect_error(); 
	}
?>
