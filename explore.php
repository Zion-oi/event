<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="style.css">
    <title>Document</title>
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



  <style>


  .navbar {
    background:  #6ea1c3;
    padding: 0.2rem 0.6rem;
    color: rgb(10, 5, 22);
    font-family: 'Segoe UI', sans-serif;
    position: sticky;
top: 0;
z-index: 1000;


left: 0;
width: 100%;

  }
  
  .navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: rgb(7, 4, 14);
  }
  
  .nav-links {
    list-style: none;
    display: flex;
    gap: 1.5rem;
  }
  
  .nav-links li a {
    color: rgb(12, 3, 3);
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s ease;
  }
  
  .nav-links li a:hover {
    color: #e0f7ff;
  }
  
  /* Mobile Toggle */
  .menu-toggle {
    display: none;
    font-size: 1.8rem;
    cursor: pointer;
  }
  
  /* Responsive */
  @media (max-width: 768px) {
    .nav-links {
      position: absolute;
      top: 70px;
      right: 0;
      background: #0055ff;
      flex-direction: column;
      width: 200px;
      text-align: right;
      padding: 1rem;
      display: none;
    }
  
    .nav-links.active {
      display: flex;
    }
  
    .menu-toggle {
      display: block;
    }
  }</style>
  
  <nav class="navbar">
    <div class="navbar-container">
      <div class="logo">Vindhya Institute of <br>Technology and Science</div>
      <ul class="nav-links" id="navLinks">
        <li><a href="index.html">Home</a></li>
        <!-- <li><a href="#">Events</a></li> -->
        <li><a href="view.html">Gallery</a></li>
        <li><a href="footer">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="menu-toggle" id="menuToggle">&#9776;</div>
    </div>
  </nav>

    
<!-- Upcoming Events -->
<section class = "up">
    <h1 class="heading">Events</h1>
  
      <div class="event-container1">
          <!-- Event 1 -->
          <div class="event-box1" onclick="openModal('event1')">
              <img src="srijan.jpeg" alt="Artfinity Festival">
              <h3>Srijan - The Induction</h3>
              <p>March 26, 2025</p>
          </div>
  
          <!-- Event 2 -->
          <div class="event-box1" onclick="openModal('event2')">
              <img src="oth.jpeg" alt="Science Bootcamp">
              <h3>Oath Ceremony</h3>
              <p>March 28, 2025</p>
          </div>
        </div>

        <div class="event-container1">
  
            <!-- Event 2 -->
            <div class="event-box1" onclick="openModal('event3')">
                <img src="vits.jpg" alt="Science Bootcamp">
                <h3>Vits On Beats</h3>
                <p>March 28, 2025</p>
            </div>
      
            <!-- Event 3 -->
            <div class="event-box1" onclick="openModal('event4')">
                <img src="nav.jpeg" alt="MIT Conference">
                <h3>Nav-Utkarsh- The Garba Fest</h3>
                <p>April 02, 2025</p>
            </div>
        </div>

    <div class="event-container1">
  
        <!-- Event 2 -->
        <div class="event-box1" onclick="openModal('event5')">
            <img src="carva.jpeg" alt="Science Bootcamp">
            <h3>Carvan</h3>
            <p>March 28, 2025</p>
        </div>
  
        <!-- Event 3 -->
        <div class="event-box1" onclick="openModal('event6')">
            <img src="tirang.jpeg" alt="MIT Conference">
            <h3>Tarang -the kite fest</h3>
            <p>April 02, 2025</p>
        </div>
    </div>



    <div class="event-container1">
  
        <!-- Event 2 -->
        <div class="event-box1" onclick="openModal('event7')">
            <img src="training1.jpg" alt="Science Bootcamp">
            <h3>Sandhan Utthan - Techno Management Fest </h3>
            <p>March 28, 2025</p>
        </div>
  
        <!-- Event 3 -->
        <div class="event-box1" onclick="openModal('event8')">
            <img src="img2.png" alt="MIT Conference">
            <h3>Horizon - The Grand Extravanza</h3>
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


    <div id="event7" class="modal">
      <div class="modal-content">
          <span class="close" onclick="closeModal('event7')">&times;</span>
          <img src="training1.jpg" alt="Artfinity Festival">
          <h2>Sandhan Utthan - Techno Management Fest</h2>
          <p><strong>Date:</strong> March 26, 2025</p>
          <p>A cultural festival featuring dance, music, and drama. Enjoy an evening of artistic performances!</p>
          <a href="registration.php" <button class="register-btn">Register</button></a>
      </div>
  </div>

  <div id="event8" class="modal">
      <div class="modal-content">
          <span class="close" onclick="closeModal('event8')">&times;</span>
          <img src="img2.png" alt="Science Bootcamp">
          <h2>Horizon - The Grand Extravanza</h2>
          <p><strong>Date:</strong> March 28, 2025</p>
          <p>A hands-on science and technology workshop with experts from leading institutes.</p>
          <a href="registration.php" <button class="register-btn">Register</button></a>
      </div>
  </div>



  <!-- 
  Place this where you want the dynamic events to show up: -->
      <section id="dynamicEvents" class="event-container"></section>



        <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2025 Vindaya Institute of Technology | All rights reserved.</p>
  </footer>

  
<script src="script.js"></script>
</body>
</html>