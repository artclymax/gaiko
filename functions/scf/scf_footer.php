<?php

create_options_page(
	'Подвал / Футер',
	'opt-footer'
);

create_fields(
	'Подвал / Футер',
	'opt-footer',
	[
		add_field_hint(
			'footer_hint',
			'<b>Логотип</b> - перейдите на Настройки сайта > Основные настройки > Логотип сайта.<br/><b>Меню</b> - перейдите на Настройки сайта > Меню > Меню подвала.<br/><b>Контактные данные</b> - перейдите на Настройки сайта > Секции > Основные секции > Контактные данные',
			'Логотип, меню и контактные данные'
		),
		add_field_repeater(
			'footer_links',
			'Ссылки',
			[
				add_field_link(
					'link',
					'Ссылка',
				)
			]
		),
		add_field_text(
			'footer_company',
			'Название компании',
		),
		add_field_text(
			'footer_copy',
			'Копирайт',
		),
	]
);