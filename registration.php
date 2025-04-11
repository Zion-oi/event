<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Event Registration | Vindaya Institute</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background: linear-gradient(to right,rgb(12, 46, 118),rgb(6, 25, 81));
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.form-container {
  background-color: #fff;
  padding: 30px 40px;
  border-radius: 15px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
  width: 100%;
  max-width: 500px;
}

h2 {
  text-align: center;
  margin-bottom: 25px;
  color: #333;
}

.form-group {
  margin-bottom: 18px;
}

label {
  display: block;
  margin-bottom: 8px;
  color: #444;
  font-weight: 500;
}

input,
select,
textarea {
  width: 100%;
  padding: 10px 12px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 16px;
  transition: border-color 0.3s ease;
}

input:focus,
select:focus,
textarea:focus {
  border-color: #4e54c8;
  outline: none;
}

.submit-btn {
  width: 100%;
  background-color:rgb(4, 40, 117);
  color: #fff;
  font-size: 17px;
  padding: 12px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.submit-btn:hover {
  background-color: #3e43a4;
}

@media (max-width: 480px) {
  .form-container {
    padding: 25px;
  }

  h2 {
    font-size: 20px;
  }
}

</style>



  <div class="form-container">
    <h2>Event Participation Registration</h2>
    <form action="register.php" method="post" id="eventRegistrationForm">

      <div class="form-group">
        <label for="fullName">Full Name *</label>
        <input type="text" id="fullName" name="fullName" required>
      </div>

      <div class="form-group">
        <label for="email">Email Address *</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number *</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
      </div>

      <div class="form-group">
        <label for="collegeId">College ID *</label>
        <input type="text" id="collegeId" name="collegeId" required>
      </div>

      <div class="form-group">
        <label for="event">Select Event *</label>
        <select id="event" name="event" required>
          <option value="">-- Choose an event --</option>
          <option value="techfest">Tech Fest</option>
          <option value="cultural">Cultural Fest</option>
          <option value="sports">Sports Meet</option>
          <option value="seminar">Seminar</option>
        </select>
      </div>

      <div class="form-group">
        <label for="message">Additional Notes (optional)</label>
        <textarea id="message" name="message" rows="4" placeholder="Any special requirements or message..."></textarea>
      </div>

      <button type="submit" class="submit-btn">Register Now</button>
    </form>
  </div>
</body>
</html>
