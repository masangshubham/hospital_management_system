<?php
$con=mysqli_connect('localhost','root','','hospital');

    $Name = $_POST['Name'];
    $Number = $_POST['Number'];
    $email = $_POST['email'];
    $date = $_POST['date'];


$sql = "INSERT INTO patient_info (Name,Number,email,date) VALUES('$Name','$Number','$email','$date')";

$rs = mysqli_query($con,$sql);

if($rs)
{
  echo "Records Inserted";
}else
{
	echo "Error".$con->error;
}

?>