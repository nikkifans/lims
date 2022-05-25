<?php
include'connection.php';
$client_id = $_GET["client_id"];
 
$sql = "UPDATE `services` SET  `status`='Approved' WHERE `policy_number` = '$client_id'"; 
if ($conn->query($sql) === true) {
     header("Location: claimClient.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>