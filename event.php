<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Event Manager</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="center-button">
    <button class="add-event-btn" onclick="openEventForm()">+ Create New Event</button>
  </div>

  <!-- Popup Form -->
  <div class="popup-overlay" id="popupForm">
    <div class="popup-content">
      <h2>Add New Event</h2>
      <form action="add_event.php" method="POST" enctype="multipart/form-data">
  <input type="text" name="title" placeholder="Event Title" required>
  <input type="date" name="date" required>
  <input type="time" name="time" required>
  <input type="file" name="image" accept="image/*" required>
  <div class="popup-buttons">
    <button type="submit">Add Event</button>
    <button type="button" onclick="closeEventForm()">Cancel</button>
  </div>
</form>

    </div>
  </div>

  <!-- Event Display Section -->
  <div class="event-container">
  <?php
  $conn = new mysqli("localhost", "root", "", "event_manager");
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $result = $conn->query("SELECT * FROM events ORDER BY id DESC");

  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo '
          <div class="event-box">
              <h3>' . htmlspecialchars($row['title']) . '</h3>
              <p><strong>Date:</strong> ' . htmlspecialchars($row['date']) . '</p>
              <p><strong>Time:</strong> ' . htmlspecialchars($row['time']) . '</p>
              <img src="uploads/' . htmlspecialchars($row['image']) . '" alt="Event Image" style="width:100%; max-width:300px;">
          </div>';
      }
  } else {
      echo "<p>No events found.</p>";
  }

  $conn->close();
  ?>
</div>

<script src="script.js"></script>
 
</body>
</html>
