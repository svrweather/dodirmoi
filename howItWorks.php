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
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media1.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link 
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
  />  
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
  <div class="container">
    <div class="headerMedia">
      <header>
      <div>
        <h1 class="content-header_title">мойдодыр</h1>
      </div>
      <div class="logo">
        <img src="css/logo.png" alt="(((">
      </div>
      <div class="userName">
        Дамир Рахматуллин
      </div>
      <div class="profile_pic">
        <img src="css/images.jpeg" alt=")))">
      </div>
    </header>
    </div>
    
    <div class="mainPartContainer">
      <div class="navigationMedia">
          <div class="navigation">
            <ul class="nav">
                <li><a href="/personalAccount.php">Мой профиль</a></li>
                <li class="bold"><a href="/howItWorks.php">Как это работает?</a></li>
                <li><a onclick="onClickMenu()" href="/aboutUs.php">О нас</a></li>
                <li><a href="#">Статистика</a></li>
                <li><a href="/news.php">Новости</a></li>
            </ul>
        </div>
      </div>
      <div class="sideContentMedia">
        <div class="sideContent">
            <p class="contentArticle">
            Возможно использование различных подходов для распознавания объектов. <br>
В последнее время методы машинного и глубокого обучения стали популярными подходами к проблемам распознавания объектов. Обе технологии учатся распознавать объекты на изображениях, но они различаются по своему исполнению.
            </p>
            <iframe class="video" width="95%" height="400" src="https://www.youtube.com/embed/vgbMONXc9Cs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
            
        </div>
      </div>
        
    </div>
    <script>
  function onClickMenu(a) {
    document.getElementById(a).classList.toggle("change");

  }
  src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"
 </script>