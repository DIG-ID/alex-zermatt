import imagesLoaded from 'imagesloaded';
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

  const xl = 1280

  //Default values for almost all animations
  const animationConfig = {
    default: {
      scrubSpeed: 1,
      animDuration: 1.2,
      fadeDistance: "50px",
      defaultStart: "top 80%",
      defaultEnd: "bottom 90%",
      defaultActions: "play none reverse none"
    },
    intro: {
      scrubSpeed: 1,
      animDuration: 1.2,
      fadeDistance: "50px",
      defaultStart: "top 80%",
      defaultEnd: "bottom 80%",
      defaultActions: "play none reverse none"
    },
  };

  const defaultCfg = animationConfig.default;
  const introCfg = animationConfig.intro;

  const defaultitemcfg = {opacity: 0, y: defaultCfg.fadeDistance, autoAlpha: 0};
  const introitemcfg = {opacity: 0, y: introCfg.fadeDistance, autoAlpha: 0};


  // Create intro section timeline
  function createIntroSectionTimeline() {
    return gsap.timeline({
      scrollTrigger: {
        trigger: ".section-intro",
        start: "top 80%",
        end: introCfg.defaultEnd,
        scrub: introCfg.scrubSpeed,
        //markers: true,
        toggleActions: introCfg.defaultActions
      },
      defaults: { duration: introCfg.animDuration },
    })
    .from('.section-intro .title-xl', { ...introitemcfg })
    .from('.section-intro .text-body', { ...introitemcfg });
  }
  
  // Create intro page timeline
  function createIntroPageTimeline() {
    let targets = gsap.utils.toArray([".section-intro img", ".section-intro .title-xl", ".section-intro .text-body"]);
    imagesLoaded('.section-intro img', { background: true }, function() {
      return gsap.from(targets, { opacity: 0, y: introCfg.fadeDistance, autoAlpha: 0, duration: 0.7, stagger: 0.20 } )
    } );
  }
  


  /*****************************************
   *                                       *
   *               Home Page               *
   *                                       *
   ****************************************/
  if ( $(".page-template-page-home")[0] ) {
    
    //Section Intro
    createIntroSectionTimeline();


    //Section Stay
    let staytl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-stay",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    if ( window.innerWidth <= xl ) {
      staytl.from(".section-stay .title-overline--sm ", { ...defaultitemcfg });
    } else {
      staytl.from(".section-stay .title-overline--xl ", { ...defaultitemcfg });
    };
    staytl
      .from(".section-stay .img-sm", { ...defaultitemcfg })
      .from(".section-stay .img-xl", { ...defaultitemcfg })
      .from(".section-stay .title-xl", { ...defaultitemcfg })
      .from(".section-stay .text-body", { ...defaultitemcfg })
      .from(".section-stay .btn-wrapper", { ...defaultitemcfg });

    //Section Enjoy
    let enjoytl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-enjoy",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd, 
        scrub: defaultCfg.scrubSpeed, 
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    if ( window.innerWidth <= xl ) {
      enjoytl.from(".section-enjoy .title-overline--sm ", { ...defaultitemcfg  });
    } else {
      enjoytl.from(".section-enjoy .title-overline--xl ", { ...defaultitemcfg  });
    };
    enjoytl
      .from(".section-enjoy .img-sm", { ...defaultitemcfg })
      .from(".section-enjoy .img-xl", { ...defaultitemcfg })
      .from(".section-enjoy .title-xl", { ...defaultitemcfg })
      .from(".section-enjoy .text-body", { ...defaultitemcfg })
      .from(".section-enjoy .btn-wrapper", { ...defaultitemcfg });

    //Section Experience
    let experiencetl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-experience",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd, 
        scrub: defaultCfg.scrubSpeed, 
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    experiencetl
      .from(".section-experience .title-overline", { ...defaultitemcfg })
      .from(".section-experience .img-sm", { ...defaultitemcfg })
      .from(".section-experience .img-xl", { ...defaultitemcfg  })
      .from(".section-experience .title-xl", { ...defaultitemcfg })
      .from(".section-experience .text-body", { ...defaultitemcfg })
      .from(".section-experience .btn-wrapper", { ...defaultitemcfg });

    //Section Kultur
    let kulturetl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-kulture",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd, 
        scrub: 1, 
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    kulturetl
      .from(".section-kulture .title-overline", { ...defaultitemcfg })
      .from(".section-kulture .img-xl", { ...defaultitemcfg })
      .from(".section-kulture .title-xl", { ...defaultitemcfg })
      .from(".section-kulture .text-body", { ...defaultitemcfg })
      .from(".section-kulture .btn-wrapper", { ...defaultitemcfg });

    //Section Box Teasers
    let boxteaserstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-box-teasers",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd, 
        scrub: defaultCfg.scrubSpeed, 
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    boxteaserstl
      .from(".section-box-teasers .title-overline", { ...defaultitemcfg })
      .from(".section-box-teasers img", { ...defaultitemcfg })
      .from(".section-kulture .title-xl", { ...defaultitemcfg })
      .from(".section-kulture .btn-wrapper", { ...defaultitemcfg });
  }

  /*****************************************
   *                                       *
   *               Stay Page               *
   *                                       *
   ****************************************/
  if ( $(".page-template-page-stay")[0] ) {
    //Section Intro
    createIntroSectionTimeline();

    //Section Rooms
    let roomstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-rooms",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    roomstl
      .from(".section-rooms .az-vertical-line-img", { ...defaultitemcfg })
      .from(".section-rooms img", { ...defaultitemcfg })
      .from(".section-rooms .title-xl", { ...defaultitemcfg })
      .from(".section-rooms .text-body", { ...defaultitemcfg })
      .from(".section-rooms .btn-wrapper", { ...defaultitemcfg });

    //Section Box Teasers
    let boxteaserstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-box-teasers",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    boxteaserstl
      .from(".section-box-teasers .title-overline", { ...defaultitemcfg })
      .from(".section-box-teasers img", { ...defaultitemcfg })
      .from(".section-kulture .title-xl", { ...defaultitemcfg })
      .from(".section-kulture .btn-wrapper", { ...defaultitemcfg });

    //Section Seminare
    let seminaretl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-seminare",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    seminaretl
      .from(".section-seminare .az-vertical-line-img", { ...defaultitemcfg })
      .from(".section-seminare img", { ...defaultitemcfg })
      .from(".section-seminare .title-xl", { ...defaultitemcfg  })
      .from(".section-seminare .text-body", { ...defaultitemcfg  })
      .from(".section-seminare .btn-wrapper", { ...defaultitemcfg });

  }
  /******************************************
   *                                        *
   *            Eat & Drink Page            *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-eat--drink")[0] ) {
    //Section Intro
    createIntroSectionTimeline();

    //Section Grill
    let grilltl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-alex-grill",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    grilltl
      .from(".section-alex-grill .az-vertical-line-img", { ...defaultitemcfg })
      .from(".section-alex-grill img", { ...defaultitemcfg })
      .from(".section-alex-grill .title-xl", { ...defaultitemcfg })
      .from(".section-alex-grill .text-body", { ...defaultitemcfg })
      .from(".section-alex-grill .btn-wrapper", { ...defaultitemcfg });

    //Section le Jardin
    let jardintl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-le-jardin",
        start: defaultCfg.defaultStart,
        end: "bottom 85%",
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    if ( window.innerWidth <= xl ) {
      jardintl.from(".section-le-jardin .title-overline--sm ", { ...defaultitemcfg });
    } else {
      jardintl.from(".section-le-jardin .title-overline--xl ", { ...defaultitemcfg });
    };
    jardintl
      .from(".section-le-jardin img", { ...defaultitemcfg })
      .from(".section-le-jardin .title-xl", { ...defaultitemcfg })
      .from(".section-le-jardin .text-body", { ...defaultitemcfg })
      .from(".section-le-jardin .btn-wrapper", { ...defaultitemcfg });

    //Section Lounge Bar
    let loungebartl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-lounge-bar",
        start: defaultCfg.defaultStart,
        end: "bottom 85%",
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    if ( window.innerWidth <= xl ) {
      loungebartl.from(".section-lounge-bar .title-overline--sm ", { ...defaultitemcfg });
    } else {
      loungebartl.from(".section-lounge-bar .title-overline--xl ", { ...defaultitemcfg });
    };
    loungebartl
      .from(".section-lounge-bar img", { ...defaultitemcfg })
      .from(".section-lounge-bar .title-xl", { ...defaultitemcfg })
      .from(".section-lounge-bar .text-body", { ...defaultitemcfg })
      .from(".section-lounge-bar .btn-wrapper", { ...defaultitemcfg });

    //Section Box Teasers
    let boxteaserstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-box-teasers",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    boxteaserstl
      .from(".section-box-teasers .title-overline", { ...defaultitemcfg })
      .from(".section-box-teasers img", { ...defaultitemcfg })
      .from(".section-kulture .title-xl", { ...defaultitemcfg })
      .from(".section-kulture .btn-wrapper", { ...defaultitemcfg });
  }

  /******************************************
   *                                        *
   *            Experience Page             *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-experience")[0] ) {
    //Section Intro
    createIntroSectionTimeline();

    //Section Wellness
    let wellnesstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-wellness",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    wellnesstl
      .from(".section-wellness .az-vertical-line-img", { ...defaultitemcfg })
      .from(".section-wellness img", { ...defaultitemcfg })
      .from(".section-wellness .title-xl", { ...defaultitemcfg })
      .from(".section-wellness .text-body", { ...defaultitemcfg })
      .from(".section-wellness .btn-wrapper", { ...defaultitemcfg });

    //Section Sport
    let sporttl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-sport",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
       // markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    sporttl
      .from(".section-sport .title-overline", { ...defaultitemcfg })
      .from(".section-sport img", { ...defaultitemcfg })
      .from(".section-sport .title-xl", { ...defaultitemcfg })
      .from(".section-sport .text-body", { ...defaultitemcfg })
      .from(".section-sport .btn-wrapper", { ...defaultitemcfg });

    //Section Activities
    let activitestl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-activities",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
       // markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    activitestl
      .from(".section-activities .title-overline", { ...defaultitemcfg })
      .from(".section-activities img", { ...defaultitemcfg })
      .from(".section-activities .title-xl", { ...defaultitemcfg })
      .from(".section-activities .text-body", { ...defaultitemcfg })
      .from(".section-activities .btn-wrapper", { ...defaultitemcfg });

  }

  /******************************************
   *                                        *
   *              Culture Page              *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-culture")[0] ) {
    //Section Intro
    createIntroSectionTimeline();

    //Section Museum
    let museumtl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-museum",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    museumtl
      .from(".section-museum .az-vertical-line-img", {  ...defaultitemcfg  })
      .from(".section-museum img", {  ...defaultitemcfg  })
      .from(".section-museum .title-xl", {  ...defaultitemcfg  })
      .from(".section-museum .text-body", {  ...defaultitemcfg  })
      .from(".section-museum .btn-wrapper", {  ...defaultitemcfg  });

    //Section Zermatt
    let zermatttl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-zermatt",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    zermatttl
      .from(".section-zermatt h2", {  ...defaultitemcfg  })
      .from(".section-zermatt .text-body", {  ...defaultitemcfg  })
      .from(".section-zermatt .btn-wrapper", {  ...defaultitemcfg  });

    //Section Box Teasers
    let boxteaserstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-box-teasers",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    boxteaserstl
      .from(".section-box-teasers .title-overline", {  ...defaultitemcfg  })
      .from(".section-box-teasers img", { ...defaultitemcfg  })
      .from(".section-kulture .title-xl", {  ...defaultitemcfg  })
      .from(".section-kulture .btn-wrapper", {  ...defaultitemcfg  });

  }

  /******************************************
   *                                        *
   *           Zimmer Archive Page          *
   *                                        *
   ****************************************/
  if ( $(".post-type-archive-zimmer")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section Zimmer
    let zimmertl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-zimmer-sliders .rooms-zimmer",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    zimmertl.from(".section-zimmer-sliders .rooms-zimmer", { ...defaultitemcfg });

    //Section Suite
    let suitetl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-zimmer-sliders .rooms-suite",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    suitetl.from(".section-zimmer-sliders .rooms-suite", { ...defaultitemcfg });

  }

  /******************************************
   *                                        *
   *           Seminar Archive Page         *
   *                                        *
   ****************************************/
  if ( $(".post-type-archive-seminar")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section cards
    let cardTargets = gsap.utils.toArray([".card-seminar", ]);
    cardTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: "bottom 93%",
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });
   
  }

  /******************************************
   *                                        *
   *           Angebot Archive Page         *
   *                                        *
   ****************************************/
  if ( $(".post-type-archive-angebot")[0] ) {
    //Section Intro
    createIntroPageTimeline();
  }

  /******************************************
   *                                        *
   *           Information Page            *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-stay-information")[0] ) {
    //Section Intro
    createIntroPageTimeline();
  }

  /******************************************
   *                                        *
   *              Grill Page                *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-eat--drink-alex-grill")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section hours
    let hoursTargets = gsap.utils.toArray([".opening-hours .title-overline", ".opening-hours img", ".opening-hours p"]);
    hoursTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section Snack
    let snackTargets = gsap.utils.toArray([".wine-food-list .title-overline", ".wine-food-list img", ".wine-food-list .text-body", ".wine-food-list .menus-links"]);
    snackTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section Gallery
    let galleryTargets = gsap.utils.toArray([".section-gallery img", ".section-gallery .title-xl", ".section-gallery .btn-wrapper"]);
    galleryTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section Bodega
    let bodegaTargets = gsap.utils.toArray([".section-bodega .title-xl", ".section-bodega img", ".section-bodega .text-body" ]);
    bodegaTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

  }

  /******************************************
   *                                        *
   *           le Jardin Page               *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-eat--drink-le-jardin")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section Terrace
    let terraceTargets = gsap.utils.toArray([".section-sun-terrace .title-overline", ".section-sun-terrace img"]);
    terraceTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section Snack
    let snackTargets = gsap.utils.toArray([".wine-food-list .title-overline", ".wine-food-list img", ".wine-food-list .text-body", ".wine-food-list .list-links "]);
    snackTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section hours
    let hoursTargets = gsap.utils.toArray([".opening-hours .title-overline", ".opening-hours img", ".opening-hours p"]);
    hoursTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section Gallery
    let galleryTargets = gsap.utils.toArray([".section-gallery img", ".section-gallery .title-xl", ".section-gallery .btn-wrapper"]);
    galleryTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });
  }

  /******************************************
   *                                        *
   *             Lounge Page                *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-eat--drink-lounge--bar")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section Wine 
    let wineTargets = gsap.utils.toArray([".wine-food-list .title-overline", ".wine-food-list img", ".wine-food-list .text-body", ".wine-food-list .menus-links "]);
    wineTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section hours
    let hoursTargets = gsap.utils.toArray([".opening-hours .title-overline", ".opening-hours img", ".opening-hours p"]);
    hoursTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section Smoke
    let smokeTargets = gsap.utils.toArray([".section-smoke .title-overline", ".section-smoke img", ".section-smoke .text-body"]);
    smokeTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section Gallery
    let galleryTargets = gsap.utils.toArray([".section-gallery img", ".section-gallery .title-xl", ".section-gallery .btn-wrapper"]);
    galleryTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

  }

  /******************************************
   *                                        *
   *            Halfboard Page              *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-eat--drink-halfboard")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section dinner and breakfast
    let boxTargets = gsap.utils.toArray([".breakfast", ".dinner" ]);

    boxTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });
    
  }

  /******************************************
   *                                        *
   *            Bankette Page               *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-eat--drink-bankette")[0] ) {
    //Section Intro
    createIntroPageTimeline();
    //Section bankrtt List
    let banketteTargets = gsap.utils.toArray([".section-wedding", ".section-celebrations", ".section-corporate-events" ]);
    banketteTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });
  }

  /******************************************
   *                                        *
   *            Wellness Page               *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-experience-wellness")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section Infrastructure
    let infratl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-infrastructure",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        // markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });

    infratl
      .from(".section-infrastructure .title-overline", { ...defaultitemcfg })
      .from(".section-infrastructure .img-xl", { ...defaultitemcfg })
      .from(".section-infrastructure .title-xl", { ...defaultitemcfg })
      .from(".section-infrastructure .text-body", { ...defaultitemcfg })
      .from(".section-infrastructure .btn-wrapper", { ...defaultitemcfg });
    if ( window.innerWidth >= xl ) {
      infratl.from(".section-infrastructure .img-sm ", { ...defaultitemcfg });
    };

    //Section Massage
    let massagetl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-massage",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        // markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });

    massagetl
      .from(".section-massage .title-overline", { ...defaultitemcfg })
      .from(".section-massage .img-xl", { ...defaultitemcfg })
      .from(".section-massage .title-xl", { ...defaultitemcfg })
      .from(".section-massage .text-body", { ...defaultitemcfg })
      .from(".section-massage .btn-wrapper", { ...defaultitemcfg });
    if ( window.innerWidth >= xl ) {
      massagetl.from(".section-massage .img-sm ", { ...defaultitemcfg });
    };

  }

  /******************************************
   *                                        *
   *          Infrastructure Page            *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-experience-wellness-infrastructure")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section infrastructure List
    let infraTargets = gsap.utils.toArray(".infrastructure-content");

    infraTargets .forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

  }

  /******************************************
   *                                        *
   *          Treatments Page               *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-experience-wellness-treatments")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section treatments List
    let treatTargets = gsap.utils.toArray(".treatments-content");

    treatTargets .forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

  }

  /******************************************
   *                                        *
   *              Sport Page                *
   *                                        *
   ****************************************/
  if ( $(".post-type-archive-sport")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section Fitness
    let fitnesstl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-fitness",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        // markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    fitnesstl
      .from(".section-fitness .title-overline", { ...defaultitemcfg })
      .from(".section-fitness .img-xl", { ...defaultitemcfg })
      .from(".section-fitness .title-xl", { ...defaultitemcfg })
      .from(".section-fitness .text-body", { ...defaultitemcfg })
      .from(".section-fitness .btn-wrapper", { ...defaultitemcfg });

    //Section Tennis
    let tennistl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-tennis",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        // markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    tennistl
      .from(".section-tennis .title-overline", { ...defaultitemcfg })
      .from(".section-tennis .img-xl", { ...defaultitemcfg })
      .from(".section-tennis .title-xl", { ...defaultitemcfg })
      .from(".section-tennis .text-body", { ...defaultitemcfg })
      .from(".section-tennis .btn-wrapper", { ...defaultitemcfg });

    //Section Squash
    let squashtl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-squash",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        // markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    squashtl
      .from(".section-squash .title-overline", { ...defaultitemcfg })
      .from(".section-squash .img-xl", { ...defaultitemcfg })
      .from(".section-squash .title-xl", { ...defaultitemcfg })
      .from(".section-squash .text-body", { ...defaultitemcfg })
      .from(".section-squash .btn-wrapper", { ...defaultitemcfg });

    //Section Golf
    let golftl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-golf",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        // markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    golftl
      .from(".section-golf .title-overline", { ...defaultitemcfg })
      .from(".section-golf .img-xl", { ...defaultitemcfg })
      .from(".section-golf .title-xl", { ...defaultitemcfg })
      .from(".section-golf .text-body", { ...defaultitemcfg })
      .from(".section-golf .btn-wrapper", { ...defaultitemcfg });

  }

  /******************************************
   *                                        *
   *            Activities Page             *
   *                                        *
   ****************************************/
  if ( $(".post-type-archive-activities")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section Sommer
    let sommertl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-sommer-sliders",
        start: defaultCfg.defaultStart,
        end: "bottom 90%",
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    sommertl.from(".section-sommer-sliders", { ...defaultitemcfg });

    //Section Winter
    let wintertl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-winter-sliders",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    wintertl.from(".section-winter-sliders", { ...defaultitemcfg });
    
  }

  /******************************************
   *                                        *
   *          Kultur Zermatt Page           *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-culture-zermatt")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section Village
    let villagetl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-village",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    villagetl
      .from(".section-village .title-overline", {  ...defaultitemcfg  })
      .from(".section-village .img-wide", {  ...defaultitemcfg  })
      .from(".section-village .title-xl", {  ...defaultitemcfg  })
      .from(".section-village .text-body-1", {  ...defaultitemcfg  })
      .from(".section-village .img-square", {  ...defaultitemcfg  })
      .from(".section-village .text-body-2", {  ...defaultitemcfg  });

    //Section Matterhorn
    let matterhorntl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-matterhorn-content",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    matterhorntl
      .from(".section-matterhorn-content .title-overline", {  ...defaultitemcfg  })
      .from(".section-matterhorn-content .img-wide", {  ...defaultitemcfg  })
      .from(".section-matterhorn-content .text-body-1", {  ...defaultitemcfg  })
      .from(".section-matterhorn-content .title-xl", {  ...defaultitemcfg  })
      .from(".section-matterhorn-content .img-square", {  ...defaultitemcfg  })
      .from(".section-matterhorn-content .text-body-2", {  ...defaultitemcfg  });
      
    //Section Matterhorn - tradition
    let matterhorntraditiontl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-matterhorn-tradition",
        start: defaultCfg.defaultStart,
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
        //markers: true,
        toggleActions: defaultCfg.defaultActions
      },
      defaults: { duration: defaultCfg.animDuration },
    });
    matterhorntraditiontl
      .from(".section-matterhorn-tradition img", {  ...defaultitemcfg  })
      .from(".section-matterhorn-tradition .title-xl", {  ...defaultitemcfg  })
      .from(".section-matterhorn-tradition .text-body", {  ...defaultitemcfg  });
      


  }

  /******************************************
   *                                        *
   *         Events Archives Page           *
   *                                        *
   ****************************************/
  if ( $(".post-type-archive-event")[0] ) {
    //Section Intro
    createIntroPageTimeline();
  }

  /******************************************
   *                                        *
   *           Alex Museum Page             *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-culture-alex-museum")[0] ) {
    //Section Intro
    createIntroPageTimeline();
  }

  /******************************************
   *                                        *
   *            Uber uns Page               *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-about")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section Host 1
    let host1Targets = gsap.utils.toArray([".host-1 .title-overline", ".host-1 img", ".host-1 .text-xl", "host-1 .text-body", ]);
    host1Targets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section Host 2
    let host2Targets = gsap.utils.toArray([".host-2 img", ".host-2 .text-xl", "host-2 .text-body", ]);
    host2Targets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section chefs
    let chefTargets = gsap.utils.toArray([".section-chef .title-overline", ".section-chef .featured-image", ".section-chef .title-xl", ".section-chef .text-body"]);
    chefTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

  }


  /******************************************
   *                                        *
   *              Contact Page              *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-contact")[0] ) {
    //Section Intro
    let targets = gsap.utils.toArray([".section-intro img", ".section-intro .title-xl", ".section-intro .text-bigger-light", /*".section-intro a"*/]);
    imagesLoaded('.section-intro img', { background: true }, function() {
      return gsap.from(targets, { opacity: 0, y: introCfg.fadeDistance, autoAlpha: 0, duration: 0.7, stagger: 0.20 } )
    } );
  }

  /******************************************
   *                                        *
   *             Arrival Page               *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-arrival")[0] ) {
    //Section Intro
    createIntroPageTimeline();

    //Section Zug
    let zugTargets = gsap.utils.toArray([".section-anreise-zug .title-overline", ".section-anreise-zug img", ".section-anreise-zug .text-body", ]);
    zugTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section auto
    let autoTargets = gsap.utils.toArray([".section-anreise-auto .title-overline", ".section-anreise-auto img", ".section-anreise-auto .text-body", ]);
    autoTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

    //Section service
    let serviceTargets = gsap.utils.toArray([".section-anreise-service .title-overline", ".section-anreise-service img", ".section-anreise-service .text-body", ]);
    serviceTargets.forEach( target => {
      gsap.from(target, {
        ...defaultitemcfg,
        stagger: 0.20,
        scrollTrigger: {
          trigger: target,
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          //markers: true,
          toggleActions: defaultCfg.defaultActions
        }
      });
    });

  }

  /******************************************
   *                                        *
   *            News Archive Page           *
   *                                        *
   ****************************************/
  if ( $(".post-type-archive-news")[0] ) {
    //Section Intro
    let introTargets = gsap.utils.toArray([".section-intro .title-xl", ".section-intro .text-body"]);
    gsap.from(introTargets, {
      opacity: 0,
      y: introCfg.fadeDistance,
      autoAlpha: 0,
      duration: 0.7,
      stagger: 0.20
    });
  }

  /******************************************
   *                                        *
   *              Gallery Page              *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-gallery")[0] ) {
    //Section Intro
    let introTargets = gsap.utils.toArray([".section-intro .title-xl", ".section-intro .text-body"]);
    gsap.from(introTargets, {
      opacity: 0,
      y: introCfg.fadeDistance,
      autoAlpha: 0,
      duration: 0.7,
      stagger: 0.20
    });
  }

  /******************************************
   *                                        *
   *               Jobs Page                *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-jobs")[0] ) {
    //Section Intro
    let introTargets = gsap.utils.toArray([".section-intro .title-xl", ".section-intro .text-body"]);
    gsap.from(introTargets, {
      opacity: 0,
      y: introCfg.fadeDistance,
      autoAlpha: 0,
      duration: 0.7,
      stagger: 0.20
    });
  }

});