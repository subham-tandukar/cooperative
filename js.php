<script>

var loader = document.querySelector(".pre-loader");

window.addEventListener("load", function () {
  loader.style.display = "none";
});

var swiper = new Swiper(".mySwiper-news", {
  slidesPerView: 3,
  spaceBetween: 50,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
var swiper = new Swiper(".mySwiper-similar-news", {
  slidesPerView: 2,
  spaceBetween: 50,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 2,
    },
  },
});
var swiper = new Swiper(".mySwiper-events", {
  slidesPerView: 4,
  spaceBetween: 50,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});
var swiper = new Swiper(".mySwiper-vacancy", {
  slidesPerView: 3,
  spaceBetween: 50,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
var swiper = new Swiper(".mySwiper-gallery", {
  slidesPerView: 3,
  spaceBetween: 50,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
var swiper = new Swiper(".mySwiper-partner", {
  slidesPerView: 4,
  spaceBetween: 50,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    0: {
      slidesPerView: 2,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

$(function () {
  $(".video-btn").click(function () {
    $(".video").removeClass("d-none").addClass("d-block");

    $(".photo").addClass("d-none").removeClass("d-block");

    $(".photo-btn")
      .removeClass("non-active-opacity")
      .addClass("active-opacity");
    $(".video-btn")
      .addClass("non-active-opacity")
      .removeClass("active-opacity");
  });
  $(".photo-btn").click(function () {
    $(".photo").removeClass("d-none").addClass("d-block");

    $(".video").addClass("d-none").removeClass("d-block");

    $(".video-btn")
      .removeClass("non-active-opacity")
      .addClass("active-opacity");
    $(".photo-btn")
      .addClass("non-active-opacity")
      .removeClass("active-opacity");
  });
});

$(window).scroll(function () {
  var h = $(document).height();
  var hh = $(document).scrollTop();
  if (hh > h / 1.5) {
    $("#top").css({
      top: "70%",
      opacity: "1",
      visibility: "visible",
      transform: "scale(1)",
    });
  } else {
    $("#top").css({
      top: "0",
      opacity: "0",
      visibility: "hidden",
      transform: "scale(0.1)",
    });
  }
});

  
</script>