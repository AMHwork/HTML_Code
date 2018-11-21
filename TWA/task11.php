<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prac 2 Task 10</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <?php
    $conn = mysqli_connect('localhost', 'TWA', 'TWA_test', 'factory');
    if ( !$conn ) {
      die("Connection failed: " . mysqli_connect_error());
    }
     $sql = "SELECT staffID, staffName FROM staff";
     $results =  mysqli_query($conn, $sql)
       or die ('Problem with query' . mysqli_error($conn));
  ?>
  <form id="staff" action="task8.php" method="get">
  <h1>staff selection</h1>

    <tr>
      <p>Select a staff ID to view information</p>
    </tr> 
   <label>Staff Table<label>
   <?php
    while ($row = mysqli_fetch_array($results)) {
       echo '<input type="radio" name="staffID" 
       value="' .$row["staffID"]. '">' .$row["staffName"]. '<br>'; 
    }
    mysqli_close($conn); ?>
    <p><input type="submit" name="submit"></p>
    
 </body>
 </html>
