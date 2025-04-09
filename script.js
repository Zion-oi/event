// Hero Slider Logic
const slides = document.querySelectorAll('.hero-slider img');
let currentIndex = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove('active');
    if (i === index) {
      slide.classList.add('active');
    }
  });
}

setInterval(() => {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
}, 3000);

// Auto-scroll of Training Slider
const trainingSlider = document.querySelector('.training-slider');
let scrollValue = 0;

function autoScrollTraining() {
  scrollValue += 1;
  if (scrollValue >= trainingSlider.scrollWidth - trainingSlider.clientWidth) {
    scrollValue = 0;
  }
  trainingSlider.scrollTo({ left: scrollValue, behavior: 'smooth' });
}

setInterval(autoScrollTraining, 30);



//its a lohin sign up page


function showSignUp() {
    document.getElementById('login-box').classList.add('hidden');
    document.getElementById('signup-box').classList.remove('hidden');
}

function showLogin() {
    document.getElementById('signup-box').classList.add('hidden');
    document.getElementById('login-box').classList.remove('hidden');
}



// Function to open modal
function openModal(eventId) {
  document.getElementById(eventId).style.display = "flex";
}

// Function to close modal
function closeModal(eventId) {
  document.getElementById(eventId).style.display = "none";
}

// Close modal when clicking outside content
window.onclick = function(event) {
  document.querySelectorAll('.modal').forEach(modal => {
      if (event.target === modal) {
          modal.style.display = "none";
      }
  });
}











// Open and Close Modal
function openEventForm() {
  document.getElementById("eventFormModal").style.display = "block";
}
function closeEventForm() {
  document.getElementById("eventFormModal").style.display = "none";
}

// Handle Form Submission
document.getElementById("eventForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const title = document.getElementById("eventTitle").value;
  const desc = document.getElementById("eventDescription").value;
  const date = document.getElementById("eventDate").value;
  const image = document.getElementById("eventImage").value;

  const eventHTML = `
    <div class="event-box">
      <img src="${image}" alt="${title}">
      <h3>${title}</h3>
      <p>${desc}</p>
      <small>${date}</small>
    </div>
  `;

  document.getElementById("dynamicEvents").innerHTML += eventHTML;

  // Clear form and close
  document.getElementById("eventForm").reset();
  closeEventForm();
});





function openEventForm() {
  document.getElementById("popupForm").style.display = "flex";
}
function closeEventForm() {
  document.getElementById("popupForm").style.display = "none";
}