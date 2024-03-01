new DataTable('#fusebaxDB');


// =======================
// Multi Step Form
// =======================

const multiStepForm = document.querySelector("[data-multi-step]")
const formSteps = [...document.querySelectorAll("[data-step]")]

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
	}
	else if (e.target.matches("[data-previous]")){
		counter = -1
	}

	if (counter == null) return
	const inputs = [ ...formSteps[currentStep].querySelectorAll("input")]
	const allValidInput = inputs.every(input => input.reportValidity())
	if (allValidInput) {
		currentStep += counter
		showCurrentStepForm() 
	}
})
// =======================
// End of Multi Step Form 
// =======================