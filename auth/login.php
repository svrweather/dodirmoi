<?php
	require_once '../functions/connect.php';
	session_start();

	$email = $_POST['email'];
	$password = $_POST['password'];

	$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

	if(mysqli_num_rows($check_user) > 0){
		$user = mysqli_fetch_assoc($check_user);
		$_SESSION['user'] = [
			'id' => $user['id'],
			'email' => $user['email']
		];
		header('Location: ../authorized.php');
	} else {
		$_SESSION['message'] = 'Не верный логин или пароль!';
		header('Location: ../index.php');
	}
?>