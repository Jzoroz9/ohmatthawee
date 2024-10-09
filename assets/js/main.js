$(function () {
 ("use strict");
 // script

 const topbar = $(".layout-header").height();
 $(window).scroll(function () {
  if ($(window).scrollTop() > topbar) {
   // $(".layout-header").addClass("tiny");
   //  $(".layout-body").addClass("tiny");
  } else {
   // $(".layout-header").removeClass("tiny");
   //  $(".layout-body").removeClass("tiny");
  }
 });

 $('[data-toggle="menu-mobile"]').click(function (e) {
  e.preventDefault();
  $(this).toggleClass("close");
  $("nav.menu").toggleClass("open");
 });

 $("[data-toggle='dropdown']").click(function (e) {
  e.preventDefault();
  $(this).toggleClass("active");
  $(this).parents(".dropdown").toggleClass("open");
  $(this)
   .parents(".dropdown")
   .find(".dropdown-menu")
   .toggleClass("show");
  e.stopPropagation();
 });
 $("html").click(function () {
  $(".dropdown").find("a, button").removeClass("active");
  $(".dropdown").removeClass("open");
  $(".dropdown-menu").removeClass("show");
 });

 AOS.init({
  duration: 1000,
  once: true,
  offset: 0,
 });

 let lazyLoadInstance = new LazyLoad({
  elements_selector: ".lazy",
 });

 const scrollToTopBtn = $("#scrollToTopBtn");
 // Show the button when user scrolls down 40px from the top
 $(window).scroll(function () {
  if ($(this).scrollTop() > 40) {
   scrollToTopBtn.addClass("show");
  } else {
   scrollToTopBtn.removeClass("show");
  }
 });

 // Scroll to the top when the button is clicked
 scrollToTopBtn.click(function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, 800);
  return false;
 });

 const aboutToTop = $("#aboutToTop");

 // Scroll to the top when the button is clicked
 aboutToTop.click(function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, 100);
  return false;
 });
});

$(".layout-header .nav-list li a.link").click(function (e) {
 e.preventDefault();
 var target = $($(this).attr("href"));
 if (target.length) {
  var scrollTo = target.offset().top;
  $("body, html").animate(
   { scrollTop: scrollTo + "px" },
   0
  );
 }
 //  $(this).toggleClass('active');
});

var areaWork = new Swiper(".area-work .swiper.-top", {
 slidesPerView: "auto",
 spaceBetween: 20,
 freeMode: true,
 autoplay: {
  delay: 0,
  disableOnInteraction: false,
  reverseDirection: false,
 },
 loop: true,
 speed: 5000,
 grabCursor: true,
 mousewheelControl: true,
 keyboardControl: true,
 // centeredSlides: true,
 breakpoints: {
  0: {
   spaceBetween: 20,
  },
  767: {
   spaceBetween: 20,
  },
  1600: {
   spaceBetween: 20,
  },
  1920: {
   spaceBetween: 20,
  },
 },
});

var areaWorkRowBottom = new Swiper(
 ".area-work  .swiper.-bottom",
 {
  slidesPerView: "auto",
  spaceBetween: 20,
  freeMode: true,
  autoplay: {
   delay: 0,
   disableOnInteraction: false,
   reverseDirection: true,
  },
  loop: true,
  speed: 5000,
  grabCursor: true,
  mousewheelControl: true,
  keyboardControl: true,
  // centeredSlides: true,
  breakpoints: {
   0: {
    spaceBetween: 20,
   },
   767: {
    spaceBetween: 20,
   },
   1600: {
    spaceBetween: 20,
   },
   1920: {
    spaceBetween: 20,
   },
  },
 }
);
