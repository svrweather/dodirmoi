<?php 
	session_start();
	require_once '../functions/connect.php';

	$login = $_POST['login'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$error = 'Введите почту!';

if (isset($_REQUEST['doGo'])) {
	$hash = md5($login . time());
	$headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "To: <$email>\r\n";
        $headers .= "From: <rassilkamail123@gmail.com>\r\n";
        // Сообщение для Email
        $message = '
                <html>
                <head>
                <title>Подтвердите Email</title>
                </head>
                <body>
                <p>Что бы подтвердить Email, перейдите по <a href="http://project/auth/emailconfirm.php?hash=' . $hash . '">ссылка</a></p>
                </body>
                </html>
                ';
     if (mail($email, "Подтвердите Email на сайте", $message, $headers)) {
            $_SESSION['message'] = 'Подтвердите email на почте';
        }
       else {
       	$_SESSION['message'] = $error;
       }
	mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`, `email`, `email_confirmed`) VALUES (NULL, '$login', '$password', '$email', 1)");
	#$_SESSION['message'] = "Регистрация прошла успешно!";
	header('Location: ../index.php');
}
 ?>