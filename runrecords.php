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
    echo '<table class="table table-bordered table-hover table-condensed">';
    echo '<thead><tr><th title="Field #1">ID</th>';
    echo '<th title="Field #2">username</th>';
    echo '<th title="Field #3">timeElapsed</th>';
    echo '<th title="Field #4">totalDistance</th>';
    echo '</tr></thead>';
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($result)){
        // array_push($runRecords, $row);
        echo "<tr>";
        echo '<td align="right">' . $row['ID'] . '</td>';
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['timeElapsed'] . "</td>";
        echo '<td align="right">' . $row['totalDistance'] . '</td>';
        echo "</tr>";
    }
    echo "</tbody></table>";
    $response['runRecords'] = $runRecords;
} 
else {
    $response['success'] = 0;
    $response['message'] = 'No data';
}
// echo json_encode($response);
mysqli_close($conn);

?>