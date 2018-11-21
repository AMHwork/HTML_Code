<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <title>Prac 2 Task 13</title>
</head>

<body>
  <?php

     $firstName = $lastName = $state = $postCode = "";
     $reqfName = $reqlName = $reqState = $reqPostCode = "";

     if ($_SERVER["REQUEST_METHOD"] == "POST"){

        // checks for first Name
        if (empty($_POST["firstname"])){
           $reqfName = "* First Name is required";
        }
        else {
           $firstName = $_POST["firstname"];
           if (!preg_match("/^[a-zA-Z]*$/", $firstName)){
              $reqfName = "* Only alphabetical characters";
           }
        }


        // checks for last Name
        if (empty($_POST["surname"])){
           $reqlName = "* Last Name is required";
        }
        else {
           $lastName = $_POST["lastname"];
           if (!preg_match("/^[a-zA-Z]*$/", $lastName)){
              $reqlName = "* Only alphabetical characters";
           }
        }
        

        // checks for State
        if (empty($_POST["state"])){
           $reqState = " * Please choose a State";
        }
        else {
           $reqState= "";
        }


        // checks for postcode
        if (empty($_POST["postcode"])){
           $reqPostCode = "* Postcode is required";
        }
        else {
           $postCode = $_POST["postcode"];
           if (!preg_match("/^\d{4}$/", $postCode)){
              $reqPostCode = "* Only numerical characters";
           }
        }
        
     }
  
   

  ?>
  <h1>Customer Information Collection</h1>
  <p>Please enter the following <strong>Customer Information</strong>. All fields are required.</p>

  <form method="post" action="task13.php" id="custinfo" >
  	<p>
  	  <label for="fname">First Name:</label>
	    <input type="text" id="fname" name="firstname" size="50">
      <span class="error"><?php echo $reqfName;?></span>
      <br><br>
	  </p>
	
	  <p>
	    <label for="lname">Last Name:</label>
	    <input type="text" id="lname" name="surname" size="50">
      <span class="error"><?php echo $reqlName;?></span>
      <br><br>
	  </p>
    
	  <p>
	    <label for="state">State:</label>
      <select name="state" id="state">
   		  <option value="0">--</option>
        <option value="ACT">ACT</option>
        <option value="NSW">NSW</option>
        <option value="NT">NT</option>
        <option value="QLD">QLD</option>
        <option value="SA">SA</option>
        <option value="TAS">TAS</option>
        <option value="VIC">VIC</option>
        <option value="WA">WA</option>
      </select>
      <span class="error"><?php echo $reqState;?></span>
      <br><br>
    </p>
	
   	<p>
   	  <label for="pcode">Postcode:</label>
	    <input type="text" id="pcode" name="postcode" size="4">
      <span class="error"><?php echo $reqPostCode;?></span>
      <br><br>
	  </p>
	
    <p>
      <input type="submit" name="submit" value="Submit"/>
    </p>
  </form>
</body>
</html>
