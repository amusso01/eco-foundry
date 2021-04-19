export default function hamburger() {
	const burger = document.getElementById("hamburger");
	const mainMenu = document.getElementById("menuGroup");
	const htmlElement = document.querySelector("html");
	burger.addEventListener("click", function (e) {
		mainMenu.classList.toggle("showMenu");
		burger.classList.toggle("is-active");

		// prevent content scrolling
		htmlElement.classList.toggle("noscroll");
	});
}
