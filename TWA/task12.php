<?php

session_start();

$hobby = $_POST["hobby"];
$_SESSION["cusHobby"] = $hobby;
$user = $_POST["customername"];
$_SESSION["cusName"] = $user;
?>

<!DOCTYPE html>
<html lang="en">
   <head>
   	   <meta charset="utf-8">
   	   <title>Hobby Selection Page</title>
   </head>
   <body>
        <p><a href="task12a.php">View Second Page for Results.</a></p>   
    </body>
</html>         