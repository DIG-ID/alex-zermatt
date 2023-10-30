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
  const scrubSpeed = 1;
  const animDuration = 1.2;
  const fadeDistance = "50px";
  const defaultStart = "top 70%";
  const defaultEnd = "bottom 80%";
  const defaultActions = "play none reverse none";

  /*****************************************
   *                                       *
   *               Home Page               *
   *                                       *
   ****************************************/
  if ( $(".page-template-page-home")[0] ) {
    //Section Intro
    let introtl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-intro",
        start: "top 80%",
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    introtl
      .from(".section-intro .title-sub", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-intro .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-intro .text-body ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Stay
    let staytl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-stay",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    if ( window.innerWidth <= xl ) {
      staytl.from(".section-stay .title-overline--sm ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });
    } else {
      staytl.from(".section-stay .title-overline--xl ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });
    };
    staytl
      .from(".section-stay .img-sm", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-stay .img-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-stay .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-stay .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-stay .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Enjoy
    let enjoytl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-enjoy",
        start: defaultStart,
        end: defaultEnd, 
        scrub: scrubSpeed, 
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    if ( window.innerWidth <= xl ) {
      enjoytl.from(".section-enjoy .title-overline--sm ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });
    } else {
      enjoytl.from(".section-enjoy .title-overline--xl ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });
    };
    enjoytl
      .from(".section-enjoy .img-sm", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-enjoy .img-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-enjoy .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-enjoy .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-enjoy .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Enjoy
    let experiencetl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-experience",
        start: defaultStart,
        end: defaultEnd, 
        scrub: scrubSpeed, 
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    experiencetl
      .from(".section-experience .title-overline", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-experience .img-sm", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-experience .img-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-experience .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-experience .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-experience .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Kultur
    let kulturetl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-kulture",
        start: defaultStart,
        end: defaultEnd, 
        scrub: 1, 
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    kulturetl
      .from(".section-kulture .title-overline", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-kulture .img-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-kulture .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-kulture .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-kulture .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Box Teasers
    let boxteaserstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-box-teasers",
        start: defaultStart,
        end: defaultEnd, 
        scrub: scrubSpeed, 
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    boxteaserstl
      .from(".section-box-teasers .title-overline", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-box-teasers img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-kulture .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-kulture .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });
  }

  /*****************************************
   *                                       *
   *               Stay Page               *
   *                                       *
   ****************************************/
  if ( $(".page-template-page-stay")[0] ) {
    //Section Intro
    let introtl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-intro",
        start: "top 80%",
        end: defaultEnd, 
        scrub: scrubSpeed, 
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    introtl
      .from(".section-intro .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-intro .text-body ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Rooms
    let roomstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-rooms",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    roomstl
      .from(".section-rooms .az-vertical-line-img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-rooms img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-rooms .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-rooms .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-rooms .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Box Teasers
    let boxteaserstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-box-teasers",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    boxteaserstl
      .from(".section-box-teasers .title-overline", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-box-teasers img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-kulture .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-kulture .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Seminare
    let seminaretl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-seminare",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    seminaretl
      .from(".section-seminare .az-vertical-line-img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-seminare img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-seminare .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-seminare .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-seminare .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

  }
  /******************************************
   *                                        *
   *            Eat & Drink Page            *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-eat--drink")[0] ) {
    //Section Intro
    let introtl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-intro",
        start: "top 80%",
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    introtl
      .from(".section-intro .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-intro .text-body ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Grill
    let grilltl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-alex-grill",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    grilltl
      .from(".section-alex-grill .az-vertical-line-img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-alex-grill img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-alex-grill .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-alex-grill .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-alex-grill .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section le Jardin
    let jardintl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-le-jardin",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
       // markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    if ( window.innerWidth <= xl ) {
      jardintl.from(".section-le-jardin .title-overline--sm ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });
    } else {
      jardintl.from(".section-le-jardin .title-overline--xl ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });
    };
    jardintl
      .from(".section-le-jardin img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-le-jardin .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-le-jardin .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-le-jardin .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Lounge Bar
    let loungebartl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-lounge-bar",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    if ( window.innerWidth <= xl ) {
      loungebartl.from(".section-lounge-bar .title-overline--sm ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });
    } else {
      loungebartl.from(".section-lounge-bar .title-overline--xl ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });
    };
    loungebartl
      .from(".section-lounge-bar img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-lounge-bar .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-lounge-bar .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-lounge-bar .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Box Teasers
    let boxteaserstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-box-teasers",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    boxteaserstl
      .from(".section-box-teasers .title-overline", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-box-teasers img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-kulture .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-kulture .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });
  }

  /******************************************
   *                                        *
   *            Experience Page             *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-experience")[0] ) {
    //Section Intro
    let introtl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-intro",
        start: "top 80%",
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    introtl
      .from(".section-intro .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-intro .text-body ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Wellness
    let wellnesstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-wellness",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    wellnesstl
      .from(".section-wellness .az-vertical-line-img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-wellness img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-wellness .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-wellness .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-wellness .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Sport
    let sporttl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-sport",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
       // markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    sporttl
      .from(".section-sport .title-overline", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-sport img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-sport .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-sport .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-sport .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Activities
    let activitestl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-activities",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
       // markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    activitestl
      .from(".section-activities .title-overline", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-activities img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-activities .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-activities .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-activities .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

  }

  /******************************************
   *                                        *
   *              Culture Page              *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-culture")[0] ) {
    //Section Intro
    let introtl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-intro",
        start: "top 80%",
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    introtl
      .from(".section-intro .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-intro .text-body ", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Museum
    let museumtl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-museum",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    museumtl
      .from(".section-museum .az-vertical-line-img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-museum img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-museum .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-museum .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-museum .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Zermatt
    let zermatttl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-zermatt",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    zermatttl
      .from(".section-zermatt h2", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-zermatt .text-body", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-zermatt .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

    //Section Box Teasers
    let boxteaserstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-box-teasers",
        start: defaultStart,
        end: defaultEnd,
        scrub: scrubSpeed,
        //markers: true,
        toggleActions: defaultActions
      },
      defaults: { duration: animDuration },
    });
    boxteaserstl
      .from(".section-box-teasers .title-overline", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-box-teasers img", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-kulture .title-xl", { opacity: 0, y: fadeDistance, autoAlpha: 0 })
      .from(".section-kulture .btn-wrapper", { opacity: 0, y: fadeDistance, autoAlpha: 0 });

  }
});