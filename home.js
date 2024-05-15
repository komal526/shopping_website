let slideIndex = 0;

function showSlides() {
  const slides = document.querySelectorAll('.slides img');
  
  // Hide all slides
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  
  // Increment slideIndex
  slideIndex++;
  
  // Reset slideIndex if it exceeds the number of slides
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  
  // Display the current slide
  slides[slideIndex - 1].style.display = 'block';
  
  // Change slide every 3 seconds
  setTimeout(showSlides, 3000);
}

// Function to display previous slide
function prevSlide() {
  if (slideIndex > 1) {
    slideIndex--;
  } else {
    slideIndex = document.querySelectorAll('.slides img').length;
  }
  showSlides();
}

// Function to display next slide
function nextSlide() {
  if (slideIndex < document.querySelectorAll('.slides img').length) {
    slideIndex++;
  } else {
    slideIndex = 1;
  }
  showSlides();
}

// Call the showSlides function to start the slideshow
showSlides();