<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prac 2 Task 4</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <?php
    $conn = mysqli_connect('localhost', 'TWA', 'TWA_test', 'factory');
    if ( !$conn ) {
      die("Connection failed: " . mysqli_connect_error());
    }
     $sql = "SELECT * FROM purchase";
     $results =  mysqli_query($conn, $sql)
       or die ('Problem with query' . mysqli_error());
  ?>
  <h1>Purchase table</h1>
  <table>
    <tr>
      <th>Order ID</th>
      <th>Product Code</th>
      <th>Quantity </th>
      <th>Order Date</th>
      <th>Shipping Date</th>
      <th>Shipped</th>
      <th>Customer ID</th>
      <th>Staff ID</th>
    </tr> 
   <?php
    while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><?php echo $row["orderID"]?></td>
      <td><?php echo $row["productCode"]?></td>
      <td><?php echo $row["quantity"]?></td>
      <td><?php echo $row["orderDate"]?></td>
      <td><?php echo $row["shippingDate"]?></td>
      <td><?php echo $row["shipped"]?></td>
      <td><?php echo $row["customerID"]?></td>
      <td><?php echo $row["staffID"]?></td>
      <!-- output the other fields here from the $row array -->
    </tr>
    <?php }
       mysqli_close($conn); ?>
    </table>
 </body>
 </html>


