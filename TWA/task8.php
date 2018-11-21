<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Task 8</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <?php
    $conn = mysqli_connect('localhost', 'TWA', 'TWA_test', 'factory');
    if ( !$conn ) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $staff = $_GET["staffID"];
    $sql = "SELECT DISTINCT orderID, orderDate, shippingDate, staffName FROM purchase
            INNER JOIN staff On purchase.staffID = staff.staffID 
            WHERE purchase.staffID = '$staff'
            ORDER BY purchase.shippingDate ASC";
    $results =  mysqli_query($conn, $sql)
       or die ('Problem with query' . mysqli_error());
    $check = mysqli_num_rows($results); 
    if ($check <= 0){
       echo "staff ID doesn't Exist";
    }   
    else { ?>
    <h1>Final Results</h1>
    <table>
      <tr>
        <th>Order ID</th>
        <th>Order Date</th>
        <th>Shipping Date</th>
        <th>Staff Name</th>
      </tr> 
     <?php } ?>
     <?php
      while ($row = mysqli_fetch_array($results)) { ?>
      <tr>
        <td><?php echo $row["orderID"]?></td>
        <td><?php echo $row["orderDate"]?></td>
        <td><?php echo $row["shippingDate"]?></td>
        <td><?php echo $row["staffName"]?></td>
        <!-- output the other fields here from the $row array -->
      </tr>
      <?php }
         mysqli_close($conn);?>
      </table>    
  </body>
</html>
