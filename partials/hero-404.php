<?php
$page = 'options';

$title = get_field('page_404_title', $page) ?? '';
$descr = get_field('page_404_descr', $page) ?? '';
$btn = get_field('page_404_btn', $page) ?? '';
$image = get_field('page_404_image', $page) ?? '';
?>

<section class="hero-404" id="hero-404" style="--bg-image:url('<?php echo esc_attr($image['url']) ?>');">
	<div class="container hero-404__container">
		<h2 class="hero-404__title title-1">
			<?php echo esc_html($title) ?>
		</h2>
		<div class="hero-404__descr descr title-3">
			<?php echo wp_kses_post($descr) ?>
		</div>
		<a class="btn hero-404__btn" href="	<?php echo esc_attr($btn['url']) ?>">
			<?php echo esc_html($btn['title']) ?>
		</a>
	</div>
</section>