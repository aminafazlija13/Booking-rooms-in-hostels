<?php
	$conn = mysqli_connect('localhost','root','','rezervacije');
	if (!$conn){
		die("Connection failed".mysqli_connect_error());
	}