

// Register the ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);


// Create a GSAP animation with ScrollTrigger properties
// gsap.to(".section-row", {
//     x: 0, // Animate to x position 0 (original position)
//     opacity: 1, // Animate to full opacity
//     duration: 1.5,
//     scrollTrigger: {
//         trigger: ".section-row", // The element that triggers the animation
//         start: "top center", // Start when the top of the trigger hits the center of the viewport
//         end: "bottom top", // End when the bottom of the trigger hits the top of the viewport
//         markers: true, // Optional: visual markers for debugging
//         scrub: true, // Link the animation's progress directly to the scrollbar
//     }
// });


// const line = $(".section-line"),
// lineWrapper = $(".section-wrapper");
// gsap.set(line, {transformOrigin: "center top", xPercent: -50, x: 0})

// gsap.fromTo(line, {
//  scaleY: 0,
// }, {
// scaleY: 1,
// ease: "none",
// scrollTrigger: {
//   trigger: lineWrapper,
//   start: 0,
//   end: () => "+=" + lineWrapper[0].offsetHeight,
//   markers: true,
//   scrub: true,
// }
// });





// // Animate each timeline container
// gsap.utils.toArray(".timelinecontainer").forEach((box) => {
//   gsap.from(box, {
//     opacity: 0,
//     y: 50,
//     duration: 1,
//     ease: "power2.out",
//     scrollTrigger: {
//       trigger: box,
//       start: "top 80%",
//       toggleActions: "play none none none"
//     }
//   });
// });


// gsap.registerPlugin(ScrollTrigger);

// Animate each vertical line
// gsap.utils.toArray(".section-wrapper").forEach((wrapper) => {
//   let line = wrapper.querySelector(".section-line");

//   if (!line) return;

//   gsap.fromTo(
//     line,
//     { scaleY: 0 },
//     {
//       scaleY: 1,
//       ease: "none",
//       transformOrigin: "center top",
//       scrollTrigger: {
//         trigger: wrapper,
//         start: "top center",
//         end: "bottom center",
//         scrub: true,
//         // markers: true // enable if debugging
//       }
//     }
//   );
// });



// gsap.registerPlugin(ScrollTrigger);

// gsap.to(".page-line", {
//   scaleY: 1,
//   ease: "none",
//   scrollTrigger: {
//     trigger: "body",
//     start: "top top",
//     end: "bottom bottom",
//     scrub: true,
//     // markers: true
//   }
// });





gsap.to(".page-line", {
  scaleY: 1,
  ease: "none",
  scrollTrigger: {
    trigger: "body",
    start: "top top",
    end: "bottom bottom",
    scrub: true,
    // markers: true
  }
});
