// $(document).ready(function() {
//   $(".card-animate").hover(
//     // trigger when on hover
//     function() {
//       $(this).animate(
//         {
//           marginTop: "-=1%"
//         },
//         200
//       );
//     },

//     // trigger when hover out
//     function() {
//       $(this).animate(
//         {
//           marginTop: "0%"
//         },
//         200
//       );
//     }
//   );
// });

$(document).ready(function() {
  $(".first-button").on("click", function() {
    $(".animated-icon1").toggleClass("open");
  });
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

// Data Picker Initialization
// $(".datepicker").pickadate();

// Sticky Navigation

// let navbar = $(".navbar");

// $(window).scroll(function() {
//   // console.log(window.innerHeight);
//   // console.log($(".section-0").offset().top);
//   let windowTop = $(window).scrollTop();
//   let oTop = $(".section-0").offset().top - window.innerHeight;
//   console.log(windowTop);
//   console.log(oTop);
//   if (windowTop > oTop) {
//     navbar.addClass("gc-light-blue");
//   } else {
//     navbar.removeClass("gc-light-blue");
//   }
// });

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
