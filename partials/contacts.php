<?php
$page = 'options';

$title = get_field('contacts_title', $page) ?? '';

$address = get_field('contacts_address', $page) ?? '';
$address_text = get_field('contacts_address_text', $page) ?? '';
$phones = get_field('contacts_phones', $page) ?? '';
$emails = get_field('contacts_emails', $page) ?? '';
$time = get_field('contacts_time', $page) ?? '';
$time_text = get_field('contacts_time_text', $page) ?? '';
$payment = get_field('contacts_payment', $page) ?? '';
$map = get_field('contacts_map', $page) ?? '';

?>
<section class="section-full contacts" id="contacts">
	<div class="container contacts__container">
		<div class="contacts__content">
			<h2 class="contacts__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="contacts__list">
				<?php if ($address): ?>
					<li class="contacts__item icon icon--address">
						<div class="contacts-item">
							<h3 class="contacts-item__title text-overline">
								Адрес
							</h3>
							<address class="contacts-item__descr descr">
								<?php echo wp_kses_post($address) ?>
							</address>
							<p class="contacts-item__text">
								<?php echo esc_html($address_text) ?>
							</p>
						</div>
					</li>
				<?php endif; ?>
				<?php if ($phones): ?>
					<li class="contacts__item icon icon--phone">
						<div class="contacts-item">
							<h3 class="contacts-item__title text-overline">
								Телефон
							</h3>
							<ul class="contacts-item__list">
								<?php foreach ($phones as $item): ?>
									<li class="contacts-item__phone">
										<a class="contacts-item__link link"
											href="tel:+<?php echo esc_attr(correct_phone($item['contacts_phones_phone'])) ?>">
											<?php echo esc_html($item['contacts_phones_phone']) ?>
										</a>
										<small class="contacts-item__small">
											<?php echo esc_html($item['contacts_phones_text']) ?>
										</small>
									</li>
								<?php endforeach; ?>
							</ul>

						</div>
					</li>
				<?php endif; ?>
				<?php if ($emails): ?>
					<li class="contacts__item icon icon--email">
						<div class="contacts-item">
							<h3 class="contacts-item__title text-overline">
								Email
							</h3>
							<ul class="contacts-item__list">
								<?php foreach ($emails as $item): ?>
									<li class="contacts-item__email">
										<a class="contacts-item__link link"
											href="mailto:<?php echo esc_attr($item['contacts_emails_email']) ?>">
											<?php echo esc_html($item['contacts_emails_email']) ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</li>
				<?php endif; ?>
				<?php if ($time): ?>
					<li class="contacts__item icon icon--time">
						<div class="contacts-item">
							<h3 class="contacts-item__title text-overline">
								Режим работы
							</h3>
							<div class="contacts-item__descr descr">
								<?php echo wp_kses_post($time) ?>
							</div>
							<p class="contacts-item__text">
								<?php echo esc_html($time_text) ?>
							</p>
						</div>
					</li>
				<?php endif; ?>
			</ul>
			<?php if ($payment): ?>
				<div class="contacts__payments payment-spoiler" data-spoiler>
					<button class="payment-spoiler__btn" data-spoiler-title>
						<h3 class="payment-spoiler__title">
							Реквизиты компании
						</h3>
						<span class="payment-spoiler__icon">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
						</span>
					</button>
					<div class="payment-spoiler__content" data-spoiler-content>
						<ul class="payment-spoiler__list">
							<?php foreach ($payment as $item): ?>
								<li class="payment-spoiler__item">
									<h3 class="payment-spoiler__item-title text-overline">
										<?php echo esc_html($item['title']) ?>
									</h3>
									<div class="payment-spoiler__descr descr">
										<?php echo wp_kses_post($item['descr']) ?>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<?php if ($map): ?>
			<div class="contacts__map">
				<?php echo wp_kses($map, [
					'iframe' => [
						'src' => true,
						'width' => true,
						'height' => true,
						'style' => true,
						'allowfullscreen' => true,
						'loading' => true,
					],
				]) ?>
			</div>
		<?php endif; ?>
	</div>
</section>