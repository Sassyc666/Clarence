// Particles config
particlesJS("particles-js", {
  "particles": {
    "number": { "value": 100 },
    "color": { "value": "#00d1ff" },
    "opacity": { "value": 0.4 },
    "size": { "value": 3, "random": true },
    "line_linked": { "enable": true, "color": "#00d1ff" },
    "move": { "enable": true, "speed": 2 }
  },
  "interactivity": {
    "events": { "onhover": { "enable": true, "mode": "grab" } }
  }
});

// Animate skill bars on scroll
const skillBars = document.querySelectorAll('.skill-fill');
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const bar = entry.target;
      const level = bar.getAttribute('data-level');
      bar.style.width = level + '%';
      observer.unobserve(bar);
    }
  });
}, { threshold: 0.5 });

skillBars.forEach(bar => observer.observe(bar));

// SCROLL ANIMATIONS
const elements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .fade-in-up');

const scrollObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
      scrollObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.3 });

elements.forEach(el => scrollObserver.observe(el));


// Typing animation for "Hi, I'm Clarence"
const typingElement = document.querySelector(".typing");
if (typingElement) {
  const text = typingElement.textContent;
  typingElement.textContent = "";
  let i = 0;
  function type() {
    if (i < text.length) {
      typingElement.textContent += text.charAt(i);
      i++;
      setTimeout(type, 80);
    }
  }
  type();
}

// Smooth fade-in for home section elements
window.addEventListener("load", () => {
  const homeItems = document.querySelectorAll(".home-container .fade-in, .home-container .slide-in-up");
  homeItems.forEach((el, index) => {
    setTimeout(() => el.classList.add("show"), index * 200);
  });
});

// === MULTI SLIDESHOW SUPPORT ===
let slideshows = {
  photo: { index: 1 },
  video: { index: 1 }
};

function showSlides(type, n) {
  let slides = document.querySelectorAll(`#${type === 'photo' ? 'photo-slideshow' : 'gallery'} .slide`);
  let dots = document.querySelectorAll(`#${type === 'photo' ? 'photo-slideshow' : 'gallery'} .dot`);

  if (n > slides.length) slideshows[type].index = 1;
  if (n < 1) slideshows[type].index = slides.length;

  slides.forEach(slide => (slide.style.display = "none"));
  dots.forEach(dot => dot.classList.remove("active"));

  slides[slideshows[type].index - 1].style.display = "block";
  dots[slideshows[type].index - 1].classList.add("active");
}

function changeSlide(n, type) {
  slideshows[type].index += n;
  showSlides(type, slideshows[type].index);
}

function currentSlide(n, type) {
  slideshows[type].index = n;
  showSlides(type, n);
}

// Initialize both slideshows
document.addEventListener("DOMContentLoaded", () => {
  showSlides("photo", 1);
  showSlides("video", 1);
});
