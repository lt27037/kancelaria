const navbar = document.querySelector(".navbar");

const handleChangeNavbar = () => {
	if (window.pageYOffset < 300) {
		navbar.classList.add("navbar--transparent");
	} else {
		if (navbar.classList.contains("navbar--transparent")) {
			navbar.classList.remove("navbar--transparent");
		}
	}
};

window.addEventListener("scroll", handleChangeNavbar);
handleChangeNavbar();
