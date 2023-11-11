<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $image=$_FILES["avatar"];
    
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    $target_path = "avatars/";
    $target_path = $target_path.basename( $image['name']); 

    if ($result && mysqli_num_rows($result) > 0) {
        echo "Username already taken.";
    } else {
          if(move_uploaded_file($image['tmp_name'], $target_path))
          {
            $file=basename( $image['name']);
            $insertQuery = "INSERT INTO user (username, password, avtar) VALUES ('$username', '$password', '$file')";
            $insertResult = mysqli_query($connection, $insertQuery);

            if ($insertResult) {
                header("Location: register_sucess.php");
                exit();
            } else {
                echo "Registration failed. Please try again.";
            }
        } else {
            echo "Failed to upload avatar. Please try again.";
        }
    }
}
?>