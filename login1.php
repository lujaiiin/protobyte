<?php
include "db1.php";
$email = $_POST["ema"];
$password = $_POST["pass"];

$sql = "SELECT * FROM user WHERE Email='$email' AND Password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1)
{
    $row = mysqli_fetch_assoc($result);
         if ($row['Email'] === $email && $row['Password'] === $password) {
    $_SESSION['Email'] = $row['Email'];
    $_SESSION['Password'] = $row['Password'];
    header("Location: dashbord.php");
    exit();
}}
else {
    echo mysqli_num_rows($result);
}
