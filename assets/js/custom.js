$(document).ready(function() {
  //Preloader
  $(window).on("load", function() {
    preloaderFadeOutTime = 800;
    function hidePreloader() {
      var preloader = $(".spinner-wrapper");
      preloader.fadeOut(preloaderFadeOutTime);
    }
    hidePreloader();
  });

  // form datepicker
  $("#date-picker").datepicker();
});

function rotateCard(btn) {
  var $card = $(btn).closest(".card");
  if ($card.hasClass("hover")) {
    $card.removeClass("hover");
  } else {
    $card.addClass("hover");
  }
}

// owl carousel
$(".owl-carousel").owlCarousel({
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  lazyLoad: true,
  loop: true,
  dots: true,
  // nav: false,
  margin: 5,
  responsiveClass: true,
  // stagePadding: 5,
  responsive: {
    0: {
      items: 1,
      dots: false,
      nav: true
    },
    485: {
      items: 2,
      dots: true
    },
    728: {
      items: 3,
      dots: true
    },
    960: {
      items: 4,
      dots: true
    },
    1200: {
      items: 5,
      dots: true
    }
  }
});

// lightbox

baguetteBox.run(".baguetteBoxTwo");

// Scroll Spy

$("body").scrollspy({ target: "#main-nav" });

// Add smooth scrolling
$("#main-nav a").on("click", function(e) {
  // Check for a hash value
  if (this.hash !== "") {
    // Prevent default behavior
    e.preventDefault();

    // Store hash
    const hash = this.hash;

    // Animate smooth scroll
    $("html, body").animate(
      {
        scrollTop: $(hash).offset().top
      },
      900,
      function() {
        // Add hash to URL after scroll
        window.location.hash = hash;
      }
    );
  }
});

// form validation
(function() {
  "use strict";
  window.addEventListener(
    "load",
    function() {
      var form = document.getElementById("needs-validation");
      form.addEventListener(
        "submit",
        function(event) {
          if (form.checkValidity() == false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add("was-validated");
        },
        false
      );
    },
    false
  );
})();

// Auto close navbar when click
$(".navbar-collapse a").click(function() {
  $(".navbar-collapse").collapse("hide");
});

// copyright year
$("#year").text(new Date().getFullYear());
