// Get the overlay element
const ove = document.getElementById('over');

// --------- Toggle navbar mobile screen ---------
// Variables for menu icon bars
const bar1 = document.querySelector('.bar1');
const bar2 = document.querySelector('.bar2');
const bar3 = document.querySelector('.bar3');

// Toggle navbar visibility and overflow
document.getElementById('menuToggle').addEventListener('click', function () {
  document.getElementById('navbar').classList.toggle('active');
  document.body.classList.toggle('overflow-hidden');

  // Toggle bar animations for the menu icon
  bar1.classList.toggle('transform-bar1');
  bar2.classList.toggle('opacity-0');
  bar3.classList.toggle('transform-bar3');
});

// Hide navbar if clicking outside of it
document.addEventListener('click', function (event) {
  const navbar = document.getElementById('navbar');
  const menuToggle = document.getElementById('menuToggle');

  if (!navbar.contains(event.target) && !menuToggle.contains(event.target)) {
    navbar.classList.remove('active');
    document.body.classList.remove('overflow-hidden');

    // Remove bar animations when navbar is hidden
    bar1.classList.remove('transform-bar1');
    bar2.classList.remove('opacity-0');
    bar3.classList.remove('transform-bar3');
  }
});

// Helper Functions
const toggleDropdown = (toggler) => {
  event.stopPropagation();
  const listbar = toggler.nextElementSibling;
  const isVisible = !listbar.classList.contains('hidden');
  
  closeAllDropdowns();
  if (!isVisible) {
    listbar.classList.remove('hidden');
    toggler.querySelector('.toggle-icon').classList.replace('fa-angle-down', 'fa-angle-up');
  }
};

const closeAllDropdowns = () => {
  document.querySelectorAll('.dropdown-menu').forEach(menu => {
    menu.classList.add('hidden');
    menu.previousElementSibling.querySelector('.toggle-icon')
        .classList.replace('fa-angle-up', 'fa-angle-down');
  });
};

// Event Listeners
document.querySelectorAll('.dropdown-toggle').forEach(toggler =>
  toggler.addEventListener('click', () => toggleDropdown(toggler))
);

document.addEventListener('click', event => {
  if (!event.target.closest('.dropdown-toggle') && !event.target.closest('.dropdown-menu')) {
    closeAllDropdowns();
  }
});

// ---------section animation---------
const animateElements = document.querySelectorAll('.fade-up, .fade-right, .fade-left');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target); 
        }
    });
}, {
    threshold: 0.35 
});
animateElements.forEach(element => observer.observe(element));

// ---------logo slider---------
const sliderWrapper = document.querySelector('.slider-wrapper');
sliderWrapper.style.animationPlayState = 'running'; 

// ---------headre fixd---------
window.addEventListener('scroll', function() {
  const nav = document.getElementById('d-line');
  const body = document.getElementById('over');
  
  if (window.scrollY > 500) {  // Check if user has scrolled down
    nav.classList.add('fixed', 'top-0', 'left-0', 'w-full', 'z-50', 'border-b', 'border-gray-300');
    body.classList.add('pt-[50px]','max-xl:pt-[145px]');  // Add padding to body
  } else {
    nav.classList.remove('fixed', 'top-0', 'left-0', 'w-full', 'z-50', 'border-b', 'border-gray-300');
    body.classList.remove('pt-[50px]','max-xl:pt-[145px]');  // Remove padding from body
  }
});

// ---------footer menu toggler---------

document.addEventListener("DOMContentLoaded", () => {
  const toggles = document.querySelectorAll(".footer-toggle");

  toggles.forEach(toggle => {
    toggle.addEventListener("click", event => {
      event.preventDefault(); // Prevent the default action, such as navigating to a link
      
      const menu = toggle.nextElementSibling; // Find the associated menu
      menu.classList.toggle("hidden"); // Toggle the 'hidden' class

      // Find the icon and toggle its class
      const icon = toggle.querySelector("i");
      if (icon) {
        icon.classList.toggle("fa-plus");
        icon.classList.toggle("fa-minus");
      }
    });
  });
});


// ---------fotter genral toggler---------
document.addEventListener("DOMContentLoaded", () => {
  const toggleButton = document.querySelector(".t-btn");
  const footerElement = document.querySelector(".g-footer");
  const closeButton = document.querySelector(".close-btn");
  const icon = toggleButton.querySelector("i");

  const toggleIcon = (show) => {
    icon.classList.toggle("fa-caret-up", show);
    icon.classList.toggle("fa-caret-down", !show);
  };

  toggleButton.addEventListener("click", () => {
    const isVisible = footerElement.classList.toggle("hidden");
    toggleIcon(!isVisible);
  });

  closeButton.addEventListener("click", () => {
    footerElement.classList.add("hidden");
    toggleIcon(false);
  });
});




