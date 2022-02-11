<?php
$host = 'localhost';
$user = 'testuser';
$pwd = 'D6I]EW]e2Z@g7T.R';
$db = 'laceaid';

$conn = mysqli_connect($host, $user, $pwd, $db);

if (!$conn) {
    die("ERROR in connection: " . mysqli_connect_error());
}


$username = $_POST["username"];
$timeElapsed = $_POST["timeElapsed"];
$totalDistance = $_POST["totalDistance"];
$mysql_qry = "insert into runRecords (username, timeElapsed, totalDistance) values ('$username', '$timeElapsed', '$totalDistance')";
    
if($conn->query($mysql_qry) === TRUE) {
    echo "Insert success";
} 
else {
    echo "Error: " . $mysql_qry . "<br>" . $conn->error;
}

mysqli_close($conn);

?>