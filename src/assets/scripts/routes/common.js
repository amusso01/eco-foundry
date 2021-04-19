import smoothscroll from "smoothscroll-polyfill";
import lozad from "lozad";
import hamburger from "./../part/hamburger";
import navigation from "./../part/navigation";
import tabSlider from "./../part/tabslider";
import teamSlider from "./../part/teamSlider";
import accordion from "../part/accordion"

export default {
	init() {
		// JavaScript to be fired on all pages

		// kick off the polyfill!
		smoothscroll.polyfill();

		// Hamburger event listener
		hamburger();

		// Nav resize
		navigation();

		// TEAMSLIDER
		const teamSliderElement = document.getElementById('blockTeam');
		if (typeof(teamSliderElement) != 'undefined' && teamSliderElement != null)
		{
			teamSlider()
		}

		// TABSLIDER
		const tabSliderElement = document.getElementById('blocktabSlider');
		if (typeof(tabSliderElement) != 'undefined' && tabSliderElement != null)
		 {
			 tabSlider();
		 }

		//  ACCORDION
		const accordionDiv = document.getElementById('js-badger-accordion')
		if (typeof(accordionDiv) != 'undefined' && accordionDiv != null)
		 {
			 accordion();
		 }

		// Lazy load image with lozad.js https://github.com/ApoorvSaxena/lozad.js
		const observer = lozad(); // lazy loads elements with default selector as '.lozad'
		observer.observe();


	},

	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
