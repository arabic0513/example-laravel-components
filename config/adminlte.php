<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'AdminLTE 3',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Example</b>App',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'AdminLTE Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        //[
        //    'type' => 'sidebar-menu-search',
        //    'text' => 'search',
        //],
        //[
        //    'text' => 'blog',
        //    'url'  => 'admin/blog',
        //    'can'  => 'manage-blog',
        //],
        //[
        //    'text'        => 'pages',
        //    'url'         => 'admin/pages',
        //    'icon'        => 'far fa-fw fa-file',
        //    'label'       => 4,
        //    'label_color' => 'success',
        //],
        //['header' => 'account_settings'],
        [
            'text'    => 'Datatable',
            'icon_color'    => 'cyan',
            'submenu' => [
                [
                    'text' => 'AutoFill',
                    'submenu' => [
                        [
                            'text' => 'Fill plug-ins',
                            'url'  => "yajra/autofill.fillplugins"
                        ],

                        [
                            'text' => 'Events',
                            'url'  => "yajra/autofill.events"
                        ]

                    ]
                ],
                [
                    'text' => 'Buttons',
                    'submenu' => [
                        [
                            'text' => 'Multi-level collections',
                            'url'  => "yajra/buttons.multilevelcollections"
                        ],

                        [
                            'text' => 'Plug-ins',
                            'url'  => "yajra/buttons.plugins"
                        ]

                    ]
                ],
                [
                    'text' => 'ColReorder',
                    'submenu' => [
                        [
                            'text' => 'Individual column filtering',
                            'url'  => "yajra/colreorder.individualcolumnfiltering"
                        ],

                        [
                            'text' => 'Scrolling table',
                            'url'  => "yajra/colreorder.scrollingtable"
                        ]

                    ]
                ],
                [
                    'text' => 'Editor',
                    'submenu' => [
                        [
                            'text' => 'Client-side validation',
                            'url'  => "editor/editor.clientvalidation"
                        ],
                        [
                            'text' => 'DataTable as a single select',
                            'url'  => "editor/editor.select"
                        ],
                        [
                            'text' => 'Date and time input',
                            'url'  => "editor/editor.datetime"
                        ],
                        [
                            'text' => 'Dependent fields',
                            'url'  => "editor/editor.dependentFields"
                        ],
                        [
                            'text' => 'Duplicate button',
                            'url'  => "editor/editor.duplicateButton"
                        ],
                        [
                            'text' => 'Editing options - submit on blur',
                            'url'  => "editor/editor.options"
                        ],
                        [
                            'text' => 'File upload (many)',
                            'url'  => "editor/editor.upload-many"
                        ],
                        [
                            'text' => 'In table form controls',
                            'url'  => "editor/editor.inTableControls"
                        ],
                        [
                            'text' => 'Join tables - self referencing join',
                            'url'  => "editor/editor.joinSelf"
                        ],
                        [
                            'text' => 'Multi-item editing (rows, columns, cells)',
                            'url'  => "editor/editor.multiItem"
                        ],
                        [
                            'text' => 'Nested editing',
                            'url'  => "editor/editor.nested"
                        ],
                        [
                            'text' => 'Parent child editor',
                            'url'  => "editor/editor.parentChild"
                        ],
                        [
                            'text' => 'REST interface',
                            'url'  => "editor/editor.REST"
                        ],
                        [
                            'text' => 'Whole row - icon controls',
                            'url'  => "editor/editor.fullRow"
                        ],
                    ]
                ],
                [
                    'text' => 'FixedColumns',
                    'submenu' => [
                        [
                            'text' => 'Fluid column width',
                            'url'  => "yajra/fixedcolumns.fluidcolumnwidth"
                        ],

                        [
                            'text' => 'Server-side processing',
                            'url'  => "yajra/fixedcolumns.serversideprocessing"
                        ]

                    ]
                ],
                [
                    'text' => 'FixedHeader',
                    'submenu' => [
                        [
                            'text' => 'Column filtering',
                            'url'  => "yajra/fixedheader.columnfiltering"
                        ],

                        [
                            'text' => 'Enable / disable FixedHeader',
                            'url'  => "yajra/fixedheader.enable-disable"
                        ]

                    ]
                ],
                [
                    'text' => 'KeyTable',
                    'submenu' => [
                        [
                            'text' => 'Events',
                            'url'  => "yajra/keytable.events"
                        ],

                        [
                            'text' => 'Server-side processing',
                            'url'  => "yajra/keytable.serversideprocessing"
                        ]

                    ]
                ],
                [
                    'text' => 'Responsive',
                    'submenu' => [
                        [
                            'text' => 'Bootstrap 5 modal',
                            'url'  => "yajra/responsive.bootstrap5modal"
                        ],

                        [
                            'text' => 'Custom child row renderer',
                            'url'  => "yajra/responsive.customchildrowrenderer"
                        ]

                    ]
                ],
                [
                    'text' => 'RowGroup',
                    'submenu' => [
                        [
                            'text' => 'Custom row rendering / aggregates',
                            'url'  => "yajra/rowgroup.customrowrendering"
                        ],

                        [
                            'text' => 'Data source change event',
                            'url'  => "yajra/rowgroup.datasourcechangeevent"
                        ]

                    ]
                ],
                [
                    'text' => 'RowReorder',
                    'submenu' => [
                        [
                            'text' => 'Full row selection',
                            'url'  => "yajra/rowreorder.fullrowselection"
                        ],

                        [
                            'text' => 'Reorder event',
                            'url'  => "yajra/rowreorder.reorderevent"
                        ]

                    ]
                ],
                [
                    'text' => 'Scroller',
                    'submenu' => [
                        [
                            'text' => 'Server-side processing',
                            'url'  => "yajra/scroller.serversideprocessing"
                        ],
                        [
                            'text' => 'State saving',
                            'url'  => "yajra/scroller.statesaving"
                        ],
                    ]
                ],
                [
                    'text' => 'SearchBuilder',
                    'submenu' => [
                        [
                            'text' => 'Custom Conditions',
                            'url'  => "yajra/searchBuilder.customconditions"
                        ],
                        [
                            'text' => 'Plug-in Example',
                            'url'  => "yajra/searchBuilder.pluginexample"
                        ],
                        [
                            'text' => 'SearchBuilder Configuration using Buttons',
                            'url'  => "yajra/searchBuilder.buttonOptions"
                        ],
                    ]
                ],
                [
                    'text' => 'SearchPanes',
                    'submenu' => [
                        [
                            'text' => 'Collapsed Panes',
                            'url'  => "yajra/searchpanes.collapsedpanes"
                        ],
                        [
                            'text' => 'SearchPanes Button Configuration',
                            'url'  => "yajra/searchpanes.buttonsConfig"
                        ],
                        [
                            'text' => 'Server-side processing',
                            'url'  => "yajra/searchpanes.serversideprocessing"
                        ],
                    ]
                ],
                [
                    'text' => 'Select',
                    'submenu' => [
                        [
                            'text' => 'Checkbox selection',
                            'url'  => "yajra/select.checkboxselection"
                        ],
                        [
                            'text' => 'State Save',
                            'url'  => "yajra/select.statesave"
                        ],
                    ]
                ],
                [
                    'text' => 'StateRestore',
                    'submenu' => [
                        [
                            'text' => 'Custom Split Buttons',
                            'url'  => "yajra/staterestore.customsplitbuttons"
                        ],
                        [
                            'text' => 'Remove All Button',
                            'url'  => "yajra/staterestore.removeallbutton"
                        ],
                    ]
                ],
            ],
        ],
        [
            'text' => 'Uppy',
            'url' => '/uppy',
            'icon_color' => 'cyan',
        ],
        [
            'text' => 'Eimzo',
            'url' => '/eimzo',
            'icon_color' => 'cyan',
        ],
        //['header' => 'labels'],
        //[
        //    'text'       => 'important',
        //    'icon_color' => 'red',
        //    'url'        => '#',
        //],
        //[
        //    'text'       => 'warning',
        //    'icon_color' => 'yellow',
        //    'url'        => '#',
        //],
        //[
        //    'text'       => 'information',
        //    'icon_color' => 'cyan',
        //    'url'        => '#',
        //],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    // 'plugins' => [
    //     'Datatables' => [
    //         'active' => false,
    //         'files' => [
    //             [
    //                 'type' => 'js',
    //                 'asset' => false,
    //                 'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
    //             ],
    //             [
    //                 'type' => 'js',
    //                 'asset' => false,
    //                 'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
    //             ],
    //             [
    //                 'type' => 'css',
    //                 'asset' => false,
    //                 'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
    //             ],
    //         ],
    //     ],
    //     'Select2' => [
    //         'active' => false,
    //         'files' => [
    //             [
    //                 'type' => 'js',
    //                 'asset' => false,
    //                 'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
    //             ],
    //             [
    //                 'type' => 'css',
    //                 'asset' => false,
    //                 'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
    //             ],
    //         ],
    //     ],
    //     'Chartjs' => [
    //         'active' => false,
    //         'files' => [
    //             [
    //                 'type' => 'js',
    //                 'asset' => false,
    //                 'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
    //             ],
    //         ],
    //     ],
    //     'Sweetalert2' => [
    //         'active' => false,
    //         'files' => [
    //             [
    //                 'type' => 'js',
    //                 'asset' => false,
    //                 'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
    //             ],
    //         ],
    //     ],
    //     'Pace' => [
    //         'active' => false,
    //         'files' => [
    //             [
    //                 'type' => 'css',
    //                 'asset' => false,
    //                 'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
    //             ],
    //             [
    //                 'type' => 'js',
    //                 'asset' => false,
    //                 'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
    //             ],
    //         ],
    //     ],
    // ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
