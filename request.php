<?php 
 session_start();
 if(!$_SESSION['user']){
		header('Location: ../index.php');
	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/media1.css">
 	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/diagrams.css">
  <link rel="stylesheet" href="css/vpopup.css">
   <link rel="stylesheet" href="css/admin.css">
  
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--     <link rel="stylesheet" href="css/jquery.circliful.css">-->
     <link href="css/main.css" rel="stylesheet" type="text/css" />

  <link 
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
  />  
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
  <script src="js/arrow.js" type = "text/javascript"></script>
 	
 	<title>Мойдодыр</title>
 </head>
 <body>
	<div class="container">
    	 <header class= "admin">
          <div>
            <h1 class="content-header_title">мойдодыр</h1>
          </div>
          <div class="logo">
            <img src="../css/logo.png" alt="(((">
          </div>
          <div class="userName">
            Админ-панель
          </div>
          <div class="profile_pic">
            <img src="../css/admin-logo.jpg" alt=")))">
          </div>
        </header>
      <div class="mainPartContainer">
        <div class="navigation" id="admin_navigation">
          
 
<!-- HTML кнопки -->
          <ul class="nav" id ="admin_nav">
                  <li><a href="/admin/admin.php">Статистика</a></li>
                  <li><a class = "bold" href="/request.php">Заявки</a></li>
                  <li><a href="../authorized.php">Выйти</a></li>
              </ul>
        </div>
      <div class="sideContent">
     	<div class="request">
     		<img src="css/roma.jpg" alt="roma)">
     		<div class="description">
     			<p>Родитель: <br>
     			   Ребенок:	 <br>
     			   Класс: <br>
     			</p>
     		</div>
     		<p class="date">19.12.2004</p>
     	</div>
      </div>
   </div>
</div>
</body>
<footer>
</footer>
</html>