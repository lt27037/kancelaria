const button = document.querySelector(".navbar__mobileButton");
const content = document.querySelector(".navbar__mobileButton__content");
const menu = document.querySelector(".navbar__menu");

button?.addEventListener("click", () => {
	content?.classList.toggle("active");
	menu?.classList.toggle("active");
});
