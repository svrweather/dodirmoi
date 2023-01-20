<?php
require_once '../functions/connect.php'
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
    <title>Document</title>
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
        <table class="table">
            <tbody>
            <tr>
                <th>id</th>
                <th>id_pupil</th>
                <th>data_time</th>
                <th>percent</th>
                <th>wash_time</th>
            </tr>
            <?php
            $result = mysqli_query($connect, 'SELECT * FROM `main`');

            while ($row = mysqli_fetch_array($result)) { // выводим данные
                echo "<tr>\n<td>" . $row["id"] . "</td>" . "\n" . "<td>" . "" . $row["id_pupil"] . "
                 </td>" . "\n" . "<td>" . "" . $row["data_time"] . "</td>" . "\n" . "<td>" . "" . $row
                    ["percent"] . "</td>" . "\n" . "<td>" . "" . $row["wash_time"] . "</td>" . "\n" . "</tr>" . "\n";

            }

            ?>
            </tbody>
        </table>
         <div class="div">
              <a style="margin-left: 5%" href="../authorized.php">выйти</a>
        </div>
    </div>
</body>
</html>
