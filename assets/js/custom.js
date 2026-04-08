/**
 * Custom JavaScript for TP Elements Plugin
 *
 * This file contains:
 * - AOS animation initialization for Elementor widgets
 * - Visible slowly right animation for heading widget
 */

"use strict";
document.addEventListener("DOMContentLoaded", function () {
  jQuery(function ($) {

    // AOS Animation Initialization for Elementor
    $(window).on("elementor/frontend/init", function () {
      elementorFrontend.hooks.addAction(
        "frontend/element_ready/global",
        function ($scope) {
          AOS.init({
            duration: 500,
            easing: "ease-out-quart",
            once: true,
          });
        }
      );
    });

    // Visible From Right Slowly Animation (for heading widget)
    let visibleSlowlyRight = document.querySelectorAll(".visible-slowly-right");
    if ($(visibleSlowlyRight).length > 0) {
      let char_come = gsap.utils.toArray(visibleSlowlyRight);
      char_come.forEach((char_come) => {
        let split_char = new SplitText(char_come, {
          type: "chars, words",
          lineThreshold: 0.5,
        });
        const tl2 = gsap.timeline({
          scrollTrigger: {
            trigger: char_come,
            start: "top 90%",
            end: "bottom 60%",
            scrub: false,
            markers: false,
            toggleActions: "play none none none",
          },
        });
        tl2.from(split_char.chars, {
          duration: 0.8,
          x: 70,
          autoAlpha: 0,
          stagger: 0.03,
        });
      });
    }
  });
});
