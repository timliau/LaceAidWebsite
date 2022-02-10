<?php

$host = 'localhost';
$user = 'testuser';
$pwd = 'D6I]EW]e2Z@g7T.R';
$db = 'laceaid';

$conn = mysqli_connect($host, $user, $pwd, $db);

if (!$conn) {
    die("ERROR in connection: " . mysqli_connect_error());
}

$response = array();

$sql_query = "select * from runRecords";
$result = mysqli_query($conn, $sql_query);

if(mysqli_num_rows($result) > 0) {
    $response['success'] = 1;
	$runRecords = array();
    while ($row = mysqli_fetch_assoc($result)){
        array_push($runRecords, $row);
    }
    $response['runRecords'] = $runRecords;
} 
else {
    $response['success'] = 0;
    $response['message'] = 'No data';
}
echo json_encode($response);
mysqli_close($conn);

?>