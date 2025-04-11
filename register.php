<?php
$host = "localhost";
$user = "root";
$password = ""; // Leave empty for XAMPP
$database = "login";

// Connect to database
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$collegeId = $_POST['collegeId'];
$event = $_POST['event'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO participants (fullName, email, phone, collegeId, event, message)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $fullName, $email, $phone, $collegeId, $event, $message);

if ($stmt->execute()) {
  echo "";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>









<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Successful</title>
  <link rel="stylesheet" href="success.css">
</head>
<body>

<style>
    body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', sans-serif;
  background: linear-gradient(135deg, #4e54c8, #8f94fb);
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.success-container {
  text-align: center;
}

.success-box {
  background: white;
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
  max-width: 500px;
  width: 90%;
}

h1 {
  color: #4e54c8;
  margin-bottom: 10px;
}

p {
  color: #333;
  font-size: 16px;
  margin-bottom: 30px;
}

.home-btn {
  background-color: #4e54c8;
  color: white;
  text-decoration: none;
  padding: 12px 25px;
  border-radius: 8px;
  font-weight: bold;
  transition: background-color 0.3s;
}

.home-btn:hover {
  background-color: #3e43a4;
}

</style>


  <div class="success-container">
    <div class="success-box">
      <h1>🎉 Registration Successful!</h1>
      <p>Thank you for registering. We look forward to seeing you at the event!</p>
      <a href="index.php" class="home-btn">⬅ Back to Home</a>
    </div>
  </div>
</body>
</html>
