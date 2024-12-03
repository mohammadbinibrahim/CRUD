<?php
	$conn=new mysqli('localhost', 'username', 'password', 'db');
	if(!$conn){
		die(mysqli_error($conn));
	}
?>