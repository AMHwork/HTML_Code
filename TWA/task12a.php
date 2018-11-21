<?php

session_start();

if (!$_SESSION["cusHobby"] || !$_SESSION["cusName"]){

	<meta http-equiv="refresh" content="0;URL=task12.html" />
}
else {
	$hobbyResult = $_SESSION["cusHobby"];
	$nameResult = $_SESSION["cusName"];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<title>Session Example Page Results</title>
    <head>
    <body>
        <?php
            echo "<p> The Customer's Name is: $nameResult</p>";
            echo "<p> The Customer's Favourite Hobby is: $hobbyResult</p>";
        ?>
    </body>
</html>             	