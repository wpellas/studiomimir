// Lightbox Logic
const portfolioImage = document.querySelectorAll("#portfolioImage")

if (portfolioImage) {
  let openClose = false
  portfolioImage.forEach((item) => {
    let portfolioImageLightbox = item.querySelector("#portfolioImageLightbox")
    item.addEventListener("click", () => {
      if (portfolioImageLightbox && !openClose) {
        portfolioImageLightbox.classList.remove("opacity-0", "invisible", "pointer-events-none", "scale-110");
        openClose = !openClose
      } else if (portfolioImageLightbox && openClose) {
        portfolioImageLightbox.classList.add("opacity-0", "invisible", "pointer-events-none", "scale-110");
        openClose = !openClose
      }
    })
  })
}