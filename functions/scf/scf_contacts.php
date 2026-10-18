<?php

create_options_page(
	'Контактные данные',
	'opt-contacts'
);

create_fields(
	'Контактные данные',
	'opt-contacts',
	[
		add_field_text(
			'contacts_title',
			'Заголовок',
		),
		add_field_tab(
			'contacts_tab_address',
			'Адрес',
		),
		add_field_redactor_wysiwyg(
			'contacts_address',
			'Адрес'
		),
		add_field_text(
			'contacts_address_text',
			'Описание',
		),
		add_field_tab(
			'contacts_tab_phones',
			'Телефон',
		),
		add_field_repeater(
			'contacts_phones',
			'Телефон',
			[
				add_field_text(
					'contacts_phones_phone',
					'Номер'
				),
				add_field_text(
					'contacts_phones_text',
					'Описание',

				)
			]
		),
		add_field_tab(
			'contacts_tab_emails',
			'Email',
		),
		add_field_repeater(
			'contacts_emails',
			'Email',
			[
				add_field_text(
					'contacts_emails_email',
					'Email'
				)
			]
		),
		add_field_tab(
			'contacts_tab_time',
			'Режим работы',
		),
		add_field_redactor_wysiwyg(
			'contacts_time',
			'Режим работы'
		),
		add_field_text(
			'contacts_time_text',
			'Описание',
		),
		add_field_tab(
			'contacts_tab_payment',
			'Реквизиты компании',
		),
		add_field_repeater(
			'contacts_payment',
			'Блоки - реквизиты компании',
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
		add_field_tab(
			'contacts_tab_map',
			'Карта',
		),
		add_field_redactor_wysiwyg(
			'contacts_map',
			'Описание'
		),
	]
);