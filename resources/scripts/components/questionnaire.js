// Questionnaire Logic
const questionnaire = document.querySelectorAll("#questionnaire")

if (questionnaire) {
  questionnaire.forEach((item) => {
    let questionnaireBody = item.querySelector("#questionnaire_body")
    let questionnaireParent = item.querySelector("#questionnaire_parent")
    let questionnaireArrow = item.querySelector("#questionnaire_arrow")
    let checkOpen = false;
    item.addEventListener("click", () => {
      if (checkOpen) {
        questionnaireBody.classList.toggle("opacity-0")
        setTimeout(() => {
          questionnaireBody.classList.add("delay-300")
          questionnaireParent.classList.toggle("-translate-y-full")
          questionnaireArrow.classList.toggle("rotate-180")
        },300)
        setTimeout(() => {
          questionnaireBody.classList.toggle("h-0")
        },700)
      } else {
        setTimeout(() => {
          questionnaireBody.classList.remove("delay-300")
        },300)
        questionnaireBody.classList.toggle("opacity-0")
        questionnaireBody.classList.toggle("h-0")
        questionnaireParent.classList.toggle("-translate-y-full")
        questionnaireArrow.classList.toggle("rotate-180")
      }
      checkOpen = !checkOpen
    })
  })
}