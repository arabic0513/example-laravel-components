<?php

use Smarts\Components;

return [

    /*
    |--------------------------------------------------------------------------
    | Components
    |--------------------------------------------------------------------------
    |
    | Below you reference all components that should be loaded for your app.
    | By default all components from Blade UI Kit are loaded in. You can
    | disable or overwrite any component class or alias that you want.
    |
    */

    'components' => [
        'smarts_eimzo_login' => Components\SmartsEimzo\SmartsEimzoLogin::class,
        'smarts_eimzo_login_update_button' => Components\SmartsEimzo\SmartsEimzoUpdateButton::class,
        'smarts_eimzo_login_sign_button' => Components\SmartsEimzo\SmartsEimzoSignButton::class,
        'SmartsTable' => Components\SmartsTable\SmartsTable::class,
        'SmartsUppy' => Components\SmartsUppy\SmartsUppy::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire Components
    |--------------------------------------------------------------------------
    |
    | Below you reference all the Livewire components that should be loaded
    | for your app. By default all components from Blade UI Kit are loaded in.
    |
    */

    'livewire' => [
        //
    ],

    /*
    |--------------------------------------------------------------------------
    | Components Prefix
    |--------------------------------------------------------------------------
    |
    | This value will set a prefix for all Blade UI Kit components.
    | By default it's empty. This is useful if you want to avoid
    | collision with components from other libraries.
    |
    | If set with "buk", for example, you can reference components like:
    |
    | <x-buk-easy-mde />
    |
    */

    'prefix' => '',

    /*
    |--------------------------------------------------------------------------
    | Third Party Asset Libraries
    |--------------------------------------------------------------------------
    |
    | These settings hold reference to all third party libraries and their
    | asset files served through a CDN. Individual components can require
    | these asset files through their static `$assets` property.
    |
    */

    'assets' => [
        'eimzo_login' => [
            "vendor/eimzo/assets/js/eimzo/e-imzo.js",
            "vendor/eimzo/assets/js/eimzo/e-imzo-client.js",
            "vendor/eimzo/assets/js/eimzo/imzo.js",
            'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
            'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js',
            'https://code.jquery.com/jquery-3.7.0.js',
            'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js',
            'https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css',
        ],
        'yajra' => [
            'https://cdn.jsdelivr.net/npm/datatables.net-dt@1.13.6/css/jquery.dataTables.min.css',
            'https://cdn.jsdelivr.net/npm/datatables.net-datetime@1.2.0/dist/dataTables.dateTime.min.css',
            'https://cdn.jsdelivr.net/npm/datatables.net-fixedheader-dt@3.3.1/css/fixedHeader.dataTables.min.css',
            'https://cdn.jsdelivr.net/npm/datatables.net-fixedheader-dt@3.3.1/js/fixedHeader.dataTables.min.js',
            'https://cdn.jsdelivr.net/gh/DataTables/Dist-DataTables-Buttons-DataTables@2.2.2/css/buttons.dataTables.min.css',
            'https://cdn.jsdelivr.net/npm/datatables.net@1.13.6/js/jquery.dataTables.min.js',
            'https://cdn.jsdelivr.net/npm/datatables.net-datetime@1.2.0/dist/dataTables.dateTime.min.js',
            'https://cdn.jsdelivr.net/gh/DataTables/Plugins@1.10.24/dataRender/datetime.js',
            'https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js',
            'https://cdn.jsdelivr.net/gh/DataTables/Plugins@1.10.19/sorting/datetime-moment.js',

            /* autoFill */
            'https://cdn.datatables.net/autofill/2.6.0/css/autoFill.dataTables.min.css',
            'https://cdn.datatables.net/autofill/2.6.0/js/dataTables.autoFill.min.js',

            /* Buttons */
            'https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css',
            'https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js',
            'https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js',
            'https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js',
            'https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js',

            /* ColReorder */
            'https://cdn.datatables.net/colreorder/1.7.0/css/colReorder.dataTables.min.css',
            'https://cdn.datatables.net/colreorder/1.7.0/js/dataTables.colReorder.min.js',

            /* FixedColumns */
            'https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js',
            'https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css',

            /* FixedHeader*/
            'https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css',
            'https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js',

            /* KeyTable */
            'https://cdn.datatables.net/keytable/2.10.0/css/keyTable.dataTables.min.css',
            'https://cdn.datatables.net/keytable/2.10.0/js/dataTables.keyTable.min.js',

            /* Responsive*/
            'https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css',
            'https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js',

            /* RowGroup */
            'https://cdn.datatables.net/rowgroup/1.4.0/css/rowGroup.dataTables.min.css',
            'https://cdn.datatables.net/rowgroup/1.4.0/js/dataTables.rowGroup.min.js',

            /* RowReorder */
            'https://cdn.datatables.net/rowreorder/1.4.1/css/rowReorder.dataTables.min.css',
            'https://cdn.datatables.net/rowreorder/1.4.1/js/dataTables.rowReorder.min.js',

            /* Scroller */
            'https://cdn.datatables.net/scroller/2.2.0/css/scroller.dataTables.min.css',
            'https://cdn.datatables.net/scroller/2.2.0/js/dataTables.scroller.min.js',

            /* SearchBuilder */
            'https://cdn.datatables.net/searchbuilder/1.5.0/css/searchBuilder.dataTables.min.css',
            'https://cdn.datatables.net/searchbuilder/1.5.0/js/dataTables.searchBuilder.min.js',

            /* SearchPanes */
            'https://cdn.datatables.net/searchpanes/2.2.0/css/searchPanes.dataTables.min.css',
            'https://cdn.datatables.net/select/1.7.0/css/select.dataTables.min.css',
            'https://cdn.datatables.net/searchpanes/2.2.0/js/dataTables.searchPanes.min.js',
            'https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js',

            /* StateRestore */
            'https://cdn.datatables.net/staterestore/1.3.0/css/stateRestore.dataTables.min.css',
            'https://cdn.datatables.net/staterestore/1.3.0/js/dataTables.stateRestore.min.js',
        ],
        'uppy' => [
            'https://releases.transloadit.com/uppy/v2.4.1/uppy.min.css',
            'https://releases.transloadit.com/uppy/v2.4.1/uppy.min.js',
        ]
    ],

];
