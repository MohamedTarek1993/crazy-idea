//loader
let loader = document.getElementById('preloader');
window.addEventListener('load', function () {
  loader.style.display = 'none';
});
//loader

//  scroll-up 
var btn = $('#button');
var navbar = $('#navbar')
var lang = $('.navbar  .dropdown');
$(window).scroll(function () {
  if ($(window).scrollTop() > 490) {
    btn.addClass('show');
    navbar.addClass('change');
    lang.css('display', 'none');

  } else {
    btn.removeClass('show');
    navbar.removeClass('change');
    lang.css('display', 'block');
  }
});
btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});
//    scroll-up 
// animated hamburger icon
$(document).ready($(function () {
  let navBtn = $('.navbar-toggler');
  $(navBtn).click(function () {
    $(navBtn).toggleClass('active-hamburger');
  });
}));
// animated hamburger icon

// client slider 
var swiper1 = new Swiper(".mySwiper-1", {
  slidesPerView: 5,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },
});
//  client slider

//  testiomnies slider 
var swiper2 = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});
// testiomnies slider 

//  version slider 
var swiper = new Swiper(".mySwiper-2", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});
//  version slider 

//button to top
!(function(s) {
  "use strict";
  s(".switch").on("click", function() {
      s("body").hasClass("light") ? (s("body").removeClass("light"), s(".switch").removeClass("switched")) : (s("body").addClass("light"), s(".switch").addClass("switched"));
  }), s(document).ready(function() {
      var e = document.querySelector(".progress-wrap path"),
          t = e.getTotalLength();
      (e.style.transition = e.style.WebkitTransition = "none"), (e.style.strokeDasharray = t + " " + t), (e.style.strokeDashoffset = t), e.getBoundingClientRect(), (e.style.transition = e.style.WebkitTransition = "stroke-dashoffset 10ms linear");
      var o = function() {
          var o = s(window).scrollTop(),
              r = s(document).height() - s(window).height(),
              i = t - (o * t) / r;
          e.style.strokeDashoffset = i;
      };
      o(), s(window).scroll(o);
      jQuery(window).on("scroll", function() {
          jQuery(this).scrollTop() > 50 ? jQuery(".progress-wrap").addClass("active-progress") : jQuery(".progress-wrap").removeClass("active-progress");
      }), jQuery(".progress-wrap").on("click", function(s) {
          return s.preventDefault(), jQuery("html, body").animate({
              scrollTop: 0
          }, 550), !1;
      });
  });
})
