
const navElement = document.querySelector(".main-header");

window.addEventListener("scroll", () => {
	if (window.scrollY > 50){
		navElement.classList.add("sticky");
	}
	else{
		navElement.classList.remove("sticky");
	}
});
