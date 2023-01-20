<?php 
	$connect = mysqli_connect('localhost', 'root', 'root', 'project', '8889');

	if (!$connect){
		die('Error connect to database');
	}

 ?>