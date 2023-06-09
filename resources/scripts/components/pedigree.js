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
        let smallImg = small.querySelector('img')
        let smallId = id++
        smallImages.push({
          image: smallImg.getAttribute('src'),
          index: smallId,
        })
        small.addEventListener('click', () => {
          changeImage(smallId)
        })
      })
      if (pedigreeImageSmall[0]) {
        pedigreeImageSmall[0].classList.add('border-2', "opacity-60")
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
        pedigreeImageSmall[item.index].classList.remove("border-2", "opacity-60")
        if (item.index == id) {
          pedigreeImageBig.setAttribute('src', item.image)
          pedigreeImageNumber.innerHTML = Number(item.index) + 1
          id = item.index
          pedigreeImageSmall[item.index].classList.add("border-2", "opacity-60")
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
      pedigreeImageSmall[0].classList.add("border-2", "opacity-60")
      pedigreeImageBig.setAttribute('src', smallImages[0].image)
      pedigreeImageNumber.innerHTML = 1
    }

    // Change image by pressing keyboard arrows
    document.addEventListener('keydown', arrowKeys)
    function arrowKeys(e) {
        if (checkOpen === true) {
            if (e.keyCode === 37 || e.keyCode === 38) {
                changeImage('previous')
            }
            if (e.keyCode === 39 || e.keyCode === 40) {
                changeImage('next')
            }
            if (e.keyCode === 27) {
              toggleHidden()
            }
        }
    }

    // Open and close listeners
    pedigreeImage.addEventListener('click', toggleHidden)
    exitCard.addEventListener('click', toggleHidden)
    exitCardOverlay.addEventListener('click', toggleHidden)

  })

}

// Single Page

const singlePedigreeImageBig = document.querySelector('#singlePedigreeImageBig')
if (singlePedigreeImageBig) {
  let singlePedigreeImageSmall = document.querySelectorAll("#singlePedigreeImageSmall")
  let singlePedigreePrevious = document.querySelectorAll("#singlePedigreePrevious")
  let singlePedigreeImageNumber = document.querySelector("#singlePedigreeImageNumber")
  let singlePedigreeNext = document.querySelectorAll("#singlePedigreeNext")

  const smallImages = []

    let id = 0;
    function registerSmallImages() {
      singlePedigreeImageSmall.forEach((small) => {
        let smallImg = small.querySelector('img')
        let smallId = id++
        smallImages.push({
          image: smallImg.getAttribute('src'),
          index: smallId,
        })
        small.addEventListener('click', () => {
          changeImage(smallId)
        })
      })
      if (singlePedigreeImageSmall[0]) {
        singlePedigreeImageSmall[0].classList.add('border-2')
      }

      id = 0
    }
    registerSmallImages()
    
    // Change image by pressing the arrows on the page
    singlePedigreePrevious.forEach((previous) => {
      previous.addEventListener('click', () => {
        changeImage('previous')
    })
    })

  singlePedigreeNext.forEach((next) => {
    next.addEventListener('click', () => {
      changeImage('next')
  })
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
      singlePedigreeImageSmall[item.index].classList.remove("border-2", "opacity-60")
      if (item.index == id) {
        singlePedigreeImageBig.setAttribute('src', item.image)
        singlePedigreeImageNumber.innerHTML = Number(item.index) + 1
        id = item.index
        singlePedigreeImageSmall[item.index].classList.add("border-2", "opacity-60")
      }
    })
  }

  // Change image by pressing keyboard arrows
  document.addEventListener('keydown', arrowKeys)
  function arrowKeys(e) {
    if (e.keyCode === 37) {
      changeImage('previous')
    }
    if (e.keyCode === 39) {
      changeImage('next')
    }
  }
}