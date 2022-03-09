// import external dependencies
import 'jquery';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
jQuery(document).ready(function ($) {
  $(".testimonials").slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
  });
  $(".testimonials2").slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
  });
  $(window).on('load resize', function () {
    if ($(window).width() < 767) {
      $(".c-card-grid__posts").slick({
        dots: false,
        infinite: true,
        speed: 500,
      });
      $(".c-team-headline__columns").slick({
        dots: false,
        infinite: true,
        speed: 500,
      });
    }
  })

  if (window.location.href.split("/")[4].length > 1) {
    $(".c-card-grid__background-cover").addClass("normal_page");
    $("section.c-latest-wrapper .c-card-grid__cta").hide();
    $("section.c-latest-wrapper .c-card-grid__header").css("text-align", "left");
    $("section.c-latest-wrapper .c-card-grid").css("background", "#fff");
    $("section.c-latest-wrapper .c-card-grid__header h2.c-card-grid__heading").css("color", "#342a2a");

    $(".c-testimonial").css("padding-bottom", "0px");
    $(".slick-slider").css("margin-bottom", "0px");
  }

  if (window.location.href.split("/")[4] == "project") {
    $(".c-hero__content").css("padding", "250px 0px");
    $(".c-hero").addClass("project");
  }

  $("p.btn.collapse_open").click(function () {
    $(this).hide();
    $("p.btn.collapse_close").show();
    $(".mobile_nav").show();
    $(".mobile_menu").css("background", "#342a2a");
    $(".mobile_menu").css("height", "100vh");
  })
  $("p.btn.collapse_close").click(function () {
    $(this).hide();
    $(".mobile_nav").hide();
    $("p.btn.collapse_open").show();
    $(".mobile_menu").css("height", "auto");
    $(".mobile_menu").css("background", "transparent");
  })
  var repeat = 0;
  $("section").each(function () {
    if ($(this).hasClass("c-promo-section")) {
      repeat = repeat + 1;
      $(this).addClass("repeat" + repeat);
      console.log("repeat", repeat);
    }
  })
  $(".project_cat").change(function () {
    var conceptName = $('.project_cat').find(":selected").text();
    $(".project_item").each(function () {
      if (conceptName == "Filter by project type") {
        $(this).show();
      }
      else {
        if ($(this).hasClass(conceptName)) {
          $(this).show();
        }
        else {
          $(this).hide();
        }
      }
    })
  })
});
