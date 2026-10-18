<?php
$page = 'options';

$title = get_field('benefits_title', $page) ?? '';
$descr = get_field('benefits_descr', $page) ?? '';
$list = get_field('benefits_list', $page) ?? '';
$year = get_field('benefits_year', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section benefits" id="benefits">
		<div class="container benefits__container">
			<?php get_template_part('partials/section-header', null, [
				'title' => $title,
				'descr' => $descr,
			]); ?>
			<ul class="benefits__list grid">
				<?php foreach ($list as $item): ?>
					<li class="benefits__item benefits-card">
						<div class="benefits-card__image">
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
						<div class="benefits-card__content">
							<h3 class="benefits-card__title text-l">
								<?php echo esc_html($item['title']) ?>
							</h3>
							<div class="benefits-card__descr descr">
								<?php echo wp_kses_post($item['descr']) ?>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
			<?php if ($year): ?>
				<div class="benefits__year">
					<h3 class="title-2 benefits__year-title">
						<?php echo esc_html($year['title']) ?>
					</h3>
					<div class="benefits__year-descr descr">
						<?php echo wp_kses_post($year['descr']) ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>