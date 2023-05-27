import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

// Header Logic
const openSmallMenu = document.querySelector("#openSmallMenu")
const smallMenu = document.querySelector("#smallMenu")
const closeSmallMenu = document.querySelector("#closeSmallMenu")

if (smallMenu) {
  openSmallMenu.addEventListener("click", () => {
    smallMenu.classList.toggle("hidden")
  })
  closeSmallMenu.addEventListener("click", () => {
    smallMenu.classList.toggle("hidden")
  })
  
}


// Questionnaire Logic
const questionnaire = document.querySelectorAll("#questionnaire")

if (questionnaire) {
  questionnaire.forEach((item) => {
    let questionnaireBody = item.querySelector("#questionnaire_body")
    let questionnaireArrow = item.querySelector("#questionnaire_arrow")
    item.addEventListener("click", () => {
      if (questionnaireBody) {
        questionnaireBody.classList.toggle("hidden")
      }
      if (questionnaireArrow) {
        questionnaireArrow.classList.toggle("rotate-180")
      }
    })
  })
}

// Lightbox Logic
const portfolioImage = document.querySelectorAll("#portfolioImage")

if (portfolioImage) {
  portfolioImage.forEach((item) => {
    let portfolioImageLightbox = item.querySelector("#portfolioImageLightbox")
    item.addEventListener("click", () => {
      if (portfolioImageLightbox) {
        portfolioImageLightbox.classList.toggle("hidden");
      }
    })
  })
}