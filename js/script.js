// Counter section start
function animateCounter(element, target) {
  let count = 0;
  
  // Adjust speed based on screen size (faster on smaller screens)
  const screenSize = window.innerWidth;
  const speed = screenSize < 768 ? 100 : 200; // Faster on mobile
  const increment = target / speed; // Adjust increment for smoother counting

  const updateCounter = () => {
    count += increment;

    if (count >= target) {
      element.textContent = target;
    } else {
      element.textContent = Math.ceil(count);
      requestAnimationFrame(updateCounter);
    }
  };

  updateCounter();
}

// Function to trigger counters when they enter the viewport
function initCounters() {
  const counters = document.querySelectorAll('.number');
  const observerOptions = {
    threshold: 0.5, // Start animation when 50% of the element is in view
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const target = parseInt(entry.target.getAttribute('data-target'));
        animateCounter(entry.target, target);
        observer.unobserve(entry.target); // Stop observing once animated
      }
    });
  }, observerOptions);

  counters.forEach((counter) => observer.observe(counter));
}

// Initialize counters on DOMContentLoaded
document.addEventListener('DOMContentLoaded', initCounters);

// Our client script
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      dots: true,
      nav: false,
      slideTransition: 'linear',
      autoplay: true,
      autoplayTimeout: 800, // Slides change every 3 seconds
      autoplaySpeed: 10000,      // Extremely smooth 10-second transition
      responsive: {
          0: { items: 2 },
          600: { items: 2 },
          1000: { items: 4 }
      }
  });
});
// Achivement
// Desktop Carousel Logic
(function () {
  const desktopImages = document.querySelectorAll('.Achievement-2 img');
  const desktopLeftArrow = document.querySelector('.left-arrow img');
  const desktopRightArrow = document.querySelector('.right-arrow img');
  let desktopIndex = 0;

  // Function to update the active desktop image
  function updateDesktopImage(index) {
    desktopImages.forEach((img, i) => {
      img.classList.toggle('active', i === index);
    });
  }

  // Event listener for the desktop right arrow (Next)
  desktopRightArrow.addEventListener('click', () => {
    desktopIndex = (desktopIndex + 1) % desktopImages.length; // Loop back to first
    updateDesktopImage(desktopIndex);
  });

  // Event listener for the desktop left arrow (Previous)
  desktopLeftArrow.addEventListener('click', () => {
    desktopIndex = (desktopIndex - 1 + desktopImages.length) % desktopImages.length; // Loop to last
    updateDesktopImage(desktopIndex);
  });
})();

// Mobile Carousel Logic
(function () {
  const mobileImages = document.querySelectorAll('.Achievement-2-mob img');
  const mobileLeftArrow = document.querySelector('.left-arrow-mob img');
  const mobileRightArrow = document.querySelector('.right-arrow-mob img');
  let mobileIndex = 0;

  // Function to update the active mobile image
  function updateMobileImage(index) {
    mobileImages.forEach((img, i) => {
      img.classList.toggle('active', i === index);
    });
  }

  // Event listener for the mobile right arrow (Next)
  mobileRightArrow.addEventListener('click', () => {
    mobileIndex = (mobileIndex + 1) % mobileImages.length; // Loop back to first
    updateMobileImage(mobileIndex);
  });

  // Event listener for the mobile left arrow (Previous)
  mobileLeftArrow.addEventListener('click', () => {
    mobileIndex = (mobileIndex - 1 + mobileImages.length) % mobileImages.length; // Loop to last
    updateMobileImage(mobileIndex);
  });
})();

function decreaseQuantity() {
  const quantityInput = document.getElementById('quantity');
  if (quantityInput.value > 1) quantityInput.value--;
}

function increaseQuantity() {
  const quantityInput = document.getElementById('quantity');
  quantityInput.value++;
}




document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.number-2');

  const speed = 200; // Adjust to control the animation speed

  counters.forEach(counter => {
      const updateCount = () => {
          const target = +counter.getAttribute('data-target'); // Target number
          const current = +counter.innerText; // Current displayed number
          const increment = target / speed; // Increment value per step

          if (current < target) {
              counter.innerText = Math.ceil(current + increment);
              setTimeout(updateCount, 10); // Update every 10ms
          } else {
              counter.innerText = target; // Ensure it stops at the target value
          }
      };

      updateCount(); // Start the animation
  });
});






