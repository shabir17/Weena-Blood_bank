<?php

//variables to get the contents of the for
$ID = $_POST['ID_number'];
$name = $_POST['name'];
$bloodgroup = $_POST['blood_group'];
$postaddress = $_POST['post_address'];

//phpinfo() external file;
$dbhost = 'localhost';
$dbuser = 'shabir';
$dbpass = 'Aventador12';
$dbname = 'blood_bank';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
  echo "Connection failed<br/>";
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO patients VALUES ('$name', '$ID_number', '$blood_group', '$post_address');";
$result = $conn->query($sql);
$return_arr = array();
        header("Location: blood_bank.php");
?>