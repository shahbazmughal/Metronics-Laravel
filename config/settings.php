<?php

return [

    'KT_THEME' => 'metronic',

    # Theme layout templates directory

    'KT_THEME_LAYOUT_DIR' => 'layout',


    # Theme Mode
    # Value=> light | dark | system

    'KT_THEME_MODE_DEFAULT'        => 'light',
    'KT_THEME_MODE_SWITCH_ENABLED' => true,


    # Theme Direction
    # Value=> ltr | rtl

    'KT_THEME_DIRECTION' => 'ltr',


    # Theme Assets

    'KT_THEME_ASSETS' => [
        'favicon' => 'assets/media/logos/favicon.ico',
        'fonts'   => [
            'https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700',
        ],
        'global'  => [
            'css' => [
                'assets/plugins/global/plugins.bundle.css',
                'assets/css/style.bundle.css',
            ],
            'js'  => [
                'assets/plugins/global/plugins.bundle.js',
                'assets/js/scripts.bundle.js',
                'assets/js/widgets.bundle.js',
            ],
        ],
    ],


    # Theme Vendors

    'KT_THEME_VENDORS' => [
        'datatables'             => [
            'css' => [
                'assets/plugins/custom/datatables/datatables.bundle.css',
            ],
            'js'  => [
                'assets/plugins/custom/datatables/datatables.bundle.js',
            ],
        ],
        'formrepeater'           => [
            'js' => [
                'assets/plugins/custom/formrepeater/formrepeater.bundle.js',
            ],
        ],
        'fullcalendar'           => [
            'css' => [
                'assets/plugins/custom/fullcalendar/fullcalendar.bundle.css',
            ],
            'js'  => [
                'assets/plugins/custom/fullcalendar/fullcalendar.bundle.js',
            ],
        ],
        'flotcharts'             => [
            'js' => [
                'assets/plugins/custom/flotcharts/flotcharts.bundle.js',
            ],
        ],
        'google-jsapi'           => [
            'js' => [
                '//www.google.com/jsapi',
            ],
        ],
        'tinymce'                => [
            'js' => [
                'assets/plugins/custom/tinymce/tinymce.bundle.js',
            ],
        ],
        'ckeditor-classic'       => [
            'js' => [
                'assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js',
            ],
        ],
        'ckeditor-inline'        => [
            'js' => [
                'assets/plugins/custom/ckeditor/ckeditor-inline.bundle.js',
            ],
        ],
        'ckeditor-balloon'       => [
            'js' => [
                'assets/plugins/custom/ckeditor/ckeditor-balloon.bundle.js',
            ],
        ],
        'ckeditor-balloon-block' => [
            'js' => [
                'assets/plugins/custom/ckeditor/ckeditor-balloon-block.bundle.js',
            ],
        ],
        'ckeditor-document'      => [
            'js' => [
                'assets/plugins/custom/ckeditor/ckeditor-document.bundle.js',
            ],
        ],
        'draggable'              => [
            'js' => [
                'assets/plugins/custom/draggable/draggable.bundle.js',
            ],
        ],
        'fslightbox'             => [
            'js' => [
                'assets/plugins/custom/fslightbox/fslightbox.bundle.js',
            ],
        ],
        'jkanban'                => [
            'css' => [
                'assets/plugins/custom/jkanban/jkanban.bundle.css',
            ],
            'js'  => [
                'assets/plugins/custom/jkanban/jkanban.bundle.js',
            ],
        ],
        'typedjs'                => [
            'js' => [
                'assets/plugins/custom/typedjs/typedjs.bundle.js',
            ],
        ],
        'cookiealert'            => [
            'css' => [
                'assets/plugins/custom/cookiealert/cookiealert.bundle.css',
            ],
            'js'  => [
                'assets/plugins/custom/cookiealert/cookiealert.bundle.js',
            ],
        ],
        'cropper'                => [
            'css' => [
                'assets/plugins/custom/cropper/cropper.bundle.css',
            ],
            'js'  => [
                'assets/plugins/custom/cropper/cropper.bundle.js',
            ],
        ],
        'vis-timeline'           => [
            'css' => [
                'assets/plugins/custom/vis-timeline/vis-timeline.bundle.css',
            ],
            'js'  => [
                'assets/plugins/custom/vis-timeline/vis-timeline.bundle.js',
            ],
        ],
        'jstree'                 => [
            'css' => [
                'assets/plugins/custom/jstree/jstree.bundle.css',
            ],
            'js'  => [
                'assets/plugins/custom/jstree/jstree.bundle.js',
            ],
        ],
        'prismjs'                => [
            'css' => [
                'assets/plugins/custom/prismjs/prismjs.bundle.css',
            ],
            'js'  => [
                'assets/plugins/custom/prismjs/prismjs.bundle.js',
            ],
        ],
        'leaflet'                => [
            'css' => [
                'assets/plugins/custom/leaflet/leaflet.bundle.css',
            ],
            'js'  => [
                'assets/plugins/custom/leaflet/leaflet.bundle.js',
            ],
        ],
        'bootstrap-select'       => [
            'css' => [
                'assets/plugins/custom/bootstrap-select/bootstrap-select.bundle.css',
            ],
            'js'  => [
                'assets/plugins/custom/bootstrap-select/bootstrap-select.bundle.js',
            ],
        ],
    ],

];
