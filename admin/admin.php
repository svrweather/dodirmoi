<?php
require_once '../functions/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/diagrams.css">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/media1.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--     <link rel="stylesheet" href="css/jquery.circliful.css">-->
     <link href="../css/main.css" rel="stylesheet" type="text/css" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/admin.css">
    <link 
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
  />  
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
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
          
            <ul class="nav" id ="admin_nav">
                  <li><a class = "bold" href="/admin/admin.php">Статистика</a></li>
                  <li><a href="/request.php">Заявки</a></li>
                  <li><a href="../authorized.php">Выйти</a></li>
              </ul>
            </div>
            <div class="sideContent">
              <div class="selector">
                <form action="" method="GET">
                  <select name='class'>
                    <option value="11">11 класс</option>
                    <option value="10">10 класс</option>
                    <option value="9">9 класс</option>
                    <option value="8">8 класс</option>
                    <option value="7">7 класс</option>
                    <option value="6">6 класс</option>
                    <option value="5">5 класс</option>
                    <option value="4">4 класс</option>
                    <option value="3">3 класс</option>
                    <option value="2">2 класс</option>
                    <option value="1">1 класс</option>
                  </select>
                  <button type="submit" class="admin_input" style="padding-left: 10px; padding-right: 10px;">отфильтровать</button>
                </form>
              </div>
              <table class="table">
                  <tbody>
                  <tr>
                      <th>id</th>
                      <th>ФИО</th>
                      <th>Класс</th>
                      <th>Дата</th>
                      <th>Коэффицент</th>
                      <th>Прошедшее время</th>
                  </tr>
                  <?php
                  switch ($_GET['class']) {
                    case '11':
                      $result = mysqli_query($connect, 'SELECT * FROM `childrens` WHERE class LIKE "%11%"');
                      break;
                    case '10':
                      $result = mysqli_query($connect, 'SELECT * FROM `childrens` WHERE class LIKE "%10%" AND class LIKE "_0%"');
                      break;
                    case '9':
                      $result = mysqli_query($connect, 'SELECT * FROM `childrens` WHERE class LIKE "%9%"');
                      break; 
                    case '8':
                      $result = mysqli_query($connect, 'SELECT * FROM `childrens` WHERE class LIKE "%8%"');
                      break;
                    case '7':
                      $result = mysqli_query($connect, 'SELECT * FROM `childrens` WHERE class LIKE "%7%"');
                      break;
                    case '6':
                      $result = mysqli_query($connect, 'SELECT * FROM `childrens` WHERE class LIKE "%6%"');
                      break;
                    case '5':
                      $result = mysqli_query($connect, 'SELECT * FROM `childrens` WHERE class LIKE "%5%"');
                      break;
                    case '4':
                      $result = mysqli_query($connect, 'SELECT * FROM `childrens` WHERE class LIKE "%4%"');
                      break;
                    case '3':
                      $result = mysqli_query($connect, 'SELECT * FROM `childrens` WHERE class LIKE "%3%"');
                      break;
                    case '2':
                      $result = mysqli_query($connect, 'SELECT * FROM `childrens` WHERE class LIKE "%2%"');
                      break;
                    case '1':
                      $result = mysqli_query($connect, 'SELECT * FROM `childrens` WHERE class LIKE "%1%" AND NOT class LIKE "_0%"');
                      break;             
                    default:
                      $result = mysqli_query($connect, 'SELECT * FROM `childrens`');
                      break;
                  }
                  while ($row = mysqli_fetch_array($result)) { // выводим данные
                      echo "<tr>\n<td>" . $row["id"] . "</td>" . "\n" . "<td>" . "" . $row["name"] . "
                       </td>" . "\n" . "<td>" . "" . $row["class"] . "</td>" . "\n" . "<td>" . "" . $row
                          ["datetime"] . "</td>" . "\n" . "<td>" . "" . $row["coefficent"] . "</td>" . "\n" . "<td>" . "" . $row["timego"] . "</td>" . "\n" . "</tr>" . "\n";
                  }

                  ?>
                  </tbody>
              </table>
               <div class="div">
                    <a style="margin-left: 5%" href="../authorized.php">выйти</a>
              </div>
          </div>
        </div>
      </div>
</body>
</html>
