<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vindaya Institute of Technology</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" >
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Top Navbar -->
  <div class="top-navbar">
    <div class="container">
      <p ><span id="email"><i class="fa-regular fa-envelope"></span></i><a href="mailto:contactsatna@vitsdpr.ac.in">contactsatna@vitsdpr.ac.in |</a></p>
      <p> <i class="fa-solid fa-phone"></i> +91-8966903524 </p>
      <div>
        <!-- <a href="#">Support</a> -->
      </div>
    </div>
  </div>



  <?php session_start(); ?>
<!-- Second Navbar (Nav2) -->
<nav class="nav2">
  <div class="nav2-container">
    <!-- Logo + College Name -->
    <div class="logo-container">
      <img src="download.png" alt="College Logo" class="college-logo">
      <a href="#" class="logo">Vindhya Institute of <br>Technology and Science</a>
    </div>

    <!-- Search Bar (Centered) -->
    <div class="search-box">
      <input type="text" placeholder="Search events..." />
      <button type="submit">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
    </div>

    <!-- Login & Sign Up Buttons -->
    <div class="auth-buttons">
<!--       
      <a href="login.php"><button class="login-btn">Login</button></a>
      <a href="role_signup.php"><button class="signup-btn">Sign Up</button></a> -->

     <?php if (isset($_SESSION['username'])): ?>
      <!-- Show after login -->
     <?php echo"Welcome ". $_SESSION['username']?> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAsklEQVR4nO2TMQrCQBBFXyViZx9LybXEa+hh1FKWlFYeRO8Q0eQAGVkYQUKcxGSszIPfLLv/scwu/AsLIAClJgNSz/IbILXEtcRDEBrKXzl6CEpDUHgIpCU/vcHDQ5AZgjifwaTGK1riRKIvptAEz/IRkzmwBa4NQ74AG93TizVw7/DR4p7VN8UzYN+hWGrZ6VmTCXDqUS6aMzC1BIcB5aKJt/9I5SCoLEHuIMjb5jDCO0/KJpyCdpvEYgAAAABJRU5ErkJggg==" alt="user">
     
  <form action="logout.php" method="post" style="display: inline;">
    <button type="submit" class="logout-btn">Logout</button>
  </form>


    <?php else: ?>
     
      <!-- Show before login -->
      <a href="login.php"><button class="login-btn">Login</button></a>
      <a href="role_signup.php"><button class="signup-btn">Sign Up</button></a>
    <?php endif; ?>


    </div>
  </div>
</nav>

  <!-- Hero Slider -->
  <section class="hero-slider">
    <div class="main-slides">
      
      <img src="1.png" class="slide active">
      <img src="3.png" class="slide">
      <img src="1.png" class="slide">

    </div>
     <div class="dots">
            <span class="dot active" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>
  </section>

  <!-- Upcoming Events -->
<section class = "up">
  <h2 class="heading">Upcoming Events</h2>


    <div class="event-container">
        <!-- Event 1 -->
        <div class="event-box" onclick="openModal('event1')">
            <img src="srijan.jpeg" alt="Artfinity Festival">
            <h3>Srijan - The Induction</h3>
            <p>March 26, 2025</p>
        </div>

        <!-- Event 2 -->
        <div class="event-box" onclick="openModal('event2')">
            <img src="oth.jpeg" alt="Science Bootcamp">
            <h3>Oath Ceremony</h3>
            <p>March 28, 2025</p>
        </div>

          <!-- Event 2 -->
          <div class="event-box" onclick="openModal('event3')">
              <img src="vits.jpg" alt="Science Bootcamp">
              <h3>Vits On Beats</h3>
              <p>March 28, 2025</p>
          </div>
        </div>
          <!-- Event 3 -->
          

  <div class="event-container">

    <div class="event-box" onclick="openModal('event4')">
      <img src="nav.jpeg" alt="MIT Conference">
      <h3>Nav-Utkarsh- The Garba Fest</h3>
      <p>April 02, 2025</p>
  </div>


      <!-- Event 2 -->
      <div class="event-box" onclick="openModal('event5')">
          <img src="carva.jpeg" alt="Science Bootcamp">
          <h3>Carvan</h3>
          <p>March 28, 2025</p>
      </div>

      <!-- Event 3 -->
      <div class="event-box" onclick="openModal('event6')">
          <img src="tirang.jpeg" alt="MIT Conference">
          <h3>Tarang -the kite fest</h3>
          <p>April 02, 2025</p>
      </div>
  </div>



     <!-- Event Detail Popups -->
     <div id="event1" class="modal">
      <div class="modal-content">
          <span class="close" onclick="closeModal('event1')">&times;</span>
          <img src="srijan.jpeg" alt="Artfinity Festival">
          <h2>Srijan - The Induction</h2>
          <p><strong>Date:</strong> March 26, 2025</p>
          <p>A cultural festival featuring dance, music, and drama. Enjoy an evening of artistic performances!</p>
          <a href="registration.php" <button class="register-btn">Register</button></a>
      </div>
  </div>

  <div id="event2" class="modal">
      <div class="modal-content">
          <span class="close" onclick="closeModal('event2')">&times;</span>
          <img src="oth.jpeg" alt="Science Bootcamp">
          <h2>Oath Ceremony</h2>
          <p><strong>Date:</strong> March 28, 2025</p>
          <p>A hands-on science and technology workshop with experts from leading institutes.</p>
          <a href="registration.php" <button class="register-btn">Register</button></a>
      </div>
  </div>

  <div id="event3" class="modal">
      <div class="modal-content">
          <span class="close" onclick="closeModal('event3')">&times;</span>
          <img src="vits.jpg" alt="MIT Conference">
          <h2>Vits On Beats</h2>
          <p><strong>Date:</strong> April 02, 2025</p>
          <p>A tech conference on innovations in AI and robotics, featuring keynotes from industry leaders.</p>
          <a href="registration.php" <button class="register-btn">Register</button></a>
      </div>
  </div>



  <div id="event4" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('event4')">&times;</span>
        <img src="nav.jpeg" alt="Artfinity Festival">
        <h2>Nav-Utkarsh- The Garba Fest</h2>
        <p><strong>Date:</strong> March 26, 2025</p>
        <p>A cultural festival featuring dance, music, and drama. Enjoy an evening of artistic performances!</p>
        <a href="registration.php" <button class="register-btn">Register</button></a>
    </div>
