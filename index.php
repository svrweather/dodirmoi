<?php session_start(); 

	if($_SESSION['user']){
		header('Location: ../authorized.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
	<title>Система отслеживания качества</title>
</head>
<body>
	<div class="container">
		<header class="indexHeader">
			<div>
				<h1 class="content-header_title">мойдодыр</h1>
			</div>
			<div class="logo">
				<img src="css/logo.png" alt="(((">
			</div>
		</header>
	<div class="indexMainPartContainer"> 
		<h2 class="entrance">Вход</h2>
		<div class="formGroupContainer">
			<form action="auth/login.php" method="POST" class="edit">
			<div class="form-group">
				<input type="text" placeholder="Email" name="email">
			</div>
			<div class="form-group">
				<input type="password" placeholder="Пароль" name = "password">
			</div>
			<button type="submit">ВОЙТИ</button><br>
			<a id="linkToReg" href="reg.php">Нет аккаунта? Зарегистрироваться</a>
			
			
		</form>
		</div>
		<?php  if($_SESSION['message']){
				echo '<p class="msg"> ' . $_SESSION["message"] . ' </p>';
			}
			unset($_SESSION['message']);
			?>
	</div>
</body>
</html>