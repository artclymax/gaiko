<?php
$page = 'options';

$title = get_field('services_title', $page) ?? '';
$descr = get_field('services_descr', $page) ?? '';
$btn = get_field('services_btn', $page) ?? '';
$list = get_field('services_list', $page) ?? '';
$label = get_field('hero_label', $page) ?? '';
$title = get_field('hero_title', $page) ?? '';
$subtitle = get_field('hero_subtitle', $page) ?? '';
$descr = get_field('hero_descr', $page) ?? '';
$btn_1 = get_field('hero_btn_1', $page) ?? '';
$btn_2 = get_field('hero_btn_2', $page) ?? '';
$benefits = get_field('hero_benefits', $page) ?? '';
$image = get_field('hero_image', $page) ?? '';
$image_textbox = get_field('hero_image_textbox', $page) ?? '';

?>
<section class="hero" id="hero">
	<div class="hero__image image-box">
		<?php echo wp_get_attachment_image(
			$image['ID'],
			'large',
			false,
			array(
				'class' => 'img',
				'alt' => $image['alt'] ?: $title
			)
		); ?>
		<div class="hero__image-box hero-image-box icon">
			<div class="hero-image-box__content">
				<h3 class="hero-image-box__title text-m">
					<?php echo esc_html($image_textbox['title']) ?>
				</h3>
				<div class="hero-image-box__descr descr text-caption">
					<?php echo wp_kses_post($image_textbox['descr']) ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container hero__container">
		<p class="hero__label text-overline hidden-mobile">
			<?php echo esc_html($label) ?>
		</p>
		<h1 class="hero__title title-1">
			<?php echo esc_html($title) ?>
		</h1>
		<div class="hero__content">
			<p class="hero__subtitle title-1">
				<?php echo esc_html($subtitle) ?>
			</p>
			<div class="hero__descr descr text-l">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<p class="hero__label text-overline visible-mobile">
				<?php echo esc_html($label) ?>
			</p>
			<div class="hero__btn-box">
				<a class="hero__btn hero__btn-first btn" href="<?php echo esc_attr($btn_1['url']) ?>">
					<span><?php echo esc_html($btn_1['title']) ?></span>
				</a>
				<a class="hero__btn hero__btn-second btn btn--stroke" href="<?php echo esc_attr($btn_2['url']) ?>">
					<span><?php echo esc_html($btn_2['title']) ?></span>
				</a>
			</div>
			<?php if ($benefits): ?>
				<div class="swiper hero-benefits-swiper" data-swiper="{'slidesPerView': 'auto', 'spaceBetween': 10, 'breakpoints': {'1024': {'spaceBetween': 24 } } }">
					<div class="swiper-wrapper hero-benefits-swiper__wrapper">
						<?php foreach ($benefits as $item): ?>
							<div class="swiper-slide hero-benefits-slide">
								<div class="hero-benefits-slide__wrapper">
									<div class="hero-benefits-slide__image">
										<?php echo wp_get_attachment_image(
											$item['hero_benefits_image']['ID'],
											'large',
											false,
											array(
												'class' => 'img',
												'alt' => $item['hero_benefits_image']['alt'] ?: $item['hero_benefits_title']
											)
										); ?>
									</div>
									<h3 class="hero-benefits-slide__title text-overline">
										<?php echo esc_html($item['hero_benefits_title']) ?>
									</h3>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>