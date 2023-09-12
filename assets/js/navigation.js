// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    /* Make header sticky on*/
    let header = $('#header-main');
    let lastScroll = 0; 
  
    $(window).on( 'scroll', function() {
      const currentScroll = window.pageYOffset;
      if ( currentScroll <= 0 ) {
        //console.log('current scroll is ' + currentScroll);
        header.removeClass( 'sticky' );
        return;
      } 
      if ( currentScroll > lastScroll && currentScroll > 0 && ! header.hasClass('sticky') ) {
        //down
        header.removeClass( 'sticky' );
        header.addClass( 'sticky' );
      } 
      lastScroll = currentScroll;
    });

    /* Set mega-menu height */
    const megaMenu = document.querySelector('.mega-menu-wrapper');
    const navHeight = 108; // Change this to match the actual height of your navigation bar

    function setElementHeight() {
      const height = window.innerHeight - navHeight;
      megaMenu.style.setProperty('--element-height', `${height}px`);
    }

    setElementHeight();
    window.addEventListener('resize', setElementHeight);

    /* Hamburguer toogle */ 
    const $toggleBtn = $('.main-menu-toggle')

    $toggleBtn.on( 'click', (e) => {
      $('#header-main').toggleClass('mega-menu-open');
      //$('body').toggleClass('mega-menu-open');
    });


  }, false);
});