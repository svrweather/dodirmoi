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
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
 	<link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/diagrams.css">
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
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
  <div class="container">
    <header>
      <div>
        <h1 class="content-header_title">мойдодыр</h1>
      </div>
      <div class="logo">
        <img src="css/logo.png" alt="(((">
      </div>
      <div class="userName">
      </div>
      <div class="profile_pic">
        <img src="css/user.jpg" alt=")))">
      </div>
    </header>
      <div class="mainPartContainer">
        <div class="navigation">
          <ul class="nav">
              <li><a href="/authorized.php">Мой профиль</a></li>
              <li><a href="/howItWorks.php">Как это работает?</a></li>
              <li class="bold"><a href="/aboutUS.php">О нас</a></li>
              <li><a href="/myStatistic.php">Статистика</a></li>
              <li><a href="/news.php">Новости</a></li>
              <li><a href="/admin/admin.php">Админ-панель</a></li>
          </ul>
        </div>
        <div class="sideContent-about">
        	<div class="top-content">
        		<h1>Наша команда</h1>
        		<p align="center">Мы - команда школьников и студентов,
				каждый из нас имеет достижения в своей области.
				Мы готовы бороться с неправильным мытьём рук !</p>
        	</div>
        	
	         <div class="peopleGrid">
	            <article><div class="artContainer">
	              <img src="css/user.jpg" alt="" style="width: 220px; height: 220px;border-radius: 30px; align-content: center; margin-right: auto; margin-left: auto; display: block;">
	              <h1>Никита Сентяков</h1>
	              <p>Генеральный директор, Team Leader</p>
	            </div></article>
	          <article><div class="artContainer">
	              <img src="css/anna.jpg" alt="" style="width: 220px; height: 220px;border-radius: 30px; align-content: center; margin-right: auto; margin-left: auto; display: block;">
	              <h1>Анна Рябчикова</h1>
	              <p>Финансовый директор, директор по маркетингу</p>
	            </div></article>
	            <article><div class="artContainer">
	              <img src="css/damir.jpg" alt="" style="width: 220px; height: 220px;border-radius: 30px; align-content: center; margin-right: auto; margin-left: auto; display: block;">
	              <h1>Дамир Рахматуллин</h1>
	              <p>Web-Разработчик</p>
	            </div></article>
	            <article><div class="artContainer">
	              <img src="css/bogdan.jpg" alt="" style="width: 220px; height: 220px;border-radius: 30px; align-content: center; margin-right: auto; margin-left: auto; display: block;">
	              <h1>Богдан Урсегов</h1>
	              <p>Backend-разработчик</p>
	            </div></article>
	            <article><div class="artContainer">
	              <img src="css/roma.jpg" alt="" style="width: 220px; height: 220px;border-radius: 30px; align-content: center; margin-right: auto; margin-left: auto; display: block;">
	              <h1>Роман Лашкарев</h1>
	              <p>Web-Разработчик</p>
	            </div></article>
	            <article><div class="artContainer">
	              <img src="css/andrei.jpg" alt="" style="width: 220px; height: 220px;border-radius: 30px; align-content: center; margin-right: auto; margin-left: auto; display: block;">
	              <h1>Андрей Крюков</h1>
	              <p>Data Scientis</p>
	            </div></article>
	        </div>
	    </div>
    </div>
 </body>
 <footer>
   
 </footer>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->