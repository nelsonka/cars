<?php

  require('socket.php');
  
  // escape variables for security
  $name = $_POST['name'];
  $phone =$_POST['phone'];
  $email =$_POST['email'];
  $zip = $_POST['zip'];
  $contact = $_POST['contact'];
  $make = $_POST['make'];
  $model = $_POST['model'];
  $engine = $_POST['engine'];
  
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  return;
  
  
  $sql="INSERT INTO sales (name, phone, email, zip, contact, make, model, engine)
  VALUES ('$name', '$phone', '$email', '$zip', '$contact', '$make', '$model', '$engine')";
  
  if (!mysqli_query($connection,$sql)) {
    die('Error: ' . mysqli_error($connection));
  }
  echo "Record Successfully Added";
  
$connection = mysql_connect('localhost', 'nelsonka', ''); //The Blank string is the password
mysql_select_db('random');  
  
$query = "SELECT * FROM sales";
$result = mysql_query($query);

echo "<table border='1'>".
            "<tr>".
                "<th>ID:</th>".
                "<th>Name:</th>".
                "<th>Phone:</th>".
                "<th>Email:</th>",
                "<th>Zip:</th>",
                "<th>Contact:</th>",
                "<th>Make:</th>",
                "<th>Model:</th>",
                "<th>Engine:</th>".
                "<th>Date:</th>".
            "<tr>";
                
        while($row = mysql_fetch_array($result)) {
            echo "<tr>".
                    "<td>".$row["Id"]."</td>".
                    "<td>".$row["name"]."</td>".
                    "<td>".$row["phone"]."</td>".
                    "<td>".$row["email"]."</td>".
                    "<td>".$row["zip"]."</td>".
                    "<td>".$row["contact"]."</td>".
                    "<td>".$row["make"]."</td>".
                    "<td>".$row["model"]."</td>".
                    "<td>".$row["engine"]."</td>".
                    "<td>".$row["date"]."</td>".
                "</tr>";       
        }
   // }
    
    echo "</table>";

  
  //mysqli_close($con);
?>

<p><a href="./">Return to Form</a></p>


<style>

body {
  background-color: #E0FFFF;
}

</style>