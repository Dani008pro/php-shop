<?php
    $host = "localhost";
    $user = "admin";
    $pass = "";
    $db = "store-db";

    $conn = mysqli_connect("localhost", "root", "", "store-db");
    if (mysqli_connect_errno()) {
        echo "Connection failed: " . mysqli_connect_error();
        exit();
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: http://localhost/php-shop-main/public/products.php");  
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
