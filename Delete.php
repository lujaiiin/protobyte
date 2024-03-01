<?php
include "db1.php";

if (isset($_POST["title"])) {
    $t = $_POST["title"];
    
    // Prepare the SQL statement
    $stmt = $conn->prepare("DELETE FROM `product` WHERE `Title` = ?");

    // Bind the parameter to the SQL statement
    $stmt->bind_param("s", $t);

    // Execute the SQL statement
    $stmt->execute();

    // Close the statement
    $stmt->close();
header("location: index.php");
exit();
}