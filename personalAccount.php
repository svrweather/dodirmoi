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
  <link rel="stylesheet" href="css/jquery.circliful.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
  crossorigin="anonymous" referrerpolicy="no-referrer"/>  
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
        Дамир Рахматуллин
      </div>
      <div class="profile_pic">
        <img src="css/images.jpeg" alt=")))">
      </div>
    </header>
      <div class="mainPartContainer">
        <div class="navigationMedia">
          <div class="navigation">
            <ul class="nav">
                <li class="bold"><a href="/personalAccount.php">Мой профиль</a></li>
                <li><a href="/howItWorks.php">Как это работает?</a></li>
                <li><a href="/aboutUs.php">О нас</a></li>
                <li><a href="#">Статистика</a></li>
                <li><a href="/news.php">Новости</a></li>
            </ul>
          </div>
        </div>
        

      <div class="sideContentMedia">
          <div class="sideContent">
            <p class="upperText"><span>Никита</span> сегодня вымыл руки на <span>65</span>%</p>
            <div class="diagramContent">
                <div class="firstDiagram">
                    <div class="circlestat" data-dimension="200" data-text="55%" data-width="30" data-fontsize="38" data-percent="55" data-fgcolor="#61a9dc" data-bgcolor="#eee" data-fill="#ddd"></div>
                </div>
                <div class="secondDiagram">
                    <div class="circlestat" data-dimension="200" data-text="77%" data-width="30" data-fontsize="38" data-percent="77" data-fgcolor="#61a9dc" data-bgcolor="#eee" data-fill="#ddd"></div>
                </div>
            </div>
          </div>
      </div>

      

    </div>       
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.circliful.min.js"></script>
  <script>
      $(function(){
          $('.circlestat').circliful();
      });
  </script>
 </body>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
