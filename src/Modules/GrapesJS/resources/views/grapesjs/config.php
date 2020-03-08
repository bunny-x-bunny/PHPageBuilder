<?php

return [
    'container' => '#gjs',
    'noticeOnUnload' => false,
    'avoidInlineStyle' => true,
    'storageManager' => [
        'type' => 'remote',
        'autoload' => false,
        'autosave' => false
    ],
    'assetManager' => [
        'modalTitle' => phpb_trans('pagebuilder.asset-manager.modal-title'),
        'uploadText' => phpb_trans('pagebuilder.asset-manager.drop-files'),
        'inputPlaceholder' => phpb_trans('pagebuilder.asset-manager.url-placeholder'),
        'addBtnText' => phpb_trans('pagebuilder.asset-manager.add-image'),
        'upload' => phpb_url('pagebuilder', ['action' => 'upload', 'page' => $page->getId()]),
        'uploadName' => 'files',
        'multiUpload' => false,
        'assets' => $assets
    ],
    'styleManager' => [
        'textNoElement' => phpb_trans('pagebuilder.style-no-element-selected'),
        'sectors' => [[
            'id' => 'position',
            'name' => phpb_trans('pagebuilder.style-manager.sectors.position'),
            'open' => true,
            'buildProps' => ['width', 'height', 'min-width', 'min-height', 'max-width', 'max-height', 'padding', 'margin']
        ], [
            'id' => 'background',
            'name' => phpb_trans('pagebuilder.style-manager.sectors.background'),
            'open' => false,
            'buildProps' => ['background-color', 'background']
        ]]
    ],
    'selectorManager' => [
        'label' => phpb_trans('pagebuilder.selector-manager.label'),
        'statesLabel' => phpb_trans('pagebuilder.selector-manager.states-label'),
        'selectedLabel' => phpb_trans('pagebuilder.selector-manager.selected-label'),
        'states' => [
            ['name' => 'hover', 'label' => phpb_trans('pagebuilder.selector-manager.state-hover')],
            ['name' => 'active', 'label' => phpb_trans('pagebuilder.selector-manager.state-active')],
            ['name' => 'nth-of-type(2n)', 'label' => phpb_trans('pagebuilder.selector-manager.state-nth')]
        ],
    ],
    'traitManager' => [
        'labelContainer' => phpb_trans('pagebuilder.trait-settings'),
        'textNoElement' => phpb_trans('pagebuilder.trait-no-element-selected'),
        'labelPlhText' => '',
        'labelPlhHref' => 'https://website.com'
    ],
    'panels' => [
        'defaults' => [
            [
                'id' => 'views',
                'buttons' => [
                    [
                        'id' => 'open-blocks',
                        'className' => 'fa fa-th-large',
                        'command' => 'open-blocks',
                        'togglable' => 0,
                        'attributes' => ['title' => phpb_trans('pagebuilder.view-blocks')],
                        'active' => true,
                    ],
                    [
                        'id' => 'open-settings',
                        'className' => 'fa fa-cog',
                        'command' => 'open-tm',
                        'togglable' => 0,
                        'attributes' => ['title' => phpb_trans('pagebuilder.view-settings')],
                    ],
                    [
                        'id' => 'open-style',
                        'className' => 'fa fa-paint-brush',
                        'command' => 'open-sm',
                        'togglable' => 0,
                        'attributes' => ['title' => phpb_trans('pagebuilder.view-style-manager')],
                    ]
                ]
            ],
        ]
    ],
    'canvas' => [
        'styles' => [
            phpb_asset('pagebuilder/page-injection.css'),
        ],
        'scripts' => [
            'https://code.jquery.com/jquery-3.4.1.min.js',
            phpb_asset('pagebuilder/page-injection.js'),
        ]
    ],
    'plugins' => ['grapesjs-touch', 'gjs-plugin-ckeditor'],
    'pluginsOpts' => [
        'gjs-plugin-ckeditor' => [
            'position' => 'left',
            'options' => [
                'startupFocus' => true,
                'extraAllowedContent' => '*(*);*[*]', // Allows any class and any inline style
                'allowedContent' => true, // Disable auto-formatting, class removing, etc.
                'enterMode' => 'CKEDITOR.ENTER_BR',
                'extraPlugins' => 'sharedspace, justify, colorbutton, panelbutton, font',
                'toolbar' => [
                    ['name' => 'styles', 'items' => ['Font', 'FontSize']],
                    ['Bold', 'Italic', 'Underline', 'Strike'],
                    ['name' => 'links', 'items' => ['Link', 'Unlink']],
                    ['name' => 'colors', 'items' => ['TextColor', 'BGColor']],
                ],
            ]
        ]
    ]
];