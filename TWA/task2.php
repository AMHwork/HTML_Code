<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Task 2</title>
  </head>
  <body>
    <?php
        //obtain the firstname input from the $_GET array
        $namestr = $_POST["firstname"];
        $postaddrstr = $_POST["postaddr"];
        $sportstr = $_POST["favsport"];
        $checkbox = $_POST["emaillist"];
       
    ?>

    <p>The following information was recieved from the user:</p>
    <p><strong>name = </strong> <?php echo "$namestr"; ?></p>
    <p><strong>email = </strong> <?php echo "$emailstr"; ?></p>
    <p><strong>address = </strong> <?php echo "$postaddrstr"; ?></p>
    <p><strong>sport = </strong> 
    <?php foreach($_POST['favsport'] as $sportstr){
      echo  "$sportstr ";
    } ?></p>

     <p><strong>checked = </strong> <?php echo "$checkbox"; ?></p>
    <!--output the other from inputs here -->
  </body>
</html>
