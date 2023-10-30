// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

    let buttosnsBar = $('.section-buttons-bar');
    let lastScroll = 0; 
  
    $(window).on( 'scroll', function() {
      const currentScroll = window.pageYOffset;
      if ( currentScroll <= 800 ) {
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
