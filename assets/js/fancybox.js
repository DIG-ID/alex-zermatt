import { Fancybox } from "@fancyapps/ui";

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {
    if (document.body.classList.contains("page-template-page-media-corner")) {
      Fancybox.bind("[data-fancybox]", {
        Toolbar: {
          display: {
            left: [],
            middle: [],
            right: ["close"],
          },
        },
      });
    }
  }, false);
});


