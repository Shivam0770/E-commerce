<?php
$conn = mysqli_connect("localhost", "root", "", "artcart");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>