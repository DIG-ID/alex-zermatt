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
      defaultStart: "top 70%",
      defaultEnd: "bottom 80%",
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
      return gsap.from(targets, { opacity: 0, y: introCfg.fadeDistance, autoAlpha: 0, duration: 0.7, stagger: 0.25 } )
    } );
   /* return gsap.timeline({
      scrollTrigger: {
        trigger: ".section-intro",
      },
      defaults: { duration: 0.8},
    })

    

    .from('.section-intro img', { opacity: 0, y: introCfg.fadeDistance, autoAlpha: 0 })
    .from('.section-intro .title-xl', { ...defaultitemcfg }, '<')
    .from('.section-intro .text-body', { ...defaultitemcfg }, '<');*/
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
        end: defaultCfg.defaultEnd,
        scrub: defaultCfg.scrubSpeed,
       // markers: true,
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
        end: defaultCfg.defaultEnd,
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
    let targets = gsap.utils.toArray(".card-seminar");
    gsap.from(targets, {
        opacity: 0,
        y: introCfg.fadeDistance,
        autoAlpha: 0,
        duration: 0.7,
        stagger: 0.25,
        scrollTrigger: {
          trigger: ".card-seminar",
          start: defaultCfg.defaultStart,
          end: defaultCfg.defaultEnd,
          scrub: defaultCfg.scrubSpeed,
          toggleActions: defaultCfg.defaultActions
        },
      }
    );
   
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
  }

  /******************************************
   *                                        *
   *           le Jardin Page               *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-eat--drink-le-jardin")[0] ) {
    //Section Intro
    createIntroPageTimeline();
  }

  /******************************************
   *                                        *
   *             Lounge Page                *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-eat--drink-lounge--bar")[0] ) {
    //Section Intro
    createIntroPageTimeline();
  }

  /******************************************
   *                                        *
   *            Halfboard Page              *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-eat--drink-halfboard")[0] ) {
    //Section Intro
    createIntroPageTimeline();
  }

  /******************************************
   *                                        *
   *            Bankette Page               *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-eat--drink-bankette")[0] ) {
    //Section Intro
    createIntroPageTimeline();
  }

  /******************************************
   *                                        *
   *            Wellness Page               *
   *                                        *
   ****************************************/
  if ( $(".page-template-page-experience-wellness")[0] ) {
    //Section Intro
    createIntroPageTimeline();
  }

  /******************************************
   *                                        *
   *              Sport Page                *
   *                                        *
   ****************************************/
  if ( $(".post-type-archive-sport")[0] ) {
    //Section Intro
    createIntroPageTimeline();
  }

  /******************************************
   *                                        *
   *            Activities Page             *
   *                                        *
   ****************************************/
  if ( $(".post-type-archive-activities")[0] ) {
    //Section Intro
    createIntroPageTimeline();
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
      .from(".section-village .text-body-2", {  ...defaultitemcfg  })
      .from(".section-village .img-square", {  ...defaultitemcfg  });

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
      .from(".section-matterhorn-tradition .title-xl", {  ...defaultitemcfg  })
      .from(".section-matterhorn-tradition .text-body", {  ...defaultitemcfg  })
      .from(".section-matterhorn-tradition img", {  ...defaultitemcfg  })


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

});