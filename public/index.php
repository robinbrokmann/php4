<?php require_once("../php/includes/default.inc.php")  ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>MVC structuur</title>
     <link rel="stylesheet" href="css/master.css">
   </head>
   <body style="">
     <?php
        if(isset($_GET['route'])){
            echo $_GET['route'];
        }

     $app = new \mvc\App();
     echo $app;
     echo "<br>";
      ?>
   </body>
 </html>
