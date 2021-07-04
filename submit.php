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

$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

echo $name;
echo $phone_number;
echo $address;

$sql = "INSERT INTO phonebook(Name, Phone_number, Address) VALUES('$name', '$phone_number', '$address')";
$result = $connect->query($sql);


if($result == false){
  echo "Error while insertion!!";
}
else{
  echo "Insertion successful!!";
}


$connect->close();

?>
