<?php
create_options_page(
	'Главная',
	'opt-home',
);

// hero
create_options_page(
	'Первый экран',
	'opt-hero',
	'opt-home',
);

create_fields(
	'Первый экран',
	'opt-hero',
	[
		add_field_tab(
			'hero_tab_content',
			'Контент'
		),
		add_field_text(
			'hero_label',
			'Ярлык'
		),
		add_field_text(
			'hero_title',
			'Заголовок'
		),
		add_field_text(
			'hero_subtitle',
			'Подзаголовок'
		),
		add_field_redactor_wysiwyg(
			'hero_descr',
			'Описание'
		),
		add_field_link(
			'hero_btn_1',
			'Кнопка первая'
		),
		add_field_link(
			'hero_btn_2',
			'Кнопка вторая'
		),
		add_field_tab(
			'hero_tab_benefits',
			'Преимущества'
		),
		add_field_repeater(
			'hero_benefits',
			'Преимущества',
			[
				add_field_image(
					'hero_benefits_image',
					'Картинка'
				),
				add_field_text(
					'hero_benefits_title',
					'Заголовок'
				),

			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_hero_benefits_title',
			]
		),
		add_field_tab(
			'hero_tab_image',
			'Картинка'
		),
		add_field_image(
			'hero_image',
			'Картинка'
		),
		add_field_group(
			'hero_image_textbox',
			'Описание в картинке',
			[
				add_field_text(
					'title',
					'Заголовок'
				),
				add_field_redactor_wysiwyg(
					'descr',
					'Описание'
				)
			]
		),
	]
);

//!========================
create_options_page(
	'Услуги',
	'opt-services',
	'opt-home',
);

create_fields(
	'Услуги',
	'opt-services',
	[
		add_field_text(
			'services_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'services_descr',
			'Описание'
		),
		add_field_link(
			'services_link',
			'Кнопка'
		),
		add_field_repeater(
			'services_benefits',
			'Список',
			[
				add_field_image(
					'image',
					'Картинка'
				),
				add_field_text(
					'title',
					'Заголовок'
				),
				add_field_redactor_wysiwyg(
					'descr',
					'Описание'
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_title',
			]
		),
	]
);


//!========================
create_options_page(
	'Почему выбирают нас',
	'opt-benefits',
	'opt-home',
);

create_fields(
	'Почему выбирают нас',
	'opt-benefits',
	[
		add_field_redactor_wysiwyg(
			'benefits_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'benefits_descr',
			'Описание'
		),
		add_field_group(
			'benefits_year',
			'Опыт',
			[
				add_field_text(
					'title',
					'Заголовок'
				),
				add_field_redactor_wysiwyg(
					'descr',
					'Описание'
				),
			]
		),
		add_field_repeater(
			'benefits_list',
			'Список',
			[
				add_field_image(
					'image',
					'Картинка'
				),
				add_field_text(
					'title',
					'Заголовок'
				),
				add_field_redactor_wysiwyg(
					'descr',
					'Описание'
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_title',
			]
		),
	]
);
//!========================
create_options_page(
	'Этапы работы',
	'opt-steps',
	'opt-home',
);

create_fields(
	'Этапы работы',
	'opt-steps',
	[
		add_field_text(
			'steps_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'steps_descr',
			'Описание'
		),
		add_field_repeater(
			'steps_list',
			'Список',
			[
				add_field_text(
					'title',
					'Заголовок'
				),
				add_field_redactor_wysiwyg(
					'descr',
					'Описание'
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_title',
			]
		),
	]
);

//!========================
create_options_page(
	'Рассчитать стоимость',
	'opt-quiz',
	'opt-home',
);

create_fields(
	'Рассчитать стоимость',
	'opt-quiz',
	[
		add_field_text(
			'quiz_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'quiz_descr',
			'Описание'
		),
		add_field_repeater(
			'quiz_list',
			'Список',
			[
				add_field_text(
					'title',
					'Текст'
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_title',
			]
		),
	]
);
//!========================
create_options_page(
	'Наши работы',
	'opt-projects',
	'opt-home',
);

create_fields(
	'Наши работы',
	'opt-projects',
	[
		add_field_text(
			'projects_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'projects_descr',
			'Описание'
		),
		add_field_repeater(
			'projects_list',
			'Список',
			[
				add_field_image(
					'image',
					'Картинка'
				),
			],
		),
	]
);
//!========================
create_options_page(
	'Часто задаваемые вопросы',
	'opt-faq',
	'opt-home',
);

create_fields(
	'Часто задаваемые вопросы',
	'opt-faq',
	[
		add_field_text(
			'faq_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'faq_descr',
			'Описание'
		),
		add_field_repeater(
			'faq_list',
			'Список',
			[
				add_field_text(
					'title',
					'Вопрос'
				),
				add_field_redactor_wysiwyg(
					'descr',
					'Ответ'
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_title',
			]
		),
	]
);

//!========================
create_options_page(
	'Оставить заявку',
	'opt-form',
	'opt-home',
);

create_fields(
	'Оставить заявку',
	'opt-form',
	[
		add_field_text(
			'form_subtitle',
			'Подзаголовок'
		),
		add_field_redactor_wysiwyg(
			'form_title',
			'Заголовок',
			'strong - жирный ==> чтобы обозначить акцентный текст'
		),
		add_field_redactor_wysiwyg(
			'form_descr',
			'Описание'
		)
	]
);
//!========================
create_options_page(
	'Модальное окно',
	'opt-modal',
);

create_fields(
	'Модальное окно',
	'opt-modal',
	[
		add_field_text(
			'modal_title',
			'Подзаголовок'
		),
		add_field_redactor_wysiwyg(
			'modal_descr',
			'Описание'
		)
	]
);