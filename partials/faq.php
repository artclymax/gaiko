<?php
$page = 'options';

$title = get_field('faq_title', $page) ?? '';
$descr = get_field('faq_descr', $page) ?? '';
$list = get_field('faq_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section section-padding-bottom faq" id="faq">
		<div class="container faq__container">
			<?php get_template_part('partials/section-header', null, [
				'title' => $title,
				'descr' => $descr,
			]); ?>
			<ul class="faq__list">
				<?php foreach ($list as $index => $item): ?>
					<li class="faq__item faq-item <?php echo !$index ? ' spoiler-active' : '' ?>" data-spoiler>
						<button class="faq-item__btn" data-spoiler-title>
							<h3 class="faq-item__title text-l">
								<?php echo esc_html($item['title']) ?>
							</h3>
							<span class="faq-item__icon"></span>
						</button>
						<div class="faq-item__content" data-spoiler-content>
							<div class="faq-item__descr descr text-l">
								<?php echo wp_kses_post($item['descr']) ?>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>