<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>
    <div class="container">
        <h2>Registration Page</h2>
        <form enctype="multipart/form-data" method="POST" action="register_logic.php" >

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
             
            
            <label for="avatar">Select avatar:</label>
            <input type="FILE" name="avatar" id="avatar" ><br><br>

            <input type="submit" value="Register">
        </form>

        <p class="login-link">Already registered? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>