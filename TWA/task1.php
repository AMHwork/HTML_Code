<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Task 1</title>
  </head>
  <body>
    <?php
        //obtain the firstname input from the $_GET array
        $namestr = $_GET["firstname"];
        //obtain the values for the other input devices here
        $emailstr = $_GET["email"];
        $postaddrstr = $_GET["postaddr"];
        $sportstr = $_GET["favsport"];
        $checkbox = $_GET["emaillist"];

    ?>

    <p>The following information was recieved from the user:</p>
    <p><strong>name = </strong> <?php echo "$namestr"; ?></p>
    <p><strong>email = </strong> <?php echo "$emailstr"; ?></p>
    <p><strong>address = </strong> <?php echo "$postaddrstr"; ?></p>
    <p><strong>sport = </strong> <?php echo "$sportstr"; ?></p>
    <p><strong>checked = </strong> <?php echo "$checkbox"; ?></p>
    <!--output the other from inputs here -->
  </body>
</html>


// use single quotes when not passing a variable since it saves time in the processing 
foreach($_post['favsport'] as $sport){
  echo $sport;
}