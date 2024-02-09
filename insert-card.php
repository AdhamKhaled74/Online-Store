<?php
include("config.php");
if (isset($_POST["add"])) {
$NAME= $_POST["name"];
$PRICE = $_POST["price"];
    $insert = "INSERT INTO addcartt (name , price) VALUES ('$NAME','$PRICE')";
    mysqli_query($conn, $insert);
    header('location:/OnlineShop/card.php');
}
?>