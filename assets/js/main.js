// Menu 
const navE1 = document.querySelector(".nav");
const hamburgerE1 = document.querySelector(".hamburger");

hamburgerE1.addEventListener("click", () => {
  navE1.classList.toggle("nav--open");
  hamburgerE1.classList.toggle("hamburger--open")
});

navE1.addEventListener("click", () => {
  navE1.classList.remove("nav--open");
  hamburgerE1.classList.remove("hamburger--open")
});
// End Menu 

// Offer Position 
window.addEventListener('DOMContentLoaded', () => {
  const nav = document.querySelector('nav.nav_class');
  const navOffsetTop = nav.offsetTop;
  const menuItems = document.querySelectorAll('nav.nav_class a');

  window.addEventListener('scroll', () => {
    if (window.pageYOffset > navOffsetTop) {
      nav.classList.add('sticky');
    } else {
      nav.classList.remove('sticky');
    }

    const fromTop = window.innerHeight / 2;
    
    menuItems.forEach(item => {
      const section = document.querySelector(item.getAttribute('href'));
      
      if (section.offsetTop <= window.pageYOffset + fromTop && section.offsetTop + section.offsetHeight > window.pageYOffset + fromTop) {
        item.classList.add('active');
      } else {
        item.classList.remove('active');
      }
    });
  });
});
// End Offer Position 


// Review
var swiper = new Swiper(".mySwiper_springview", {
  grabCursor: true,
  loop: true,
  autoplay: {
    delay: 2500,
  },
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    300: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    440: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20, 
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 10,
    },
  },
});



// ReInstall 
var swiper = new Swiper(".mySwiper_exaltare", {
  grabCursor: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    300: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    440: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30, 
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },

});


// Category Single Page 
var swiper = new Swiper(".mySwiper_category", {
  cssMode: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },
  mousewheel: true,
  keyboard: true,
  speed: 1000,
});


//Year Hhistory slider
var swiper = new Swiper(".year_mySwiper", {
  speed: 1000,
  slidesPerView: 1,
  spaceBetween: 10,
  rewind: true,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {

    440: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 0,
    },
  },
});



// download catalog 
var swiper = new Swiper(".mySwiper_exaltare_catalog", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


  // garden 
  var swiper = new Swiper(".mySwiper_winter_garden", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      "@0.75": {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      "@1.50": {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });

//Gallery
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();

// Gallery Filter ALU
jQuery(document).ready(function($) {
  $(".rebutton").click(function(){
      var name = $(this).attr('data-filter');
      if(name == "all"){
          $(".shot-thumbnail").show('2000');
      }else{
          $(".shot-thumbnail").not("."+name).hide('2000');
          $(".shot-thumbnail").filter("."+name).show('2000');
      }
  })

  $(".navigation a").click(function(){
      $(this).addClass("active").siblings().removeClass("active");
  })
})

//Gallery Filter PVC 
jQuery(document).ready(function($) {
  $(".rebuttontwo").click(function(){
      var name = $(this).attr('data-filter');
      if(name == "all"){
          $(".shot-thumbnailtwo").show('2000');
      }else{
          $(".shot-thumbnailtwo").not("."+name).hide('2000');
          $(".shot-thumbnailtwo").filter("."+name).show('2000');
      }
  })

  $(".navigationtwo a").click(function(){
      $(this).addClass("active").siblings().removeClass("active");
  })
})



// Download 
function downloadCity(evt, cityName) {
  var i, download_area, downloadlinks;
  download_area = document.getElementsByClassName("download_area");
  for (i = 0; i < download_area.length; i++) {
    download_area[i].style.display = "none";
  }
  downloadlinks = document.getElementsByClassName("downloadlinks");
  for (i = 0; i < downloadlinks.length; i++) {
    downloadlinks[i].className = downloadlinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="downloadDefaultClick" and click on it
document.getElementById("downloadDefaultClick").click();

