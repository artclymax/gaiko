<?php
$page = 'options';

$title = get_field('services_title', $page) ?? '';
$descr = get_field('services_descr', $page) ?? '';
$link = get_field('services_link', $page) ?? '';
$benefits = get_field('services_benefits', $page) ?? '';

?>
<?php if ($benefits): ?>
	<section class="section section-padding-top services" id="services">
		<div class="container services__container">
			<?php get_template_part('partials/section-header', null, [
				'title' => $title,
				'descr' => $descr,
			]); ?>
			<ul class="services__list grid">
				<?php foreach ($benefits as $item): ?>
					<li class="services__item services-card">
						<div class="services-card__image">
							<?php echo wp_get_attachment_image(
								$item['image']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['image']['alt'] ?: $item['title']
								)
							); ?>
						</div>
						<h3 class="services-card__title title-3">
							<?php echo esc_html($item['title']) ?>
						</h3>
						<div class="services-card__descr descr">
							<?php echo wp_kses_post($item['descr']) ?>
						</div>
						<a class="services-card__link text-button link" href="<?php echo esc_attr($link['url']) ?>">
							<?php echo esc_html($link['title']) ?>
						</a>
						</li>
				<?php endforeach; ?>
			</ul>
		</div>
		</section>
<?php endif; ?>