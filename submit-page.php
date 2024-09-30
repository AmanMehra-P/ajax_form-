<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax";
 

$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn)
{
   die("sorry we failed to connect: " .mysqli_connect_error());
}
else{

   echo "connection wass succesfully";
}



if(isset($_POST))
{	 

	 $email = $_POST['email'];
	 $password = $_POST['password'];

	 $sql = "INSERT INTO banner (email,password) VALUES ('$email','$password')";
    
     if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
   // header("Location: http://localhost/ajaxtut/ajax2.php");
 
exit;

      $conn->close();
?>
  


