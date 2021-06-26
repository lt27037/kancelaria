export default () => {
	const toTop = document.querySelector(".footer__toTop");

	toTop?.addEventListener("click", () => {
		window.scrollTo({ top: 0, behavior: "smooth" });
	});
};
