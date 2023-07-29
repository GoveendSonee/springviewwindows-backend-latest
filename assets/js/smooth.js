jQuery(document).ready(function($) {
    // Smooth scroll on click
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 800); // Adjust the scrolling speed here
        }
    });
});
  
document.addEventListener('DOMContentLoaded', function() {
  var backLink = document.getElementById('back-link');
  
  if (backLink) {
    backLink.addEventListener('click', function(event) {
      event.preventDefault();
      window.history.back();
    });
  }
  
  window.addEventListener('popstate', function() {
    window.location.reload();
  });
});

// Download Company history 
var elements = document.getElementsByClassName("containerdp");

// Function to add class on hover
function addClass() {
	this.classList.add("clicked");
}

// Function to remove class when hover ends
function removeClass() {
	this.classList.remove("clicked");
}

// Add event listeners to each element
for (var i = 0; i < elements.length; i++) {
	elements[i].addEventListener("mouseover", addClass);
	elements[i].addEventListener("mouseout", removeClass);
}

