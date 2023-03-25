<?php 
 session_start();
 require_once 'functions/connect.php';
 if(!$_SESSION['user']){
		header('Location: ../index.php');
	}
  $childrens = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `school`"));
  $parent = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `users` WHERE id = '" . $_SESSION['user']['id'] ."'"));
  // while ($row = mysqli_fetch_array($parent)) { // выводим данные
  //                     echo $row['login'];
  //                 }
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
 	
 	<title>Мойдодыр</title>
 </head>
 <body>
  <div class="container">
    <header id='ProfHeader'>
      <div id="openModal" class="modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title">Выберите страницу</h3>
                  <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">    
                <ul>
			        <li class="bold"><a href="/myProfile.php">Мой профиль</a></li>
              <li><a href="/howItWorks.php">Как это работает?</a></li>
              <li><a href="/aboutUS.php">О нас</a></li>
              <li><a href="/myStatistic.php">Статистика</a></li>
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
       
      </div >
        <h1 class="content-header_title" id='ProfTitle'>мойдодыр</h1>
      </div>
      <div class="logo">
        <img src="css/logo.png" alt="(((" id='logoPict'>
      </div>
<<<<<<< HEAD
      <div class="userName">
       <?php echo $childrens['name']; ?>
      </div>
      <div class="profile_pic">
        <img src="css/mother.png" alt=")))">
=======
      <div>
        <img src="css/damir.jpg" alt="." id='kidPhoto'>
      </div>
      <div id='MyRf'>
        Мой профиль
      </div>
      <div class="userName" id='UNProf'>
        Никитa Сентяков
      </div>
      <div class="profile_pic" id='PrPicProf'>
        <img src="css/user.jpg" alt=")))" id='imgProf'>
>>>>>>> 814e2ad31133803f7d86b944d079eab57cb79b22
      </div>
      <p id='profP'>Симонова Мария <br> Владиславовна</p>
    </header>
      <div class="mainPartContainer">
        <div class="navigation">
          
 
<!-- HTML кнопки -->



          <ul class="nav">
              <li class="bold"><a href="/myProfile.php">Мой профиль</a></li>
              <li><a href="/howItWorks.php">Как это работает?</a></li>
              <li><a href="/aboutUS.php">О нас</a></li>
              <li><a href="/myStatistic.php">Статистика</a></li>
              <li><a href="/news.php">Новости</a></li>
              <li><a href="/admin/admin.php">Админ-панель</a></li>
          </ul>
        </div>
      <div class="sideContent">
        <div class="profileContainer">
        	<div class="leftSideContainer">
        		<img src="css/mother.png" alt="moma" id='profPhoto'>
        		<button id='profBtn'>ИЗМЕНИТЬ ФОТО</button>
        	</div>

        	<div class="rightSideContainer">
        		<form action="" method="POST" class="edit">
      				<div class="form-group">
      					<input type="text" name="login" placeholder="ФИО" class='profileInput'>
      				</div>
      				<div class="form-group">
      					<input type="email" name="email" placeholder="Email" class='profileInput'>
      				</div>
      				<div class="form-group">
      					<input type="password" name="password" placeholder="Пароль" class='profileInput'>
      				</div>
      				<div class="form-group">
      					<input type="password" name="confirmPassword" placeholder="Повторите пароль" class='profileInput'>
      				</div>
      				<button type="submit" class="btn btn-primary" name="doGo" id='btnSaveChanges'>СОХРАНИТЬ ИЗМЕНЕНИЯ</button>
			     </form>
        	</div>
        </div>
        <p id='kids'>Дети</p>
        <div class="childrenContainer">
        	<img class='kidsProf' src="css/user.jpg" alt=".">
        	<div class="allInformation">
       			<p class='kidDescrip'><?php echo $childrens['name']; ?> <br> Школа №12 <br> <?php echo $childrens['class']; ?></p> 		
        	</div>
        	<button class='btnSelectKids'>ВЫБРАНО</button>
        </div>
      </div> 
 </body>
 <footer>
   
 </footer>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->