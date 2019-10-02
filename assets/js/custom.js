$(window).on('load', function() {
   $("#cover").hide();
});
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

// Portfolio owl carousel
$("#portfolio-carousel").owlCarousel({
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

// Portfolio owl carousel
$("#events-carousel").owlCarousel({
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
      items: 3,
      dots: true
    },
    1200: {
      items: 3,
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

// contact form validation
(function() {
  "use strict";
  window.addEventListener(
    "load",
    function() {
      var form = document.getElementById("contactform");
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

// register form validation
(function() {
  "use strict";
  window.addEventListener(
    "load",
    function() {
      var form = document.getElementById("registerform");
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

// Registration Form
$("#registerform").submit(function(event) {
  event.preventDefault(); //prevent default action
  var post_url = $(this).attr("action"); //get form action url
  var form_data = $(this).serialize(); //Encode form elements for submission
  console.log(form_data);
  $.post(post_url, form_data, function(response) {
    $("#serverStatus").html("form Submited Succesfully");
  });
});

// Contact Form
$("#contactform").submit(function(event) {
  event.preventDefault(); //prevent default action
  var post_url = $(this).attr("action"); //get form action url
  var form_data = $(this).serialize(); //Encode form elements for submission
  console.log(form_data);
  $.post(post_url, form_data, function(response) {
    $("#serverStatus").html("form Submited Succesfully");
  });
});
