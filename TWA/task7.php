<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prac 2 Task 7</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <?php
    $conn = mysqli_connect('localhost', 'TWA', 'TWA_test', 'factory');
    if ( !$conn ) {
      die("Connection failed: " . mysqli_connect_error());
    }
     $sql = "SELECT DISTINCT orderID, productCode, quantity, firstName, lastName FROM purchase
             INNER JOIN customer On purchase.customerID = customer.customerID 
             ORDER BY lastName, firstName";
     $results =  mysqli_query($conn, $sql)
       or die ('Problem with query' . mysqli_error());
  ?>
  <h1>Product table</h1>
  <table>
    <tr>
      <th>orderID</th>
      <th>Product Code</th>
      <th>Quantity</th>
      <th>First Name</th>
      <th>Last Name</th>
    </tr> 
   <?php
    while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><?php echo $row["orderID"]?></td>
      <td><?php echo $row["productCode"]?></td>
      <td><?php echo $row["quantity"]?></td>
      <td><?php echo $row["firstName"]?></td>
      <td><?php echo $row["lastName"]?></td>
      <!-- output the other fields here from the $row array -->
    </tr>
    <?php }
       mysqli_close($conn); ?>
    </table>
 </body>
 </html>
