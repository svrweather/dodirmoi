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
	<link rel="stylesheet" href="css/media1.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
	<title>Регистрация</title>
</head>
<body>
	<?php  if($_SESSION['message']){
			echo '<p class="msg"> ' . $_SESSION["message"] . ' </p>';
		}
		unset($_SESSION['message']);
	?>
	<div class="container">
		<header class="indexHeader">
			<div>
				<h1 class="content-header_title">мойдодыр</h1>
			</div>
			<div class="logo">
				<img src="css/logo.png" alt="(((">
			</div>
		</header>
		<div class="regMainPartContainer">
			<h2 class="entrance" id="regEntrance">Регистрация</h2>
			<form action="auth/register.php" method="POST" class="edit">
				<div class="form-group">
					<input type="text" name="login" placeholder="ФИО">
				</div>
				<div class="form-group">
					<input type="email" name="email" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="Пароль">
				</div>
				<div class="form-group">
					<input type="password" name="confirmPassword" placeholder="Повторите пароль">
				</div>
				
				<button type="submit" class="btn btn-primary" name="doGo">ЗАРЕГИСТРИРОВАТЬСЯ</button>
				<p id="indexButton"><a href="index.php" >Уже есть аккаунт? Войти</a></p>
			</form>
		</div>
	</div>
</body>
</html>