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