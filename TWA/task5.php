<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prac 3 Task 5</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <?php
    $conn1 = mysqli_connect('localhost', 'TWA', 'TWA_test', 'factory');
    $conn2 = mysqli_connect('localhost', 'TWA', 'TWA_test', 'factory');
    $conn3 = mysqli_connect('localhost', 'TWA', 'TWA_test', 'factory');
    $conn4 = mysqli_connect('localhost', 'TWA', 'TWA_test', 'factory');
    if ( !$conn1 || !$conn2 || !$conn3 || !$conn4) {
      die("Connection failed: " . mysqli_connect_error());
    }
     $sql1 = "SELECT * FROM purchase";
     $results1 =  mysqli_query($conn1, $sql1)
       or die ('Problem with query' . mysqli_error());
     $sql2 = "SELECT * FROM customer";
     $results2 =  mysqli_query($conn2, $sql2)
       or die ('Problem with query' . mysqli_error());
     $sql3 = "SELECT * FROM product";
     $results3 =  mysqli_query($conn3, $sql3)
       or die ('Problem with query' . mysqli_error());  
     $sql4 = "SELECT * FROM staff";
     $results4 =  mysqli_query($conn4, $sql4)
       or die ('Problem with query' . mysqli_error());
  ?>
  <h1>Purchase table</h1>
  <table>
    <tr>
      <th>Order ID</th>
      <th>Product Code</th>
      <th>Quantity</th>
      <th>Order Date</th>
      <th>Shipping Date</th>
      <th>Shipped</th>
      <th>Customer ID</th>
      <th>Staff ID</th>
    </tr> 
   <?php
    while ($row = mysqli_fetch_array($results1)) { ?>
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
       mysqli_close($conn1); ?>
    </table>

  <h1>Customer table</h1>
  <table>
    <tr>
      <th>Customer ID</th>
      <th>First Name </th>
      <th>Last Name</th>
      <th>Address</th>
      <th>Suburb</th>
      <th>State</th>
      <th>Postcode</th>
    </tr> 
   <?php
    while ($row = mysqli_fetch_array($results2)) { ?>
    <tr>
      <td><?php echo $row["customerID"]?></td>
      <td><?php echo $row["firstName"]?></td>
      <td><?php echo $row["lastName"]?></td>
      <td><?php echo $row["address"]?></td>
      <td><?php echo $row["suburb"]?></td>
      <td><?php echo $row["state"]?></td>
      <td><?php echo $row["postcode"]?></td>
      <!-- output the other fields here from the $row array -->
    </tr>
    <?php }
       mysqli_close($conn2); ?>
    </table>  

  <h1>Product table</h1>
  <table>
    <tr>
      <th>Product Code</th>
      <th>name</th>
      <th>Quantity in Stock</th>
      <th>Price</th>
    </tr> 
   <?php
    while ($row = mysqli_fetch_array($results3)) { ?>
    <tr>
      <td><?php echo $row["productCode"]?></td>
      <td><?php echo $row["name"]?></td>
      <td><?php echo $row["quantityInStock"]?></td>
      <td><?php echo $row["price"]?></td>
      <!-- output the other fields here from the $row array -->
    </tr>
    <?php }
       mysqli_close($conn3); ?>
    </table>   
    
    <h1>Staff table</h1>
    <table>
      <tr>
        <th>Staff ID</th>
        <th>staff Name</th>
      </tr> 
    <?php
    while ($row = mysqli_fetch_array($results4)) { ?>
    <tr>
      <td><?php echo $row["staffID"]?></td>
      <td><?php echo $row["staffName"]?></td>
      <!-- output the other fields here from the $row array -->
    </tr>
    <?php }
       mysqli_close($conn4); ?>
    </table>     
 </body>
 </html>


