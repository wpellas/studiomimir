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