<?php
include "connections/db_conn.php";

$id = $_GET["CID"];
$sql = "DELETE FROM `models` WHERE CID = $id";
$result = mysqli_query($conn, $sql);

if($result) {
    header("Location: dashboard.php?msg=Data deleted successfully");

}else{
    echo "Failed: " . mysqli_error($conn);
}
?>