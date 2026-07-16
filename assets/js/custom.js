// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

    function trySetOriginalReferrer() {
      if (typeof Cookiebot !== 'undefined' && Cookiebot.consent.marketing) {
        if (!localStorage.getItem('originalReferrer')) {
          localStorage.setItem('originalReferrer', document.referrer);
        }
      }
    }

    // Run immediately in case consent was already given on a previous visit
    trySetOriginalReferrer();

    // Also run the moment consent is granted, for first-time visitors
    window.addEventListener('CookiebotOnAccept', trySetOriginalReferrer);

    let buttosnsBar = $('.section-buttons-bar');
    let lastScroll = 0;
    let topDistance = 0;


    if ( $(".page-template-page-home")[0] ) {
      topDistance = 800;
    } else {
      topDistance = 0;
    };
  
    $(window).on( 'scroll', function() {
      const currentScroll = window.pageYOffset;
      if ( currentScroll <= topDistance ) {
        //console.log('current scroll is ' + currentScroll);
        buttosnsBar.removeClass( 'sticky' );
        return;
      } 
      if ( currentScroll > lastScroll && currentScroll > 0 && ! buttosnsBar.hasClass('sticky') ) {
        //down
        buttosnsBar.removeClass( 'sticky' );
        buttosnsBar.addClass( 'sticky' );
      } 
      lastScroll = currentScroll;
    });
  }, false);
});