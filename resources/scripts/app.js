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


// Pedigree Logic
const dogPedigree = document.querySelectorAll('#dogPedigree')

if (dogPedigree) {
  dogPedigree.forEach((item) => {
    let pedigreeImage = item.querySelector('#pedigreeImage')
    let pedigreeCard = item.querySelector('#pedigreeContainer')
    let exitCard = item.querySelector('#pedigreeExit')
    let exitCardOverlay = item.querySelector('#pedigreeBackdrop')
    let pedigreeImageBig = item.querySelector('#pedigreeImageBig')
    let pedigreeImageSmall = item.querySelectorAll('#pedigreeImageSmall')
    let pedigreeImageNumber = item.querySelector('#pedigreeImageNumber')
    let pedigreePrevious = item.querySelector('#pedigreePrevious')
    let pedigreeNext = item.querySelector('#pedigreeNext')

    pedigreePrevious.addEventListener('click', () => {
      
    })

    pedigreeNext.addEventListener('click', () => {
      
    })
    
    const testedArray = []

    let id = 1;
    pedigreeImageSmall.forEach((small) => {
      let smallId = id++
      testedArray.push({
        image: small.getAttribute('style'),
        index: smallId,
      })
      small.addEventListener('click', () => {
        changeImage(smallId)
      })
    })

    function changeImage(e) {
      testedArray.forEach((item) => {
        if (item.index == e) {
          pedigreeImageBig.setAttribute('style', item.image)
          pedigreeImageNumber.innerHTML = item.index
        }
      })
      
    }

    

    

    // pedigreeImageSmall.forEach((small) => {
    //   let styleAttribute = small.getAttribute('style')
    //   let smallId = id++
    //   small.addEventListener('click', () => {
    //     pedigreeImageNumber.innerHTML = smallId
    //     pedigreeImageBig.setAttribute('style', styleAttribute)
    //     console.log(smallId);
    //   })

    //   pedigreePrevious.addEventListener('click', () => {
    //     console.log(smallId);
    //   })
    // })
    
    function toggleHidden() {
      pedigreeCard.classList.toggle('hidden')
    }

    pedigreeImage.addEventListener('click', toggleHidden)
    exitCard.addEventListener('click', toggleHidden)
    exitCardOverlay.addEventListener('click', toggleHidden)

  })

}

