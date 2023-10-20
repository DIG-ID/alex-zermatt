import { Fancybox } from "@fancyapps/ui";

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {
    if (document.body.classList.contains("page-template-page-media-corner")) {
      Fancybox.bind("[data-fancybox]", {
        Toolbar: {
          display: {
            left: ["download"],
            middle: [],
            right: ["close"],
          },
          buttons: {
            download: {
              action: "download",
              download: "image",
              svg: `<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M19 8h4v9h5v13H4V17h5v-9h4l3-4h5v4z"/></svg>`,
            },
          },
        },
      });
    }
  }, false);
});


