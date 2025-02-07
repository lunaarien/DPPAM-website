const images = document.querySelectorAll(".carousel-image");
let currentIndex = 0;
let interval;

// Function to show the next image
function showNextImage() {
    images[currentIndex].classList.remove("active");
    currentIndex = (currentIndex + 1) % images.length;
    images[currentIndex].classList.add("active");
}

// Function to start the interval
function startCarousel() {
    interval = setInterval(showNextImage, 2000);
}

// Function to stop the interval
function stopCarousel() {
    clearInterval(interval);
}

// Start by showing the first image and starting the carousel
images[currentIndex].classList.add("active");
startCarousel();

// Pause when hovering, resume when leaving
document.querySelector(".news-events-poster").addEventListener("mouseenter", stopCarousel);
document.querySelector(".news-events-poster").addEventListener("mouseleave", startCarousel);
