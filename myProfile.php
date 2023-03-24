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
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
 	
 	<title>Document</title>
 </head>
 <body>
  <div class="container">
    <header>
      <div id="openModal" class="modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title">Выберите страницу</h3>
                  <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">    
                <ul>
			            <li><a href="/myProfile.php">Мой профиль</a></li>
              <li><a href="/howItWorks.php">Как это работает?</a></li>
              <li><a href="/aboutUS.php">О нас</a></li>
              <li class="bold"><a href="/myStatistic.php">Статистика</a></li>
              <li><a href="/news.php">Новости</a></li>
              <li><a href="/admin/admin.php">Админ-панель</a></li>
		            </ul>
                </div>
              </div>
            </div>
          </div>
      <div>
      <div class='menu'>
        <div class='lines'>
          <a href="#openModal"><span id='span1'></span></a>
          <a href="#openModal"><span id='span2'></span></a>
          <a href="#openModal"><span id='span3'></span></a>
        </div>
       
      </div>
        <h1 class="content-header_title">мойдодыр</h1>
      </div>
      <div class="logo">
        <img src="css/logo.png" alt="(((" id='logoPict'>
      </div>
      <div class="userName">
        Никитa Сентяков
      </div>
      <div class="profile_pic">
        <img src="css/user.jpg" alt=")))">
      </div>
    </header>
      <div class="mainPartContainer">
        <div class="navigation">
          
 
<!-- HTML кнопки -->



          <ul class="nav">
              <li><a href="/myProfile.php">Мой профиль</a></li>
              <li><a href="/howItWorks.php">Как это работает?</a></li>
              <li><a href="/aboutUS.php">О нас</a></li>
              <li class="bold"><a href="/myStatistic.php">Статистика</a></li>
              <li><a href="/news.php">Новости</a></li>
              <li><a href="/admin/admin.php">Админ-панель</a></li>
          </ul>
        </div>
      <div class="sideContent">
        <div class="profileContainer">
        	<div class="leftSideContainer">
        		<img src="" alt="">
        		<button></button>
        	</div>
        	<div class="rightSideContainer">
        		<form action="functions/editProfile.php" method="POST" class="edit">
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
      				<button type="submit" class="btn btn-primary" name="doGo">СОХРАНИТЬ ИЗМЕНЕНИЯ</button>
				      <p id="indexButton"><a href="index.php" >Уже есть аккаунт? Войти</a></p>
			     </form>
        	</div>
        </div>
        <div class="childrenContainer">
        	<p>ДЕТИ</p>
        	<img src="" alt="">
        	<div class="allInformation">
       			<p></p> 		
        	</div>
        	<button>
        		
        	</button>
        </div>
      </div> 
 </body>
 <footer>
   
 </footer>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->