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
          <p class="upperText"><span>Никита</span> сегодня вымыл руки на <span>80%</span></p>
          <div class="diagramContent">
              <div class="firstDiagram" id='diagram1'>
                  <p>За сегодня</p>
                  <div id="circle"></div>
              </div>
              <div class="secondDiagram" id='diagram2'>
                  <p id="secondp">За неделю</p>
                  <div id="circle2"></div>
              </div>
               <input type="button" id='btn' value='>'>
                <!-- <p id='arrow'>></p> -->
              </input>
          </div>
          <div class="barContent">
              <div class="chart">
                  <div class="container_bar">
                      <div class="pipe" id='pipe1'>
                          <div style="width: 60%"></div>
                      </div>
                      <p id='p1'>Класс</p>
                  </div>
                 <div class="container_bar">
                     <div class="pipe" id='pipe2'>
                         <div style="width: 38%"></div>
                     </div>
                     <p id='p2'>Параллель</p>
                 </div>
                  <div class="container_bar">
                      <div class="pipe" id='pipe3'>
                          <div style="width: 18%"></div>
                      </div>
                      <p id='p3'>Школа</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/circliful.js"></script>
  <script>
      circliful.newCircle({
          percent: 80,
          id: 'circle',
          type: 'simple',
          strokeLinecap: "round",
          noPercentageSign: false,
          backgroundCircleWidth: 20,
          foregroundCircleWidth: 20,
          progressColors: [
              {percent: 1, color: '#EF0000'},
              {percent: 30, color: 'orange'},
              {percent: 60, color: '#A2EF00'}
          ]
      });
      circliful.newCircle({
          percent: 20,
          id: 'circle2',
          type: 'simple',
          strokeLinecap: "round",
          noPercentageSign: false,
          backgroundCircleWidth: 20,
          foregroundCircleWidth: 20,
          progressColors: [
              {percent: 1, color: '#EF0000'},
              {percent: 30, color: 'orange'},
              {percent: 60, color: '#A2EF00'}
          ]
      });
  </script>
  <script>
//дожидаемся полной загрузки страницы
window.onload = function () {
	var arrow = document.getElementById("btn");
	var firstDiagram = document.getElementById("diagram1");
	var secondDiagram = document.getElementById("diagram2");
  var p = document.getElementById("secondp");
  var cnt = 1;
    //вешаем на него событи
    arrow.onclick = function() {
      p.style.display = 'block';
      if (cnt % 2 != 0) {
          firstDiagram.style.display = 'none';
          secondDiagram.style.display = 'block';
          secondDiagram.style.paddingLeft = '96px';
      }
      else {
          firstDiagram.style.display = 'block';
          secondDiagram.style.display = 'none';
      }
    	cnt = cnt + 1; 
      console.log(cnt);
      return false;
    }
}
</script>
 </body>
 <footer>
   
 </footer>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->