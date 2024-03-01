<?php
include "db1.php";

if (isset($_POST["title"]) && isset($_POST["des"]) && isset($_POST["price"]) && isset($_POST["price1"])) {
    $t = $_POST["title"];
    $d = $_POST["des"];
    $p = $_POST["price"];
    $p1 = $_POST["price1"];


    $i = basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], "img/".$i);
    $image = "img/".$i;

    $sql = "INSERT INTO `product` (`Image`, `Title`, `Des`, `Price`, `Price1`) VALUES ( '$image', '$t', '$d', '$p', '$p1');";

    mysqli_query($conn, $sql);
header("location: index.php");
exit();
}