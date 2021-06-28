const navbar = document.querySelector(".navbar");

const handleScroll = () => {
	if (window.innerWidth > 786) {
		if (window.pageYOffset < 300) {
			navbar.classList.add("navbar--transparent");
		} else {
			if (navbar.classList.contains("navbar--transparent")) {
				navbar.classList.remove("navbar--transparent");
			}
		}
	}
};

handleScroll();
window.addEventListener("scroll", handleScroll);
