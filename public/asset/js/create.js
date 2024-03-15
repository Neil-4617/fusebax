"use strict";

// =======================
// Multi Step Form
// =======================


const multiStepForm = document.querySelector("[data-multi-step]")
const formSteps = [...document.querySelectorAll("[data-step]")]
const editForm = document.querySelector("[data-edit-form]")

// Handle Changes on Input Field
multiStepForm.addEventListener('change', e => {
	const inputs = [ ...formSteps[currentStep].querySelectorAll("input")]

	if (e.target.validity.valid) {
		if(e.target.getAttribute != null) {
			if (e.target.value.length >= e.target.getAttribute('minlength')){
				document.querySelector(`[data-valid-${e.target.name}]`).textContent = `Looks good`,
				document.querySelector(`[data-valid-${e.target.name}]`).classList.replace("invalid-feedback", "valid-feedback"),
				document.querySelector(`#${e.target.id}`).classList.remove("fusebax-invalid"),	
				document.querySelector(`#${e.target.id}`).classList.add("fusebax-valid")	
			}
			else {
				document.querySelector(`[data-valid-${e.target.name}]`).textContent = `Invalid ${e.target.name}`,
				document.querySelector(`[data-valid-${e.target.name}]`).classList.replace("valid-feedback", "invalid-feedback"),
				document.querySelector(`#${e.target.id}`).classList.remove("fusebax-valid"),
				document.querySelector(`#${e.target.id}`).classList.add("fusebax-invalid")
			}
		document.querySelector(`[data-valid-${e.target.name}]`).classList.add("d-block")
		}
	}
	else {
		document.querySelector(`[data-valid-${e.target.name}]`).textContent = `Invalid ${e.target.name}`,
		document.querySelector(`[data-valid-${e.target.name}]`).classList.replace("valid-feedback", "invalid-feedback"),
		document.querySelector(`#${e.target.id}`).classList.remove("fusebax-valid"),
		document.querySelector(`#${e.target.id}`).classList.add("fusebax-invalid")
	}
})

let currentStep = formSteps.findIndex(step => {
	return step.classList.contains("active")
})

// Add/Remove "active" class
const showCurrentStepForm = () => {
	formSteps.forEach((step, index) => {
		step.classList.toggle("active", index === currentStep)
	})
}

// Display Initial Step Form 
if (currentStep < 0){
	currentStep = 0
	showCurrentStepForm()
}


// Click Event For Every Next and Previous Button
multiStepForm.addEventListener("click", e => {
	let counter
	if (e.target.matches("[data-next]")) {
		counter = 1
		if (counter == null) return
		const inputs = [ ...formSteps[currentStep].querySelectorAll("input")]
		const allValidInput = inputs.every(input => input.reportValidity())
		if (allValidInput) {
			currentStep += counter
		}
	}
	else if (e.target.matches("[data-previous]")){
		counter = -1
		currentStep += counter
	}
	showCurrentStepForm()
})
// =======================
// End of Multi Step Form 
// =======================