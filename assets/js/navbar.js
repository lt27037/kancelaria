export default () => {
	const navbar = document.querySelector(".navbar");

	window.addEventListener("scroll", () => {
		if (window.pageYOffset < 300) {
			navbar.classList.add("navbar--transparent");
		} else {
			if (navbar.classList.contains("navbar--transparent")) {
				navbar.classList.remove("navbar--transparent");
			}
		}
	});
};
