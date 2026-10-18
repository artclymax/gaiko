<?php
$page = 'options';

$title = get_field('steps_title', $page) ?? '';
$descr = get_field('steps_descr', $page) ?? '';
$list = get_field('steps_list', $page) ?? '';

?>

<?php if ($list): ?>
	<section class="section steps" id="steps">
		<div class="container steps__container">
			<?php get_template_part('partials/section-header', null, [
				'title' => $title,
				'descr' => $descr,
			]); ?>
			<div class="swiper steps-swiper" data-swiper="{'slidesPerView': 'auto', 'spaceBetween': 20 }">
				<div class="swiper-wrapper steps-swiper__wrapper">
					<?php foreach ($list as $index => $item): ?>
						<div class="swiper-slide steps-slide">
							<div class="steps-slide__wrapper">
								<div class="steps-slide__counter">
									<?php echo ++$index < 10 ? '0' . $index : $index ?>
								</div>
								<h3 class="steps-slide__title title-3">
									<?php echo esc_html($item['title']) ?>
								</h3>
								<div class="steps-slide__descr descr">
									<?php echo wp_kses_post($item['descr']) ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>