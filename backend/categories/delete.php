<?php
include "../config.php";
if (isset($_GET['id'])) {
    $category_id = $_GET['id'];
    $sql = "DELETE FROM `categories` WHERE `id`='$category_id'";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        $sql = "ALTER TABLE users AUTO_INCREMENT =1";
        header("Location: index.php");
        // echo "Record deleted successfully";
    } else {
        echo "Error during deletion";
    }
}
?>