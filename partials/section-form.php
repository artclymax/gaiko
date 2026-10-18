<?php
$page = 'options';

$title = get_field('form_title', $page) ?? '';
$descr = get_field('form_descr', $page) ?? '';
$subtitle = get_field('form_subtitle', $page) ?? '';

?>
<section class="section-full section-form" id="section-form">
	<div class="container section-form__container">
		<div class="section-form__content">
			<p class="section-form__subtitle text-overline">
				<?php echo esc_html($subtitle) ?>
			</p>
			<h2 class="section-form__title title-1 descr">
				<?php echo wp_kses_post($title) ?>
			</h2>
			<div class="section-form__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
		</div>
		<div class="section-form__form">
			<?php echo do_shortcode('[contact-form-7 id="6f94060" title="Оставить заявку"]') ?>
		</div>
	</div>
</section>