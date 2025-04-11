<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" >
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="registercontainer">
        <div class="form-box hidden" id="signup-box">
            <h2>Sign Up</h2>
            <form method="POST" action="signup.php">
    <div class="input-group">
        <input type="text" name="fullname" placeholder="Full Name" required>
    </div>
    <div class="input-group">
        <input type="email" name="username" placeholder="Email" required>
    </div>
    <div class="input-group">
        <input type="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit" class="btn">Sign Up</button>
</form>

        </div>
    </div>
    
<!-- <script src="script.js"></script> -->
</body>
</html>

<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($fullname) && !empty($username) && !empty($password)) {
        $check_sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $check_sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            echo "⚠️ Email already registered. Please <a href='login.html'>log in</a>.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_sql = "INSERT INTO users (fullname, username, password) VALUES (?, ?, ?)";
            $insert_stmt = mysqli_prepare($conn, $insert_sql);
            mysqli_stmt_bind_param($insert_stmt, "sss", $fullname, $username, $hashed_password);

            if (mysqli_stmt_execute($insert_stmt)) {
                // ✅ Redirect to login after successful signup
                header("Location: login.php");
                exit();
            } else {
                echo "❌ Something went wrong. Please try again.";
            }
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "⚠️ Please fill in all fields.";
    }
}
?>






