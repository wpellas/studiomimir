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
    
    const smallImages = []

    let id = 0;
    function registerSmallImages() {
      pedigreeImageSmall.forEach((small) => {
        let smallId = id++
        smallImages.push({
          image: small.getAttribute('style'),
          index: smallId,
        })
        small.addEventListener('click', () => {
          changeImage(smallId)
        })
      })
      if (pedigreeImageSmall[0]) {
        pedigreeImageSmall[0].classList.add('border-2')
      }

      id = 0
    }
    registerSmallImages()

    // Change image by pressing the arrows on the page
    pedigreePrevious.addEventListener('click', () => {
        changeImage('previous')
    })

    pedigreeNext.addEventListener('click', () => {
        changeImage('next')
    })

    function changeImage(e) {
    // If incoming value is a string
      if (e === 'previous') {
        if (id === 0) {
          id = smallImages.length - 1
        } else {
          id--
        }
      }

      if (e === 'next') {
        if (id === smallImages.length - 1) {
          id = 0
        } else {
          id++
        }
      }
    //   If incoming value is a number
      if (Number.isInteger(e)) {
        id = e
      }

      // Removes styling from all items but adds it to the matching image
      // Also sets the ID variable to properly display which image is currently shown. +1 cause array.
      smallImages.forEach((item) => {
        pedigreeImageSmall[item.index].classList.remove("border-2")
        if (item.index == id) {
          pedigreeImageBig.setAttribute('style', item.image)
          pedigreeImageNumber.innerHTML = Number(item.index) + 1
          id = item.index
          pedigreeImageSmall[item.index].classList.add("border-2")
        }
      })
    }

    // Check if lightbox is open or not and opens/closes
    let checkOpen = false;
    function toggleHidden() {
      pedigreeCard.classList.toggle('hidden')
      checkOpen = !checkOpen
      id = 0
      pedigreeImageSmall.forEach((item) => {
        item.classList.remove("border-2")
      })
      pedigreeImageSmall[0].classList.add("border-2")
      pedigreeImageBig.setAttribute('style', smallImages[0].image)
      pedigreeImageNumber.innerHTML = 1
    }

    // Change image by pressing keyboard arrows
    document.addEventListener('keydown', arrowKeys)
    function arrowKeys(e) {
        if (checkOpen === true) {
            if (e.keyCode === 37) {
                changeImage('previous')
            }
            if (e.keyCode === 39) {
                changeImage('next')
            }
        }
    }

    // Open and close listeners
    pedigreeImage.addEventListener('click', toggleHidden)
    exitCard.addEventListener('click', toggleHidden)
    exitCardOverlay.addEventListener('click', toggleHidden)

  })

}

