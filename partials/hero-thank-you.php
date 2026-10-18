<?php
$page = 'options';

$title = get_field('thank_you_title', $page) ?? '';
$descr = get_field('thank_you_descr', $page) ?? '';
$btn = get_field('thank_you_btn', $page) ?? '';
$image = get_field('thank_you_image', $page) ?? '';

?>
<section class="hero-thank-you" id="hero-thank-you"
	style="--bg-image: url('<?php echo esc_attr($image['url']) ?>')">
	<div class="container hero-thank-you__container">
		<h1 class="hero-thank-you__title title-1">
			<?php echo esc_html($title) ?>
		</h1>
		<div class="hero-thank-you__descr descr title-3">
			<?php echo wp_kses_post($descr) ?>
		</div>
		<div class="hero-thank-you__form">
			<p>Проверьте правильность данных</p>
			<input class="hero-thank-you__input form-input" type="text" placeholder="Имя"
				value="<?php echo $_GET['user_name'] ?? ''; ?>" readonly="" />
			<input class="hero-thank-you__input form-input" type="text" placeholder="Телефон"
				value="+<?php echo $_GET['user_phone'] ?? ''; ?>" readonly="" />
			<a class="btn hero-thank-you__btn" href="<?php echo esc_url($btn['url']) ?>">
				<?php echo esc_html($btn['title']) ?>
			</a>
		</div>
	</div>
</section>