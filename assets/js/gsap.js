import { gsap } from "gsap";
import Lenis from '@studio-freight/lenis';
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);


//Lenis configuration
const lenis = new Lenis({
  //content: document.querySelector("#foo:bar")
  duration: 1,
  smooth: true
});

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

//GSAP ScrollTrigger integration
lenis.on('scroll', ScrollTrigger.update)

gsap.ticker.add((time)=>{
  lenis.raf(time * 1000)
})

$(function() {

  const xl = 1280;

  // Home Page
  if ( $(".page-template-page-home")[0] ) {
    //Section Intro
    let introtl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-intro",
        start: "top 80%",
        end: "bottom 80%", 
        scrub: 1, 
        //markers: true,
        toggleActions: "play none reverse none"
      },
      defaults: { duration: 1.2 },
    });
    introtl
      .from(".section-intro .title-sub", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-intro .title-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-intro .text-body ", { opacity: 0, y: '50px', autoAlpha: 0 });

    //Section Stay
    let staytl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-stay",
        start: "top 75%",
        end: "bottom 80%",
        scrub: 1,
        //markers: true,
        toggleActions: "play none reverse none"
      },
      defaults: { duration: 1.2 },
    });
    if ( window.innerWidth <= xl ) {
      staytl.from(".section-stay .title-overline--sm ", { opacity: 0, y: '50px', autoAlpha: 0 });
    } else {
      staytl.from(".section-stay .title-overline--xl ", { opacity: 0, y: '50px', autoAlpha: 0 });
    };
    staytl
      .from(".section-stay .img-sm", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-stay .img-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-stay .title-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-stay .text-body", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-stay .btn-wrapper", { opacity: 0, y: '50px', autoAlpha: 0 });

    //Section Enjoy
    let enjoytl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-enjoy",
        start: "top 75%",
        end: "bottom 80%", 
        scrub: 1, 
        //markers: true,
        toggleActions: "play none reverse none"
      },
      defaults: { duration: 1.2 },
    });
    if ( window.innerWidth <= xl ) {
      enjoytl.from(".section-enjoy .title-overline--sm ", { opacity: 0, y: '50px', autoAlpha: 0 });
    } else {
      enjoytl.from(".section-enjoy .title-overline--xl ", { opacity: 0, y: '50px', autoAlpha: 0 });
    };
    enjoytl
      .from(".section-enjoy .img-sm", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-enjoy .img-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-enjoy .title-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-enjoy .text-body", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-enjoy .btn-wrapper", { opacity: 0, y: '50px', autoAlpha: 0 });

    //Section Enjoy
    let experiencetl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-experience",
        start: "top 75%",
        end: "bottom 80%", 
        scrub: 1, 
        //markers: true,
        toggleActions: "play none reverse none"
      },
      defaults: { duration: 1.2 },
    });
    experiencetl
      .from(".section-experience .title-overline", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-experience .img-sm", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-experience .img-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-experience .title-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-experience .text-body", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-experience .btn-wrapper", { opacity: 0, y: '50px', autoAlpha: 0 });

    //Section Kultur
    let kulturetl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-kulture",
        start: "top 75%",
        end: "bottom 80%", 
        scrub: 1, 
        //markers: true,
        toggleActions: "play none reverse none"
      },
      defaults: { duration: 1.2 },
    });
    kulturetl
      .from(".section-kulture .title-overline", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-kulture .img-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-kulture .title-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-kulture .text-body", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-kulture .btn-wrapper", { opacity: 0, y: '50px', autoAlpha: 0 });

    //Section Box Teasers
    let boxteaserstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-box-teasers",
        start: "top 75%",
        end: "bottom 80%", 
        scrub: 1, 
        //markers: true,
        toggleActions: "play none reverse none"
      },
      defaults: { duration: 1.2 },
    });
    boxteaserstl
      .from(".section-box-teasers .title-overline", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-box-teasers img", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-kulture .title-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-kulture .btn-wrapper", { opacity: 0, y: '50px', autoAlpha: 0 });
  }

  // Stay Page
  if ( $(".page-template-page-stay")[0] ) {
    //Section Intro
    let introtl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-intro",
        start: "top 80%",
        end: "bottom 80%", 
        scrub: 1, 
        //markers: true,
        toggleActions: "play none reverse none"
      },
      defaults: { duration: 1.2 },
    });
    introtl
      .from(".section-intro .title-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-intro .text-body ", { opacity: 0, y: '50px', autoAlpha: 0 });

    //Section Rooms
    let staytl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-rooms",
        start: "top 75%",
        end: "bottom 80%",
        scrub: 1,
        //markers: true,
        toggleActions: "play none reverse none"
      },
      defaults: { duration: 1.2 },
    });
    if ( window.innerWidth <= xl ) {
      staytl.from(".section-stay .title-overline--sm ", { opacity: 0, y: '50px', autoAlpha: 0 });
    } else {
      staytl.from(".section-stay .title-overline--xl ", { opacity: 0, y: '50px', autoAlpha: 0 });
    };
    staytl
      .from(".section-rooms .az-vertical-line-img", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-rooms img", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-rooms .title-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-rooms .text-body", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-rooms .btn-wrapper", { opacity: 0, y: '50px', autoAlpha: 0 });

    //Section Enjoy
    let enjoytl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-enjoy",
        start: "top 75%",
        end: "bottom 80%", 
        scrub: 1, 
        //markers: true,
        toggleActions: "play none reverse none"
      },
      defaults: { duration: 1.2 },
    });
    if ( window.innerWidth <= xl ) {
      enjoytl.from(".section-enjoy .title-overline--sm ", { opacity: 0, y: '50px', autoAlpha: 0 });
    } else {
      enjoytl.from(".section-enjoy .title-overline--xl ", { opacity: 0, y: '50px', autoAlpha: 0 });
    };
    enjoytl
      .from(".section-enjoy .img-sm", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-enjoy .img-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-enjoy .title-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-enjoy .text-body", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-enjoy .btn-wrapper", { opacity: 0, y: '50px', autoAlpha: 0 });

    //Section Enjoy
    let experiencetl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-experience",
        start: "top 75%",
        end: "bottom 80%", 
        scrub: 1, 
        //markers: true,
        toggleActions: "play none reverse none"
      },
      defaults: { duration: 1.2 },
    });
    experiencetl
      .from(".section-experience .title-overline", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-experience .img-sm", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-experience .img-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-experience .title-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-experience .text-body", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-experience .btn-wrapper", { opacity: 0, y: '50px', autoAlpha: 0 });

    //Section Kultur
    let kulturetl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-kulture",
        start: "top 75%",
        end: "bottom 80%", 
        scrub: 1, 
        //markers: true,
        toggleActions: "play none reverse none"
      },
      defaults: { duration: 1.2 },
    });
    kulturetl
      .from(".section-kulture .title-overline", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-kulture .img-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-kulture .title-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-kulture .text-body", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-kulture .btn-wrapper", { opacity: 0, y: '50px', autoAlpha: 0 });

    //Section Box Teasers
    let boxteaserstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-box-teasers",
        start: "top 75%",
        end: "bottom 80%", 
        scrub: 1, 
        //markers: true,
        toggleActions: "play none reverse none"
      },
      defaults: { duration: 1.2 },
    });
    boxteaserstl
      .from(".section-box-teasers .title-overline", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-box-teasers img", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-kulture .title-xl", { opacity: 0, y: '50px', autoAlpha: 0 })
      .from(".section-kulture .btn-wrapper", { opacity: 0, y: '50px', autoAlpha: 0 });
  }

});