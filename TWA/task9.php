<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prac 2 Task 9</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <?php
    $conn = mysqli_connect('localhost', 'TWA', 'TWA_test', 'factory');
    if ( !$conn ) {
      die("Connection failed: " . mysqli_connect_error());
    }
     $sql = "SELECT * FROM staff";
     $results =  mysqli_query($conn, $sql)
       or die ('Problem with query' . mysqli_error($conn));
  ?>
  <h1>Staff table</h1>
  <table>
    <tr>
      <th>staff ID</th>
      <th>staff Name</th>
    </tr> 
   <?php
    while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><a href = "task8.php?staffID=<?php echo $row["staffID"] ?>">
      <?php echo $row["staffID"] ?></a></td>
      <td><?php echo $row["staffName"]?></td>
      <!-- output the other fields here from the $row array -->
    </tr>
    <?php }
       mysqli_close($conn); ?>
    </table>
 </body>
 </html>
