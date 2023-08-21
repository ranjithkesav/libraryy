<!DOCTYPE html>
<html>
<body>

<?php
include 'config/db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM library";
$result = $conn->query($sql);

        //print_r($row);
   
?>
<table>
  <tr>
    <th>Sno</th>
    <th>std_name</th>
    <th>std_email</th>
    <th>std_mobile</th>
    <th>std_password</th>
    <th>std_cllgname</th>
  </tr>
  <?php
$abid=1;
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
  ?>
  <tr>
    <td><?php echo $abid; ?></td>
    <td><?php echo $row['std_name']; ?></td>
    <td><?php echo $row['std_email']; ?></td>
    <td><?php echo $row['std_mobile']; ?></td>
     <td><?php echo $row['std_password']; ?></td>
    <td><?php echo $row['std_cllgname']; ?></td>
    
  </tr>
 <?php
 $abid++;
 }
} else {
    echo "0 results";
}

$conn->close();
 ?>
</table>

</body>
</html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
