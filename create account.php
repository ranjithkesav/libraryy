
<?php
include 'config/db.php';

$std_name = $_POST['std_name'];
$std_email = $_POST['std_email'];
$std_phone = $_POST['std_phone'];
$std_password = $_POST['std_password'];
$std_cllgname = $_POST['std_cllgname'];



//$product_image = $_POST['product_image'];


///////////START IMAGE UPLOAD
///$filename = $_FILES["product_image"]["name"];

   ////$tempname = $_FILES["product_image"]["tmp_name"];  

       /// $folder = "product_images/".$filename;   
         ///if (move_uploaded_file($tempname, $folder)) {

            ///$msg = "Image uploaded successfully";

        //}else{

          //  $msg = "Failed to upload image";
          ///}
///////////END IMAGE UPLOAD
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO library (std_name ,std_email ,std_mobile,std_password,std_cllgname)
VALUES ('$std_name', '$std_email','$std_mobile','$std_password','$std_cllgname')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {

  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
