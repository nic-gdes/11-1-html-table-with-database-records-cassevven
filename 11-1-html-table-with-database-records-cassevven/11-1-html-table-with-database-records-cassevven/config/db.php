<?php
$conn = mysqli_connect("db:3306", "root", "root", "products");

if(mysqli_connect_errno()) {
    echo "Databse error: " .mysqli_connect_error();
}
?>