<?php
include "../config.php";
if (isset($_GET['id'])) {
    $cid = $_GET['id'];
    $sql = "DELETE FROM `blogs` WHERE `id`='$cid'";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        $sql = "ALTER TABLE blogs AUTO_INCREMENT =1";
        header("Location: index.php");
        // echo "Record deleted successfully";
    } else {
        echo "Error during deletion";
    }
}
?>