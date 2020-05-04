<?php

echo '
<head>
  <title>Pateints</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="style.css"></head>';

$dbhost = 'localhost';
$dbuser = 'shabir';
$dbpass = 'Aventador12';
$dbname = 'blood_bank';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
  echo "Connection failed<br/>";
  die("Connection failed: " . $conn->connect_error);
}


//Nav Bar or Menu Bar
echo "<nav class='navbar navbar-expand-sm bg-light navbar-light'>
        <div class='container-fluid' id='1'>
        <span class='cover'>
        <ul class='navbar-nav'>
            <li class='nav-item active'>
                <a class='nav-link' href='index.php'>BLOOD PLUG</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='patients.php'>Patients</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='add_patients.php'>Add Patients</a>
            </li>
        </ul>
    </div>
  </span>
</nav>";

//form for inserting data into the pendant table
echo "<div class='container'><br><h1>Add patients details:</h1>";
echo "<form action='target_patients.php' method='POST'>
<br>
Name: <input type='text' name='name' class='form-control'> <br>
ID: <input type='number' name='ID_number' class='form-control' required=true> <br>
Blood Group: <input type='text' name='blood_group' class='form-control'> <br>
Post Address: <input type='text' name='post_address' class='form-control'> <br>
<button type='submit' class='btn btn-dark form-control'>Add</button>
</form></div>";

//close the connection - to prevent server overflow
$conn->close();
?>