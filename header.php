<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wrapper">
		<?php
		$page = 'options';

		$address = get_field('contacts_address', $page) ?? '';
		$phones = get_field('contacts_phones', $page) ?? [];
		$emails = get_field('contacts_emails', $page) ?? [];

		$btn = get_field('header_btn', $page) ?? [];
		$header_phone = get_field('header_phone', $page) ?? '';
		?>
		<header class="header" data-auto-calc="header, height">
			<div class="header__container container">
				<div class="header__logo logo">
					<?php mx_logo(); ?>
				</div>
				<nav class="header__menu header-menu">
					<button class="header-menu__close-btn menu-close-btn visible-tablet" type="button" aria-label="Закрыть меню">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15 5L5 15" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round"
								stroke-linejoin="round" />
							<path d="M5 5L15 15" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
					</button>
					<?php
					$menu = wp_nav_menu(
						array(
							'theme_location' => 'header-menu',
							'container' => false,
							'menu_class' => 'header-menu__list',
							'depth' => 1
						)
					);
					echo htmlspecialchars($menu); ?>
					<div class="header-menu__contacts-box header-contacts-box visible-tablet">
						<h3 class="header-contacts-box__title title-3">
							Контакты
						</h3>
						<ul class="header-contacts-box__list">
							<li class="header-contacts-box__item">
								<address class="header-contacts-box__address descr">
									<?php echo wp_kses_post($address) ?>
								</address>
							</li>
							<li class="header-contacts-box__item">
								<?php if ($phones):
									foreach ($phones as $item): ?>
										<a class="header-contacts-box__link link"
											href="tel:+<?php echo esc_attr(correct_phone($item['contacts_phones_phone'])) ?>">
											<?php echo esc_html($item['contacts_phones_phone']) ?>
										</a>
									<?php endforeach;
								endif; ?>
							</li>
							<li class="header-contacts-box__item">
								<?php if ($emails):
									foreach ($emails as $item): ?>
										<a class="header-contacts-box__link link"
											href="mailto:<?php echo esc_attr($item['contacts_emails_email']) ?>">
											<?php echo esc_html($item['contacts_emails_email']) ?>
										</a>
									<?php endforeach;
								endif; ?>
							</li>
						</ul>
					</div>
					<a class="header-menu__btn btn visible-tablet" href="<?php echo esc_attr($btn['url']) ?>">
						<?php echo esc_html($btn['title']) ?>
					</a>
				</nav>
				<div class="header__btn-box hidden-tablet">
					<a class="header__btn btn" href="<?php echo esc_attr($btn['url']) ?>">
						<?php echo esc_html($btn['title']) ?>
					</a>
					<a class="header__phone title-3 link" href="tel:+<?php echo esc_attr(correct_phone($header_phone)) ?>">
						<?php echo esc_html($header_phone) ?>
					</a>
				</div>
				<a class="phone-btn header__phone-btn header-mobile-btn visible-tablet" href="tel:+<?php echo esc_attr(correct_phone($header_phone)) ?>">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M21.9999 16.9201V19.9201C22.0011 20.1986 21.944 20.4743 21.8324 20.7294C21.7209 20.9846 21.5572 21.2137 21.352 21.402C21.1468 21.5902 20.9045 21.7336 20.6407 21.8228C20.3769 21.912 20.0973 21.9452 19.8199 21.9201C16.7428 21.5857 13.7869 20.5342 11.1899 18.8501C8.77376 17.3148 6.72527 15.2663 5.18993 12.8501C3.49991 10.2413 2.44818 7.27109 2.11993 4.1801C2.09494 3.90356 2.12781 3.62486 2.21643 3.36172C2.30506 3.09859 2.4475 2.85679 2.6347 2.65172C2.82189 2.44665 3.04974 2.28281 3.30372 2.17062C3.55771 2.05843 3.83227 2.00036 4.10993 2.0001H7.10993C7.59524 1.99532 8.06572 2.16718 8.43369 2.48363C8.80166 2.80008 9.04201 3.23954 9.10993 3.7201C9.23656 4.68016 9.47138 5.62282 9.80993 6.5301C9.94448 6.88802 9.9736 7.27701 9.89384 7.65098C9.81408 8.02494 9.6288 8.36821 9.35993 8.6401L8.08993 9.9101C9.51349 12.4136 11.5864 14.4865 14.0899 15.9101L15.3599 14.6401C15.6318 14.3712 15.9751 14.1859 16.3491 14.1062C16.723 14.0264 17.112 14.0556 17.4699 14.1901C18.3772 14.5286 19.3199 14.7635 20.2799 14.8901C20.7657 14.9586 21.2093 15.2033 21.5265 15.5776C21.8436 15.9519 22.0121 16.4297 21.9999 16.9201Z"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</a>
				<button class="header__burger-btn burger-btn-icon header-mobile-btn visible-tablet" type="button">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M21 17C21.5523 17 22 17.4477 22 18C22 18.5523 21.5523 19 21 19H3C2.44772 19 2 18.5523 2 18C2 17.4477 2.44772 17 3 17H21ZM21 13C21.5523 13 22 13.4477 22 14C22 14.5523 21.5523 15 21 15H3C2.44772 15 2 14.5523 2 14C2 13.4477 2.44772 13 3 13H21ZM21 9C21.5523 9 22 9.44772 22 10C22 10.5523 21.5523 11 21 11H3C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H21ZM21 5C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H3C2.44772 7 2 6.55228 2 6C2 5.44772 2.44772 5 3 5H21Z"
							fill="currentColor" />
					</svg>
				</button>
			</div>
		</header>
		<main class="main">
			<?php if (!is_front_page() && !is_404() && !is_page('thank-you')): ?>
			<?php endif; ?>