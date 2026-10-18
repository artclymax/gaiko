<?php
$page = 'options';

$title = get_field('projects_title', $page) ?? '';
$descr = get_field('projects_descr', $page) ?? '';
$list = get_field('projects_list', $page) ?? '';
$list = get_field('projects_list', $page) ?? [];

$count = count($list);
$half = ceil($count / 2); // если нечётное — первая часть будет больше

$firstPart = array_slice($list, 0, $half);
$secondPart = array_slice($list, $half);

$modified = array_merge($secondPart, $firstPart);

$result = array_merge($list, $modified);
?>
<?php if ($list): ?>
	<section class="section projects" id="projects">
		<div class="container projects__container">
			<?php get_template_part('partials/section-header', null, [
				'title' => $title,
				'descr' => $descr,
			]); ?>
			<div class="swiper projects-swiper"
				data-swiper="{'slidesPerView': 1, 'spaceBetween': 20, 'rewind': true, 'grid': null, 'breakpoints': { '768': {'slidesPerView': 3, 'grid': { 'rows': 2, 'fill': 'row' }}}}">
				<div class="swiper-wrapper projects-swiper__wrapper">
					<?php foreach ($result as $item): ?>
						<div class="swiper-slide projects-slide">
							<a class="projects-slide__wrapper image-box" href="<?php echo esc_attr($item['image']['url']) ?>"
								data-fancybox>
								<?php echo wp_get_attachment_image(
									$item['image']['ID'],
									'large',
									false,
									array(
										'class' => 'img',
										'alt' => $item['image']['alt'] ?: $item['title']
									)
								); ?>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="projects-swiper__btn-box">
					<button class="swiper-btn swiper-btn__prev projects-swiper__btn projects-swiper__btn-prev" type="button"
						aria-label="Назад" data-swiper-btn-prev=".projects-swiper">
						<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M13.8242 0.170105C13.5974 -0.0566838 13.2307 -0.0566838 13.0039 0.170105L0.169922 13.0031C0.0978413 13.0753 0.0516126 13.1625 0.0253906 13.2541C0.0108618 13.3049 1.58443e-05 13.3578 0 13.4133C0 13.4654 0.00957046 13.5155 0.0224609 13.5637C0.0479334 13.6589 0.0952399 13.7497 0.169922 13.8244L13.0039 26.6574C13.2306 26.8839 13.5975 26.8839 13.8242 26.6574C14.051 26.4306 14.0509 26.0629 13.8242 25.8361L1.9834 13.9943H26.2471C26.5678 13.9943 26.8281 13.734 26.8281 13.4133C26.828 13.0926 26.5677 12.8322 26.2471 12.8322H1.9834L13.8242 0.990417C14.051 0.763651 14.0509 0.396899 13.8242 0.170105Z"
								fill="currentColor" />
						</svg>
					</button>
					<button class="swiper-btn swiper-btn__next projects-swiper__btn projects-swiper__btn-next" type="button"
						aria-label="Вперёд" data-swiper-btn-next=".projects-swiper">
						<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M13.0039 0.170105C13.2307 -0.0566838 13.5974 -0.0566838 13.8242 0.170105L26.6582 13.0031C26.7303 13.0753 26.7765 13.1625 26.8027 13.2541C26.8173 13.3049 26.8281 13.3578 26.8281 13.4133C26.8281 13.4654 26.8186 13.5155 26.8057 13.5637C26.7802 13.6589 26.7329 13.7497 26.6582 13.8244L13.8242 26.6574C13.5975 26.8839 13.2306 26.8839 13.0039 26.6574C12.7771 26.4306 12.7772 26.0629 13.0039 25.8361L24.8447 13.9943H0.581055C0.260327 13.9943 0 13.734 0 13.4133C9.18752e-05 13.0926 0.260383 12.8322 0.581055 12.8322H24.8447L13.0039 0.990417C12.7771 0.763651 12.7772 0.396899 13.0039 0.170105Z"
								fill="currentColor" />
						</svg>
					</button>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>