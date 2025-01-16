<?php

return [
    'auth' => [
        'title' => 'Редактор сайта',
        'username' => 'Логин',
        'password' => 'Пароль',
        'login-button' => 'Вход',
        'invalid-credentials' => 'Неверный логин или пароль',
    ],
    'website-manager' => [
        'title' => 'Редактор сайта',
        'logout' => 'Выход',
        'pages' => 'Страницы',
        'menus' => 'Меню',
        'name' => 'Имя',
        'page-title' => 'Название в меню',
        'page-meta-title' => 'Название SEO',
        'page-meta-description' => 'Описание SEO',
        'route' => 'URL',
        'layout' => 'Макет',
        'actions' => 'Действия',
        'view' => 'Показать',
        'edit' => 'Редактировать',
        'remove' => 'Удалить',
        'add-new-page' => 'Создать новую страницу',
        'edit-page' => 'Редактировать страницу',
        'back' => 'Назад',
        'save-changes' => 'Сохранить',
        'theme' => 'Тема',
        'visible-in-page-overview' => 'Видимо в обозревателе страниц',
        'page-created' => 'Страница успешно создана',
        'page-updated' => 'Страница успешно обновлена',
        'page-deleted' => 'Страница удалена',

        'settings' => 'Настройки',
        'website-languages' => 'Языки сайта',
        'languages-selector-placeholder' => 'Выберите один или несколько языков',
        'save-settings' => 'Сохранить настройки',
        'settings-updated' => 'Настройки успешно обновлены',
        'pagebuilder-block-images' => 'Превью блоков редактора',
        'render-thumbs' => 'Создать превью'
    ],
    'pagebuilder' => [
        'filter-placeholder' => 'Фильтр',
        'loading-text' => 'Загрузка редактора..',
        'style-no-element-selected' => 'Выберите элемент для редактирования стилей.',
        'trait-no-element-selected' => 'Выберите элемент для редактирования аттрибутов',
        'trait-settings' => 'Настройки',
        'default-category' => 'Основная',
        'view-blocks' => 'Блоки',
        'view-settings' => 'Настройки',
        'view-style-manager' => 'Управление стилями',
        'save-page' => 'Сохранить',
        'view-page' => 'Показать',
        'go-back' => 'Назад',
        'page' => 'Страница',
        'page-content' => 'Контент страницы',
        'toastr-changes-saved' => 'Изменения сохранены',
        'toastr-saving-failed' => 'Ошибка при сохранении изменений',
        'toastr-component-update-failed' => 'Ошибка при перезагрузке компонента',
        'toastr-switching-language-failed' => 'Ошибка при изменении языка',
        'yes' => 'Да',
        'no' => 'Нет',
        'trait-manager' => [
            'link' => [
                'text' => 'Текст',
                'target' => 'Открыть в новой вкладке?',
                'tooltip' => 'Подсказка'
            ],
            'image' => [
                'title' => 'Подсказка при наведении мыши',
                'alt' => 'Текст для программ чтения экрана',
            ],
            'no-settings' => 'Этот блок не имеет настроек'
        ],
        'selector-manager' => [
            'label' => 'CSS классы',
            'states-label' => 'Макет для',
            'selected-label' => 'Элемент выделен',
            'state-hover' => 'Элемент наведен',
            'state-active' => 'Элемент нажат',
            'state-nth' => 'Чётный/нечётный элемент',
        ],
        'style-manager' => [
            'sectors' => [
                'position' => 'Позиция',
                'background' => 'Фон',
                'advanced' => 'Дополнительно',
            ],
            'properties' => [
                'position' => [
                    'width' => 'Ширина',
                    'min-width' => 'Минимальная ширина',
                    'max-width' => 'Максимальная ширина',
                    'height' => 'Высота',
                    'min-height' => 'Минимальная высота',
                    'max-height' => 'Максимальная высота',
                    'padding' => [
                        'name' => 'Отступы',
                        'properties' => [
                            'padding-top' => 'Верхний отступ',
                            'padding-right' => 'Правый отступ',
                            'padding-bottom' => 'Нижний отступ',
                            'padding-left' => 'Левый отступ'
                        ]
                    ],
                    'margin' => [
                        'name' => 'Допуск',
                        'properties' => [
                            'margin-top' => 'Верхний допуск',
                            'margin-right' => 'Правый допуск',
                            'margin-bottom' => 'Нижний допуск',
                            'margin-left' => 'Левый допуск'
                        ]
                    ],
                    'text-align' => [
                        'name' => 'Выравнивание текста'
                    ]
                ],
                'background' => [
                    'background-color' => 'Цвет фона',
                    'background' => 'Фон',
                ]
            ]
        ],
        'asset-manager' => [
            'modal-title' => 'Выбор изображения',
            'drop-files' => 'Перенесите сюда файлы, или нажмите для загрузки',
            'add-image' => 'Добавить изображение',
        ],
    ],
    'languages' => [
        'en' => 'English',
        'nl' => 'Dutch',
        'es' => 'Spanish',
        'it' => 'Italian',
        'fr' => 'French',
        'de' => 'German',
        'ru' => 'Russian'
    ],
];
