<?php
$page = 'options';

$links = get_field('footer_links', $page) ?? '';
$company = get_field('footer_company', $page) ?? '';
$copy = get_field('footer_copy', $page) ?? '';
$address = get_field('contacts_address', $page) ?? '';
$phones = get_field('contacts_phones', $page) ?? '';
$emails = get_field('contacts_emails', $page) ?? '';
?>
</main>
<footer class="footer">
	<div class="footer__container container">
		<div class="footer__logo logo">
			<?php mx_logo(); ?>
		</div>
		<nav class="footer__nav footer-menu">
			<h3 class="footer__title">
				Навигация
			</h3>
			<?php
			$menu = wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'container' => false,
					'menu_class' => 'footer-menu__list',
					'depth' => 1
				)
			);
			echo htmlspecialchars($menu); ?>
		</nav>
		<div class="footer__contacts">
			<h3 class="footer__title ">
				Контакты
			</h3>
			<ul class="footer__contacts-list">
				<?php if ($address): ?>
					<li class="footer__contacts-item footer-contacts-item">
						<address class="footer-contacts-item__address descr">
							<?php echo wp_kses_post($address) ?>
						</address>
					</li>
				<?php endif; ?>
				<?php if ($phones): ?>
					<li class="footer__contacts-item footer-contacts-item">
						<ul class="footer-contacts-item__list">
							<?php foreach ($phones as $item): ?>
								<li class="footer-contacts-item__phone">
									<a class="footer-contacts-item__link link"
										href="tel:+<?php echo esc_attr(correct_phone($item['contacts_phones_phone'])) ?>">
										<?php echo esc_html($item['contacts_phones_phone']) ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
				<?php endif; ?>
				<?php if ($emails): ?>
					<li class="footer__contacts-item footer-contacts-item">
						<ul class="footer-contacts-item__list">
							<?php foreach ($emails as $item): ?>
								<li class="footer-contacts-item__email">
									<a class="footer-contacts-item__link link"
										href="mailto:<?php echo esc_attr($item['contacts_emails_email']) ?>">
										<?php echo esc_html($item['contacts_emails_email']) ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="footer__info">
			<div class="footer__links">
				<?php foreach ($links as $item): ?>
					<a class="footer__link link" href="<?php echo esc_attr($item['link']['url']) ?>">
						<?php echo esc_html($item['link']['title']) ?>
					</a>
				<?php endforeach; ?>
			</div>
			<small class="footer__copy">
				&copy; <?php echo esc_html($company) . ', ' . date('Y') . '. ' . esc_html($copy) ?>
			</small>
		</div>
	</div>
</footer>
<?php get_template_part('partials/modal-call') ?>
<?php get_template_part('partials/cookie-banner') ?>

<?php wp_footer(); ?>
</body>

</html>