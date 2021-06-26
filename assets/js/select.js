export default () => {
	const select = document.querySelector(".select__button");

	select.addEventListener("change", () => {
		const link = select.value;
		window.location.href = link;
	});
};
