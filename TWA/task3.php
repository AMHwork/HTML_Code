<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prac2 Task 3 Form</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h1>Task 3 PHP form demo</h1>
    <form id="userinfo" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      <p>Please fill in the following form. All fields are mandatory.</p>
        
      <p>
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="firstname">
      </p>  
        
      <p>
        <label for="email">Email Address:</label>
        <input type="text" id="email" name="email">
      </p>
  
      <p>
        <label for="addr">Postal Address:</label>
        <textarea rows="5" cols="300" id="addr" name="postaddr"></textarea>
      </p>
  
      <p>
        <label for="sport">Favourite sport: </label>
        <select id="sport" name="favsport[]" size="4" multiple>
            <option value="soccer">Soccer</option>
            <option value="cricket">Cricket</option>
            <option value="squash">Squash</option>
            <option value="golf">Golf</option>
            <option value="tennis">Tennis</option>
            <option value="basketball">Basketball</option>
            <option value="baseball">Baseball</option>
        </select>
      </p>
  
      <p>
        <label for="list">Add me to the mailing list</label>
        <input type="checkbox" id="list" name="emaillist" value="Yes" checked>
      </p>
  
      <p><input type="submit" name="submit" value="submit"></p>
    </form>

     <?php
      // Here is where your preprocessing code goes
         if (isset($_POST["submit"])){
           echo "<h2>The following information was received from the user:</h2>";
           $fname = $_POST["firstname"];
           echo "<p><strong>First Name: </strong>"; 
           echo "$fname</p>";
           $email = $_POST["email"];
           echo "<p><strong>Email: </strong>";
           echo "$email</p>";
           $addr = $_POST["postaddr"];
           echo "<p><strong>Postal Address: </strong>";
           echo "$addr</p>";
           $sportstr = $_POST["favsport"];
           echo "<p><strong>sport: </strong>";
           foreach($_POST["favsport"] as $sportstr){
             echo  "$sportstr ";
           }
           echo "</p>";
           $checkbox = $_POST["emaillist"];
           echo "<p><strong>checkList: </strong>";
           echo "$checkbox</p>";
         }
     ?>
  </body>
</html>

