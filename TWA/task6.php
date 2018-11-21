<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prac 2 Task 6</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <?php
    $conn = mysqli_connect('localhost', 'TWA', 'TWA_test', 'factory');
    if ( !$conn ) {
      die("Connection failed: " . mysqli_connect_error());
    }
     $sql = "SELECT * FROM product
             WHERE quantityInStock > 10 ORDER BY quantityInStock ASC ";
     $results =  mysqli_query($conn, $sql)
       or die ('Problem with query' . mysqli_error());
  ?>
  <h1>Product table</h1>
  <table>
    <tr>
      <th>Name</th>
      <th>Quantity in Stock</th>
      <th>price</th>
    </tr> 
   <?php
    while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><?php echo $row["name"]?></td>
      <td><?php echo $row["quantityInStock"]?></td>
      <td><?php echo $row["price"]?></td>
      <!-- output the other fields here from the $row array -->
    </tr>
    <?php }
       mysqli_close($conn); ?>
    </table>
 </body>
 </html>


