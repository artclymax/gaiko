<?php
$page = 'options';

$title = get_field('quiz_title', $page) ?? '';
$descr = get_field('quiz_descr', $page) ?? '';
$list = get_field('quiz_list', $page) ?? '';

?>
<section class="section quiz" id="quiz">
	<div class="container quiz__container">
		<?php get_template_part('partials/section-header', null, [
			'title' => $title,
			'descr' => $descr,
		]); ?>
		<!-- Старт -->
		<div class="quiz-start is-active" data-quiz-start>
			<h2 class="quiz-start__title title-2">Кто вы?</h2>
			<div class="quiz-start__btn-box">
				<button class="quiz-start__btn quiz-start-btn" type="button" data-quiz-type="business">
					<div class="quiz-start-btn__icon">
						<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12.666 0C13.3733 0 14.0517 0.281153 14.5518 0.78125C15.0519 1.28135 15.333 1.95975 15.333 2.66699V5.83301H16C16.7071 5.83309 17.3857 6.11424 17.8857 6.61426C18.3856 7.11432 18.666 7.79291 18.666 8.5V16C18.6659 16.7071 18.3858 17.3857 17.8857 17.8857C17.3857 18.3858 16.7071 18.6659 16 18.666H14.3535C14.3467 18.6662 14.3399 18.667 14.333 18.667H4.33301C4.32615 18.667 4.31932 18.6662 4.3125 18.666H2.66699C1.95999 18.666 1.2813 18.3855 0.78125 17.8857C0.28123 17.3857 8.6122e-05 16.7071 0 16V11C0 10.2928 0.281153 9.61435 0.78125 9.11426C1.28133 8.61428 1.95983 8.33301 2.66699 8.33301H3.33301V2.66699C3.33301 1.95975 3.61416 1.28135 4.11426 0.78125C4.61435 0.281153 5.29276 0 6 0H12.666ZM6 2C5.82319 2 5.65334 2.07029 5.52832 2.19531C5.4033 2.32034 5.33301 2.49018 5.33301 2.66699V16.667H13.333V2.66699C13.333 2.49018 13.2627 2.32034 13.1377 2.19531C13.0127 2.07029 12.8428 2 12.666 2H6ZM2.66699 10.333C2.49027 10.333 2.32032 10.4034 2.19531 10.5283C2.07029 10.6533 2 10.8232 2 11V16C2.00009 16.1766 2.07047 16.3458 2.19531 16.4707C2.32032 16.5956 2.49027 16.666 2.66699 16.666H3.33301V10.333H2.66699ZM15.333 16.666H16C16.1767 16.6659 16.3458 16.5957 16.4707 16.4707C16.5957 16.3458 16.6659 16.1767 16.666 16V8.5C16.666 8.32319 16.5957 8.15335 16.4707 8.02832C16.3458 7.90347 16.1766 7.83309 16 7.83301H15.333V16.666ZM10.999 13.333C11.5513 13.333 11.999 13.7807 11.999 14.333C11.999 14.8853 11.5513 15.333 10.999 15.333H7.66602C7.1139 15.3328 6.66602 14.8852 6.66602 14.333C6.66602 13.7808 7.1139 13.3332 7.66602 13.333H10.999ZM10.999 10C11.5513 10 11.999 10.4477 11.999 11C11.999 11.5523 11.5513 12 10.999 12H7.66602C7.1139 11.9998 6.66602 11.5522 6.66602 11C6.66602 10.4478 7.1139 10.0002 7.66602 10H10.999ZM10.999 6.66602C11.5513 6.66602 11.999 7.11373 11.999 7.66602C11.999 8.2183 11.5513 8.66602 10.999 8.66602H7.66602C7.1139 8.66582 6.66602 8.21818 6.66602 7.66602C6.66602 7.11385 7.1139 6.66621 7.66602 6.66602H10.999ZM10.999 3.33301C11.5513 3.33301 11.999 3.78072 11.999 4.33301C11.999 4.88529 11.5513 5.33301 10.999 5.33301H7.66602C7.1139 5.33281 6.66602 4.88517 6.66602 4.33301C6.66602 3.78085 7.1139 3.33321 7.66602 3.33301H10.999Z"
								fill="currentColor" />
						</svg>
					</div>
					<h3 class="quiz-start-btn__title">
						Бизнес
					</h3>
					<p class="quiz-start-btn__text">
						ООО / ИП / Организация. Оплата по счету, договор, НДС.
					</p>
				</button>

				<button class="quiz-start__btn quiz-start-btn" type="button" data-quiz-type="private">
					<div class="quiz-start-btn__icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12.5 11.5C13.6491 11.5001 14.7519 11.957 15.5645 12.7695C16.3768 13.5821 16.8339 14.684 16.834 15.833V17.5C16.834 18.0521 16.386 18.4996 15.834 18.5C15.2817 18.5 14.834 18.0523 14.834 17.5V15.833C14.8339 15.2145 14.5877 14.6211 14.1504 14.1836C13.7129 13.7461 13.1187 13.5001 12.5 13.5H7.5C6.88137 13.5001 6.28808 13.7462 5.85059 14.1836C5.41308 14.6211 5.16708 15.2143 5.16699 15.833V17.5C5.16699 18.0522 4.71911 18.4998 4.16699 18.5C3.61471 18.5 3.16699 18.0523 3.16699 17.5V15.833C3.16708 14.6839 3.62394 13.5821 4.43652 12.7695C5.24909 11.9571 6.35093 11.5001 7.5 11.5H12.5ZM10 1.5C12.393 1.5002 14.3338 3.44005 14.334 5.83301C14.334 8.22612 12.3931 10.1668 10 10.167C7.60692 10.1668 5.66699 8.22613 5.66699 5.83301C5.66717 3.44003 7.60702 1.50018 10 1.5ZM10 3.5C8.71159 3.50018 7.66717 4.5446 7.66699 5.83301C7.66699 7.12156 8.71148 8.16682 10 8.16699C11.2885 8.16679 12.334 7.12155 12.334 5.83301C12.3338 4.54461 11.2884 3.5002 10 3.5Z"
								fill="currentColor" />
						</svg>
					</div>
					<h3 class="quiz-start-btn__title">
						Частный клиент
					</h3>
					<p class="quiz-start-btn__text">
						Для дома и квартиры. Ремонт, обновление интерьера.
					</p>
				</button>
			</div>
		</div>

		<!-- PRIVATE -->
		<div class="quiz-form hidden" data-quiz="private">
			<div class="quiz-progress">
				<div class="quiz-progress__text">
					Шаг <span class="quiz-current">1</span> из 5
				</div>
				<div class="quiz-progress_percent">
					<span class="quiz-percent">20</span>%
				</div>
				<div class="quiz-progress__bar-wrapper">
					<div class="quiz-progress__bar"></div>
				</div>
			</div>

			<?php echo do_shortcode('[contact-form-7 id="2bdbd6f" title="Квиз - Частный клиент"]'); ?>
			<div class="quiz-form__bottom">
				<button type="button" class="quiz-back-global">Назад</button>
				<?php if ($list): ?>
					<ul class="quiz-form__list">
						<?php foreach ($list as $item): ?>
							<li class="icon">
								<?php echo esc_html($item['title']) ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>

		<!-- BUSINESS -->
		<div class="quiz-form hidden" data-quiz="business">
			<div class="quiz-progress">
				<div class="quiz-progress__text">
					Шаг <span class="quiz-current">1</span> из 5
				</div>
				<div class="quiz-progress_percent">
					<span class="quiz-percent">20</span>%
				</div>
				<div class="quiz-progress__bar-wrapper">
					<div class="quiz-progress__bar"></div>
				</div>
			</div>

			<?php echo do_shortcode('[contact-form-7 id="15f680f" title="Квиз - Бизнес"]'); ?>

			<div class="quiz-form__bottom">
				<button type="button" class="quiz-back-global">Назад</button>
				<?php if ($list): ?>
					<ul class="quiz-form__list">
						<?php foreach ($list as $item): ?>
							<li class="icon">
								<?php echo esc_html($item['title']) ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>