</div>

<div id="event5" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('event5')">&times;</span>
        <img src="carva.jpeg" alt="Science Bootcamp">
        <h2>Carvan</h2>
        <p><strong>Date:</strong> March 28, 2025</p>
        <p>A hands-on science and technology workshop with experts from leading institutes.</p>
        <a href="registration.php" <button class="register-btn">Register</button></a>
    </div>
</div>

<div id="event6" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('event6')">&times;</span>
        <img src="tirang.jpeg" alt="MIT Conference">
        <h2>Tarang -the kite fest</h2>
        <p><strong>Date:</strong> April 02, 2025</p>
        <p>A tech conference on innovations in AI and robotics, featuring keynotes from industry leaders.</p>
        <a href="registration.php" <button class="register-btn">Register</button></a>
    </div>
</div>

<!-- 
Place this where you want the dynamic events to show up: -->
    <section id="dynamicEvents" class="event-container"></section>




    <!-- Add Event Button
    <div class="center-button">
      <button class="add-event-btn" onclick="openEventForm()">+ Create New Event</button>
    </div>
    

Event Form Modal -->
<!-- <div id="eventFormModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeEventForm()">&times;</span>
    <h2>Create New Event</h2>
    <form id="eventForm">
      <input type="text" id="eventTitle" placeholder="Event Title" required><br>
      <textarea id="eventDescription" placeholder="Event Description" required></textarea><br>
      <input type="date" id="eventDate" required><br>
      <input type="url" id="eventImage" placeholder="Image URL" required><br>
      <button type="submit">Add Event</button>
    </form>
  </div>
</div> --> 




   <a href="explore.php" ><div class="exp">  <button class="explore-btn">Explore More</button></div></a>
  
    </div>
   
  </section>


  <!-- why participate -->
  <div class="inspire">
    <div class="why">
        <h2>Why Participate?</h2>
        <ul>
            <li><h3>✅ Gain Practical Experience</h3> – Organizing and participating in events helps you develop teamwork, leadership, and management skills.</li>
            <li><h3>✅ Showcase Your Talent</h3> – Whether you’re into dance, music, coding, debating, or sports, there’s something for everyone.</li>
            <li><h3>✅ Expand Your Network</h3> – Meet like-minded students, collaborate with industry experts, and build lifelong connections.</li>
            <li><h3>✅ Boost Your Confidence </h3>– Take the stage, lead a team, or pitch your ideas—events at VITS prepare you for real-world challenges.</li>
        </ul>
    </div>
    <div class="why-img">
      <dotlottie-player src="https://lottie.host/1288ec94-571e-4380-bdaa-4b8868811f2c/h8vYQUrLZh.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>
    </div>
</div>

<script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>


  <!-- Practical Training Slider -->
  <section class="practical-training">
    <h2>Vindaya's Live Event Practical Training</h2>
    <div class="training-slider-wrapper">
      <div class="training-slider">
        <div class="training-item"><img src="img4.jpeg" alt="Training 1"></div>
        <div class="training-item"><img src="boy.jpeg" alt="Training 2"></div>
        <div class="training-item"><img src="training3.jpeg" alt="Training 3"></div>
        <div class="training-item"><img src="training4.jpg" alt="Training 4"></div>
        <div class="training-item"><img src="training5.jpg" alt="Training 5"></div>
        <!-- Duplicate for infinite effect -->
        <div class="training-item"><img src="img4.jpeg" alt="Training 1"></div>
        <div class="training-item"><img src="boy.jpeg" alt="Training 2"></div>
        <div class="training-item"><img src="training3.jpeg" alt="Training 3"></div>
        <div class="training-item"><img src="training4.jpg" alt="Training 4"></div>
        <div class="training-item"><img src="training5.jpg" alt="Training 5"></div>
      </div>
    </div>
    <div class="btn-center">
      <a href= "view.html"><button class="view-more">View More</button></a>
    </div>
  </section>

  <!-- Event Video Section -->
<section class="event-video-section">
  <div class="video-overlay-text">
    <h2>Experience Our Grand Events</h2>
    <p>Witness the energy, glamour & practical learning at Vindaya Events</p>
  </div>
  <video class="event-video" autoplay muted loop>
    <source src="event.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</section>

  
  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2025 Vindaya Institute of Technology | All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>
