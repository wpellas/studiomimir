// Questionnaire Logic
// const questionnaire = document.querySelectorAll("#questionnaire")

// if (questionnaire) {
//   questionnaire.forEach((item) => {
//     let questionnaireTitle = item.querySelector("#questionnaire_title")
//     let questionnaireBody = item.querySelector("#questionnaire_body")
//     let questionnaireParent = item.querySelector("#questionnaire_parent")
//     let questionnaireArrow = item.querySelector("#questionnaire_arrow")
//     let checkOpen = false;
//     questionnaireTitle.addEventListener("click", () => {
//       if (checkOpen) {
//         questionnaireBody.classList.toggle("opacity-0")
//         setTimeout(() => {
//           questionnaireBody.classList.add("delay-300")
//           questionnaireParent.classList.toggle("-translate-y-full")
//           questionnaireArrow.classList.toggle("rotate-180")
//         },300)
//         setTimeout(() => {
//           questionnaireBody.classList.toggle("h-0")
//         },700)
//       } else {
//         setTimeout(() => {
//           questionnaireBody.classList.remove("delay-300")
//         },300)
//         questionnaireBody.classList.toggle("opacity-0")
//         questionnaireBody.classList.toggle("h-0")
//         questionnaireParent.classList.toggle("-translate-y-full")
//         questionnaireArrow.classList.toggle("rotate-180")
//       }
//       checkOpen = !checkOpen
//     })
//   })
// }

// class Questionnaire {
//   constructor(el) {
//     this.el = el
//     this.questionnaireTitle = el.querySelector("#questionnaire_title")
//     this.questionnaireBody = el.querySelector("#questionnaire_body")
//     this.questionnaireParent = el.querySelector("#questionnaire_parent")
//     this.questionnaireArrow = el.querySelector("#questionnaire_arrow")
//     this.checkOpen = false;
//     this.questionnaireTitle.addEventListener('click', () => this.onClick())
//   }

//   onClick() {
//     if (this.checkOpen) {
//       this.questionnaireBody.classList.toggle("opacity-0")
//       setTimeout(() => {
//         this.questionnaireBody.classList.add("delay-300")
//         this.questionnaireParent.classList.toggle("-translate-y-full")
//         this.questionnaireArrow.classList.toggle("rotate-180")
//       },300)
//       setTimeout(() => {
//         this.questionnaireBody.classList.toggle("h-0")
//       },700)
//     } else {
//       setTimeout(() => {
//         this.questionnaireBody.classList.remove("delay-300")
//       },300)
//       this.questionnaireBody.classList.toggle("opacity-0")
//       this.questionnaireBody.classList.toggle("h-0")
//       this.questionnaireParent.classList.toggle("-translate-y-full")
//       this.questionnaireArrow.classList.toggle("rotate-180")
//     }
//     this.checkOpen = !this.checkOpen
//   }
// }

// document.querySelectorAll("#questionnaire").forEach((el) => {
//   new Questionnaire(el)
// })

//

class Questionnaire {
  constructor(el) {
    this.el = el
    this.questionnaireTitle = el.querySelector(".mimir-question-title")
    this.questionnaireBody = el.querySelector(".mimir-question-body")
    this.questionnaireArrow = el.querySelector("#questionnaire_arrow")
    this.checkOpen = false;
    this.questionnaireTitle.addEventListener('click', () => this.onClick())
    this.questionnaireArrow.addEventListener('click', () => this.onClick())
    this.questionnaireBody.classList.add("opacity-0", "delay-300", "-translate-y-full", "h-0")
  }

  onClick() {
    if (this.checkOpen) {
      this.questionnaireBody.classList.toggle("opacity-0")
      setTimeout(() => {
        this.questionnaireBody.classList.add("delay-300")
        this.questionnaireBody.classList.toggle("-translate-y-full")
        this.questionnaireArrow.classList.toggle("rotate-180")
      },300)
      setTimeout(() => {
        this.questionnaireBody.classList.toggle("h-0")
      },700)
    } else {
      setTimeout(() => {
        this.questionnaireBody.classList.remove("delay-300")
      },300)
      this.questionnaireBody.classList.toggle("opacity-0")
      this.questionnaireBody.classList.toggle("h-0")
      this.questionnaireBody.classList.toggle("-translate-y-full")
      this.questionnaireArrow.classList.toggle("rotate-180")
    }
    this.checkOpen = !this.checkOpen
  }
}

document.querySelectorAll(".mimir-question").forEach((el) => {
  new Questionnaire(el)
})

// class Questionnaire {
//   constructor(el) {
//     this.el = el
//     this.questionnaireTitle = el.querySelector(".mimir-question-title")
//     this.questionnaireBody = el.querySelector(".mimir-question-body")
//     this.questionnaireArrow = el.querySelector("#questionnaire_arrow")
//     this.checkOpen = false;
//     this.questionnaireTitle.addEventListener('click', () => this.onClick())
//     this.questionnaireBody.setAttribute('style', 'height:0px;')
//     this.questionnaireBody.setAttribute('style', 'opacity:0;')
//   }

//   onClick() {
//     if (this.checkOpen) {
//       this.questionnaireBody.setAttribute('style', 'opacity:0;')
//       setTimeout(() => {
//         this.questionnaireBody.classList.add("delay-300")
//         // this.questionnaireTitle.classList.toggle("-translate-y-full")
//         this.questionnaireArrow.classList.toggle("rotate-180")
//       },300)
//       setTimeout(() => {
//         this.questionnaireBody.setAttribute('style', 'height:0px;')
//       },700)
//     } else {
//       setTimeout(() => {
//         this.questionnaireBody.classList.remove("delay-300")
//       },300)
//       this.questionnaireBody.setAttribute('style', 'opacity:1;')
//       this.questionnaireBody.setAttribute('style', 'height:auto;')
//       // this.questionnaireTitle.classList.toggle("-translate-y-full")
//       this.questionnaireArrow.classList.toggle("rotate-180")
//     }
//     this.checkOpen = !this.checkOpen
//   }
// }

// document.querySelectorAll(".mimir-question").forEach((el) => {
//   new Questionnaire(el)
// })