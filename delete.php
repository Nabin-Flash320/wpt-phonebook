<?php

$server_name = "localhost";
$user_name = "root";
$password = "Nabin&dangi320";
$database = "wpt";

//Creating a connection.
$connect = mysqli_connect($server_name, $user_name, $password, $database);
//Checking the connection.
if($connect->connect_error){
  die("Connection failed => ".$connect->connect_error);
}

$id = $_POST['id'];
echo $id;

$sql = "DELETE FROM phonebook WHERE SN='$id'";
$result = $connect->query($sql);
if($result == false){
  echo "Error while deletion!!";
}
else{
  echo "Deletion successful!!";
}

$connect->close();


?>
