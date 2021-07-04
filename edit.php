
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
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];


echo $name;
echo gettype(strlen($phone_number));
echo $address;

if(strlen($name) !== 0){
  $sql = "UPDATE phonebook SET Name='$name' WHERE SN=$id";
  $result = $connect->query($sql);
  if($result == false){
    echo "Name insertion failed!!";
  }
}

if(strlen($phone_number) !== 0){
  $sql = "UPDATE phonebook SET Phone_number='$phone_number' WHERE SN=$id";
  $result = $connect->query($sql);
  if($result == false){
    echo "Phone_number insertion failed!!";
  }
}

if(strlen($address) !== 0){
  $sql = "UPDATE phonebook SET Address='$address' WHERE SN=$id";
  $result = $connect->query($sql);
  if($result == false){
    echo "Address insertion failed!!";
  }
}


$connect->close();

?>
