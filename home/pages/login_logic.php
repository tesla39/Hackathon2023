<?php
session_start();
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];
        $avtar= $row['avtar'];

        if ($password==$storedPassword) {
            $_SESSION['avtar'] = $avtar;
            $_SESSION['username'] = $username;
            header("Location: ../");
            exit();
        } else {

            echo "Invalid username or password.";
        }
    } else {

        echo "Invalid username or password.";
    }
}
?>