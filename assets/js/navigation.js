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
    let navHeight = '';
    if ( window.innerWidth > 1280 ) {
      navHeight = 108; // Change this to match the actual height of your navigation bar
    } else {
      navHeight = 64; // Change this to match the actual height of your navigation bar
    }

    function setElementHeight() {
      const height = window.innerHeight - navHeight;
      megaMenu.style.setProperty('--element-height', `${height}px`);
    }

    setElementHeight();
    window.addEventListener('resize', setElementHeight);

    /* Hamburguer toogle */ 
    const $toggleBtn = $('.main-menu-toggle')

    $toggleBtn.on('click', (e) => {
      $('#header-main').toggleClass('mega-menu-open');
      //$('body').toggleClass('mega-menu-open');
    
      const $spanElement = $('.main-menu-toggle span.text');
    
      if ($spanElement.text().trim() === 'Menu') {
        if(window.location.href.indexOf("/en/") > -1) {
          $spanElement.text('Close');
        }
        else if(window.location.href.indexOf("/fr/") > -1){
          $spanElement.text('Fermer');
        } else{
          $spanElement.text('Schliessen');
        }
        
      } else {
        $spanElement.text('Menu');
      }
    });
    

    //test for languages
    /*if(window.location.href.indexOf("/en/") > -1) {
        alert("Spanish language");
    }*/


    /*const megaMenu = document.querySelector('.mega-menu-wrapper');
    const navHeight = 108; // Replace with the actual height of your navigation bar
    
    function setElementHeight() {
      if (window.innerWidth > 1280) {
        const height = window.innerHeight - navHeight;
        megaMenu.style.setProperty('--element-height', `${height}px`);
      } else {
        // Reset the element height or handle it as needed when the window is <= 1280px
        megaMenu.style.removeProperty('--element-height');
      }
    }
    
    function handleWindowSize() {
      // Remove the previous resize event listener to prevent multiple listeners
      window.removeEventListener('resize', setElementHeight);
    
      // Add a new event listener only if the window is wider than 1280px
      if (window.innerWidth > 1280) {
        setElementHeight();
        window.addEventListener('resize', setElementHeight);
      }
    }
    
    window.addEventListener("resize", handleWindowSize);
    
    // Call handleWindowSize once on page load to set the initial state
    handleWindowSize();*/

    // Mega menu accordion
    let acc = document.querySelectorAll(".menu-accordion");
    let i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        let isActive = this.classList.contains("active");
        
        // Close all accordions
        for (let j = 0; j < acc.length; j++) {
          acc[j].classList.remove("active");
          let panel = acc[j].nextElementSibling;
          panel.style.maxHeight = null;
        }
        
        if (!isActive) {
          this.classList.add("active");
          let panel = this.nextElementSibling;
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }

  }, false);
});