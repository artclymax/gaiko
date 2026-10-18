//import 'jarallax/dist/jarallax.min.css';
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import './scss/style.scss';
//!
//import { Swiper } from "swiper/bundle";

//import { jarallax } from "jarallax";
import { Fancybox } from "@fancyapps/ui/dist/fancybox/";

import { AutoCalc } from "./js/AutoCalc.js";
import { Menu } from './js/Menu.js';
//import { RunningLine } from './js/RunningLine.js';
//import { BackdropList } from './js/BackdropList.js';
import { Modal } from './js/Modal.js';
import { cookies } from "./js/Cookies.js";
import { imask } from "./js/imask.js";
import { fileBtn } from "./js/FileBtn.js";
//import { CustomFieldSelect } from "./js/CustomFieldSelect.js";
import { Spoiler } from './js/Spoiler.js';
//import { ScrollToTop } from './js/ScrollToTop.js';
import { MXSwiper } from './js/MXSwiper.js';
import { CustomSelect } from './js/CustomSelect.js';
//import { Tabs } from './js/Tabs.js';

// FOR CONTACTS FORM 7
//import "./js/redirect-to-thanks-page.js";

new AutoCalc();
//new CustomFieldSelect({
//	input: '.form-wrapper .cf-select',
//	hasPlaceholder: false
//});
new Menu({
	btn: '.burger-btn-icon',
	menu: '.header-menu',
	activeClass: 'open-header-menu',
	closeBtns: ['.menu-close-btn']
})


//new BackdropList();

new Modal();

//jarallax(document.querySelectorAll('.jarallax'), {
//	speed: 0.2,
//});

cookies();
imask();

Fancybox.bind("[data-fancybox]");

//new RunningLine();
//new ScrollToTop();

new Spoiler();

new MXSwiper();
new CustomSelect({
	selector: 'select',
	forceSend: true,
});
/*
window.addEventListener('scroll', function () {
	const header = document.querySelector('.header');

	if (window.scrollY > 50) {
		header.classList.add('scrolled');
	} else {
		header.classList.remove('scrolled');
		const valueUnits = header.offsetHeight;
		document.querySelector(':root').style.setProperty(`--header-height`, valueUnits + 'px');
	}
});
*/

fileBtn('');

//new Tabs();
//document.querySelectorAll('video.wp-video-shortcode').forEach(video => {
//	if (!video.src) {
//		const link = video.querySelector('a');
//		if (link) video.src = link.href;
//	}
//});

document?.querySelectorAll('.form-checkbox')?.forEach(el => {
	el.checked = true;
})

// search-toggle

//!==========================
document.addEventListener('DOMContentLoaded', () => {

	const startScreen = document.querySelector('[data-quiz-start]');
	const quizForms = document.querySelectorAll('.quiz-form');

	// скрываем все формы
	quizForms.forEach(f => f.style.display = 'none');

	let activeQuiz = null;
	let currentStep = 1;
	let steps = [];

	// Выбор типа клиента
	document.querySelectorAll('[data-quiz-type]').forEach(btn => {
		btn.addEventListener('click', () => {
			const type = btn.dataset.quizType;

			startScreen.style.display = 'none';

			activeQuiz = document.querySelector(`[data-quiz="${type}"]`);
			activeQuiz.style.display = 'block';

			steps = activeQuiz.querySelectorAll('.quiz-step');
			steps.forEach((s, i) => s.classList.toggle('is-active', i === 0));
			currentStep = 1;

			updateProgress();
			scrollToTop();
		});
	});

	// Делегирование клика по радио
	document.addEventListener('click', e => {
		if (!activeQuiz) return;

		const input = e.target.closest('input[type="radio"]');
		if (!input) return;

		const step = input.closest('.quiz-step');

		// Выделяем выбранный вариант
		step.querySelectorAll('.wpcf7-list-item').forEach(item => item.classList.remove('is-selected'));
		input.closest('.wpcf7-list-item')?.classList.add('is-selected');

		nextStep();
	});

	// Кнопка назад
	document.querySelectorAll('.quiz-back-global').forEach(btn => {
		btn.addEventListener('click', () => {
			if (!activeQuiz) return;
			if (currentStep === 1) {
				activeQuiz.style.display = 'none';
				startScreen.style.display = 'block';
				//window.scrollTo({ top: 0, behavior: 'smooth' }); // прокрутка на старт
				return;
			}
			prevStep();
		});
	});

	function nextStep() {
		if (currentStep >= steps.length) return;
		steps[currentStep - 1].classList.remove('is-active');
		currentStep++;
		steps[currentStep - 1].classList.add('is-active');
		updateProgress();
		scrollToTop();
	}

	function prevStep() {
		if (currentStep <= 1) return;
		steps[currentStep - 1].classList.remove('is-active');
		currentStep--;
		steps[currentStep - 1].classList.add('is-active');
		updateProgress();
		scrollToTop();
	}

	function updateProgress() {
		if (!activeQuiz) return;
		const bar = activeQuiz.querySelector('.quiz-progress__bar');
		const currentEl = activeQuiz.querySelector('.quiz-current');
		const percentEl = activeQuiz.querySelector('.quiz-percent');
		const percent = Math.round((currentStep / steps.length) * 100);

		if (bar) bar.style.width = percent + '%';
		if (currentEl) currentEl.textContent = currentStep;
		if (percentEl) percentEl.textContent = percent;
	}

	// Функция прокрутки к верху формы
	function scrollToTop() {
		if (!activeQuiz) return;
		activeQuiz.scrollIntoView({ behavior: 'smooth', block: 'start' });
	}

});


