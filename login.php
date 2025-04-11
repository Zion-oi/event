<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="registercontainer">
        <div class="form-box" id="login-box">
            <h2>Login</h2>
            <form method="POST" action="login.php">
    <div class="input-group">
        <input type="email" name="username" placeholder="Email" required>
    </div>
    <div class="input-group">
        <input type="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit" class="btn">Login</button>
    <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
</form>

        </div>
        
  
        <!-- <script src="script.js"></script> -->
</body>
</html>

<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT id, fullname, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) == 1) {
        mysqli_stmt_bind_result($stmt, $id, $fullname, $hashed_password);
        if (mysqli_stmt_fetch($stmt)) {
            if (password_verify($password, $hashed_password)) {
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $fullname;

                header("location: index.php");
                exit;
            } else {
                echo "❌ Invalid password.";
            }
        }
    } else {
        echo "❌ No account found with that email.";
    }

    mysqli_stmt_close($stmt);
}

session_start();
$_SESSION["username"] = $username; // must match variable
$_SESSION["loggedin"] = true;

header("Location: index.php"); // redirect to home or dashboard
exit();

?>

