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
  <title>Мойдодыр</title>
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
      <div class="profile_pic">
        <img src="css/mother.png" alt=")))">
      </div>
    </header>
    <div class="mainPartContainer">
        <div class="navigation">
            <ul class="nav">
                <li><a href="/myProfile.php">Мой профиль</a></li>
                <li><a href="/howItWorks.php">Как это работает?</a></li>
                <li><a onclick="onClickMenu()" href="/aboutUS.php">О нас</a></li>
                <li><a href="/myStatistic.php">Статистика</a></li>
                <li class="bold"><a href="/news.php">Новости</a></li>
                <li><a href="/admin/admin.php">Админ-панель</a></li>
            </ul>
        </div>
        <div class="sideContent">
          <div class="newsGrid">
              <article><div class="artContainer">
                <img src="css/first_news.jpg" alt="" style="width: 360px; height: 150px;border-radius: 30px;">
                <h1>MVP!!!</h1>
                <p>Минимальный жизнеспособный продукт уже готов и работает в МБОУ СОШ №12, он включает в себя две камеры и комьютер!</p>
              </div></article>
             <article><div class="artContainer">
                <img src="css/second_news.jpg" alt="" style="width: 360px; height: 150px;border-radius: 30px;">
                <h1>Коммерческий сайт</h1>
                <p>У нас появлися коомерческий сайт для пищевых производств <a href="http://moidodyrcompany.tilda.ws">*click*</a></p>
              </div></article>
               <article><div class="artContainer">
                <img src="css/third_news.jpg" alt="" style="width: 360px; height: 150px;border-radius: 30px;">
                <h1>Совершенствуемся!</h1>
                <p>Мы уже обучаем первую версию нейронной сети на 4-х тысячах изображений!</p>
              </div></article>
              <article>
                <div class="artContainer">
                   <img src="css/phone.png" alt="" style="width: 360px; height: 150px;border-radius: 30px;">
                  <h1>Разработана мобильная версия сайта!</h1>
                  <p> Добавлено удобное отображение контента сайта на мобильных устройствах.</p> 
                </div>
              </article>
          </div>
        </div>
            
       
    </div>

</body>
</html>