<?php

echo '
<head>
  <title>donate</title>
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
                <a class='nav-link' href='index.php'>WEENA</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='Donor.php'>Donate Blood</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='branch.php'>Branch number</a>
            </li>
        </ul>
    </div>
  </span>
</nav>";


//SQL Query for displayijng the tuples and attributes from project relation
$sql = "SELECT * FROM donate;";
$result = $conn->query($sql);
$return_arr = array();

echo "<div class='container'><form style= 'display:none'>
<input type='text'></form><br><h1>Donated Blood Destination </h1></div>";
 
//Table that display the tuples and attributes from Project Table
echo "<div class='container'><table class='table table-bordered table-hover'><tr>
<td><strong>Branch Number<strong></td>";


while($row = $result->fetch_assoc())
{
        //*note: echo $row['in here you have too the same coloumn name as ur database'];
        echo "<tr><td>";

        echo $row["branch_number"];
        echo "</td><td>";

        echo "</tr></div>";
}

?>