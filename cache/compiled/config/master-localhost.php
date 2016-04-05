<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1459891575,
    'checksum' => '59d875874ad4d031b5c16ce7a2cb273a',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1459825553
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/config/plugins/taxonomylist.yaml',
                'modified' => 1459877054
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1459824940
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1459876227
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1459825553
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1459891543
            ],
            'themes/bones' => [
                'file' => 'user/config/themes/bones.yaml',
                'modified' => 1459865518
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1456438750
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1456438750
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1456438750
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1456438750
            ]
        ],
        'user/plugins' => [
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1456438754
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/feed.yaml',
                'modified' => 1456438754
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/taxonomylist.yaml',
                'modified' => 1456438756
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/relatedpages.yaml',
                'modified' => 1456438754
            ],
            'plugins/archives' => [
                'file' => 'user/plugins/archives/archives.yaml',
                'modified' => 1456438752
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1459825541
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1459825539
            ],
            'plugins/random' => [
                'file' => 'user/plugins/random/random.yaml',
                'modified' => 1456438754
            ],
            'plugins/sitemap' => [
                'file' => 'user/plugins/sitemap/sitemap.yaml',
                'modified' => 1456438756
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/pagination.yaml',
                'modified' => 1456438754
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1456438754
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1459891565
            ],
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/breadcrumbs.yaml',
                'modified' => 1456438752
            ],
            'plugins/comments' => [
                'file' => 'user/plugins/comments/comments.yaml',
                'modified' => 1459891568
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1456438754
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1459891566
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => 'My Feed Description',
                'lang' => 'en-us',
                'length' => 500
            ],
            'taxonomylist' => [
                'enabled' => true,
                'route' => '/blog'
            ],
            'relatedpages' => [
                'enabled' => true,
                'limit' => 5,
                'show_score' => true,
                'score_threshold' => 20,
                'filter' => [
                    'items' => [
                        '@page' => '/blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ]
                ],
                'page_in_filter' => true,
                'explicit_pages' => [
                    'process' => true,
                    'score' => 100
                ],
                'taxonomy_match' => [
                    'taxonomy' => 'tag',
                    'taxonomy_taxonomy' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 50,
                            2 => 75,
                            3 => 100
                        ]
                    ],
                    'taxonomy_content' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 20,
                            2 => 30,
                            3 => 45,
                            4 => 60,
                            5 => 70,
                            6 => 80,
                            7 => 90,
                            8 => 100
                        ]
                    ]
                ],
                'content_match' => [
                    'process' => false
                ]
            ],
            'archives' => [
                'enabled' => true,
                'built_in_css' => true,
                'date_display_format' => 'F Y',
                'show_count' => true,
                'limit' => 12,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'filter_combinator' => 'and',
                'filters' => [
                    'category' => 'blog'
                ]
            ],
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'theme' => 'grav',
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'show_github_msg' => true,
                'google_fonts' => true,
                'enable_auto_updates_check' => true,
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => false,
                'route_register' => false,
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'redirect' => NULL,
                'parent_acl' => false,
                'user_registration' => [
                    'enabled' => true,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'access',
                        6 => 'state'
                    ],
                    'additional_params' => [
                        'access' => 'site.login'
                    ],
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => true,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ],
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 1800,
                    'name' => 'grav-rememberme'
                ],
                'oauth' => [
                    'enabled' => false,
                    'user' => [
                        'autocreate' => false,
                        'access' => [
                            'site' => [
                                'login' => true
                            ]
                        ]
                    ],
                    'providers' => [
                        'Facebook' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'Google' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'GitHub' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'Twitter' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ]
                    ]
                ]
            ],
            'random' => [
                'enabled' => true,
                'route' => '/random',
                'redirect' => true,
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and'
            ],
            'sitemap' => [
                'enabled' => true,
                'route' => '/sitemap',
                'ignores' => [
                    0 => '/blog/blog-post-to-ignore',
                    1 => '/ignore-this-route'
                ]
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => '/search',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ],
            'form' => [
                'enabled' => true,
                'files' => [
                    'multiple' => false,
                    'destination' => '@self',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'breadcrumbs' => [
                'enabled' => true,
                'show_all' => true,
                'built_in_css' => true,
                'include_home' => true,
                'icon_home' => '',
                'icon_divider_classes' => 'fa fa-angle-right',
                'link_trailing' => false
            ],
            'comments' => [
                'enabled' => true,
                'enable_on_routes' => [
                    0 => '/blog'
                ],
                'disable_on_routes' => [
                    0 => '/blog/blog-post-to-ignore',
                    1 => '/ignore-this-route'
                ],
                'form' => [
                    'name' => 'comments',
                    'fields' => [
                        0 => [
                            'name' => 'name',
                            'label' => 'Name',
                            'placeholder' => 'Enter your name',
                            'autocomplete' => 'on',
                            'type' => 'text',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        1 => [
                            'name' => 'email',
                            'label' => 'Email',
                            'placeholder' => 'Enter your email address',
                            'type' => 'email',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        2 => [
                            'name' => 'text',
                            'label' => 'Message',
                            'placeholder' => 'Enter your message',
                            'type' => 'textarea',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        3 => [
                            'name' => 'date',
                            'type' => 'hidden',
                            'process' => [
                                'fillWithCurrentDateTime' => true
                            ]
                        ],
                        4 => [
                            'name' => 'title',
                            'type' => 'hidden',
                            'evaluateDefault' => 'grav.page.header.title'
                        ],
                        5 => [
                            'name' => 'lang',
                            'type' => 'hidden',
                            'evaluateDefault' => 'grav.language.getLanguage'
                        ],
                        6 => [
                            'name' => 'path',
                            'type' => 'hidden',
                            'evaluateDefault' => 'grav.uri.path'
                        ]
                    ],
                    'buttons' => [
                        0 => [
                            'type' => 'submit',
                            'value' => 'Submit'
                        ]
                    ],
                    'process' => [
                        0 => [
                            'email' => [
                                'subject' => '[New Comment] from {{ form.value.name|e }}',
                                'body' => '{% include \'forms/data.html.twig\' %}'
                            ]
                        ],
                        1 => [
                            'addComment' => NULL
                        ],
                        2 => [
                            'message' => 'Thank you for writing your comment!'
                        ]
                    ]
                ]
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html'
            ]
        ],
        'media' => [
            'defaults' => [
                'type' => 'file',
                'thumb' => 'media/thumb.png',
                'mime' => 'application/octet-stream',
                'image' => [
                    'filters' => [
                        'default' => [
                            0 => 'enableProgressive'
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpe' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpeg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpeg.png',
                'mime' => 'image/jpeg'
            ],
            'png' => [
                'type' => 'image',
                'thumb' => 'media/thumb-png.png',
                'mime' => 'image/png'
            ],
            'gif' => [
                'type' => 'animated',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/gif'
            ],
            'svg' => [
                'type' => 'vector',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/svg+xml'
            ],
            'mp4' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mp4.png',
                'mime' => 'video/mp4'
            ],
            'mov' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mov.png',
                'mime' => 'video/quicktime'
            ],
            'm4v' => [
                'type' => 'video',
                'thumb' => 'media/thumb-m4v.png',
                'mime' => 'video/x-m4v'
            ],
            'swf' => [
                'type' => 'video',
                'thumb' => 'media/thumb-swf.png',
                'mime' => 'video/x-flv'
            ],
            'flv' => [
                'type' => 'video',
                'thumb' => 'media/thumb-flv.png',
                'mime' => 'video/x-flv'
            ],
            'mp3' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-mp3.png',
                'mime' => 'audio/mp3'
            ],
            'ogg' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-ogg.png',
                'mime' => 'audio/ogg'
            ],
            'wma' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wma.png',
                'mime' => 'audio/wma'
            ],
            'm4a' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-m4a.png',
                'mime' => 'audio/m4a'
            ],
            'wav' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wav.png',
                'mime' => 'audio/wav'
            ],
            'aiff' => [
                'type' => 'audio',
                'mime' => 'audio/aiff'
            ],
            'aif' => [
                'type' => 'audio',
                'mime' => 'audio/aif'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'xml' => [
                'type' => 'file',
                'thumb' => 'media/thumb-xml.png',
                'mime' => 'application/xml'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'docx' => [
                'type' => 'file',
                'mime' => 'application/msword'
            ],
            'xls' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlm' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xld' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xla' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlc' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlw' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xll' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'ppt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'pps' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'rtf' => [
                'type' => 'file',
                'mime' => 'application/rtf'
            ],
            'bmp' => [
                'type' => 'file',
                'mime' => 'image/bmp'
            ],
            'tiff' => [
                'type' => 'file',
                'mime' => 'image/tiff'
            ],
            'mpeg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpe' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'avi' => [
                'type' => 'file',
                'mime' => 'video/msvideo'
            ],
            'wmv' => [
                'type' => 'file',
                'mime' => 'video/x-ms-wmv'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'htm' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'pdf' => [
                'type' => 'file',
                'thumb' => 'media/thumb-pdf.png',
                'mime' => 'application/pdf'
            ],
            'zip' => [
                'type' => 'file',
                'thumb' => 'media/thumb-zip.png',
                'mime' => 'application/zip'
            ],
            '7z' => [
                'type' => 'file',
                'thumb' => 'media/thumb-7zip.png',
                'mime' => 'application/x-7z-compressed'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ],
            'tar' => [
                'type' => 'file',
                'mime' => 'application/x-tar'
            ],
            'css' => [
                'type' => 'file',
                'thumb' => 'media/thumb-css.png',
                'mime' => 'text/css'
            ],
            'js' => [
                'type' => 'file',
                'thumb' => 'media/thumb-js.png',
                'mime' => 'application/javascript'
            ],
            'json' => [
                'type' => 'file',
                'thumb' => 'media/thumb-json.png',
                'mime' => 'application/json'
            ]
        ],
        'site' => [
            'title' => 'The Tech Cave',
            'author' => [
                'name' => 'Tech Cave Team',
                'email' => 'john@email.com',
                'devon' => [
                    'name' => 'Devon Smith',
                    'email' => 'devo8604@gmail.com',
                    'bio' => 'I am a professional Linux System Administrator and a web development hobbyist'
                ]
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag',
                2 => 'month',
                3 => 'author'
            ],
            'metadata' => [
                'description' => 'A Blog sit for the nerd enthusiest'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => [
                '/changelog' => '/blog/the-urban-jungle'
            ],
            'routes' => [
                '/something/else' => '/blog/focus-and-blur',
                '/another/one/(.*)' => '/blog/$1'
            ],
            'blog' => [
                'route' => ''
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => 'America/Denver',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'proxy_url' => NULL,
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/landing',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'bones',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '301',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'lifetime' => 604800,
                'gzip' => false
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => false,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true
            ]
        ],
        'security' => [
            'salt' => 'U5WMjJBswd4S1y'
        ],
        'themes' => [
            'bones' => [
                'enabled' => true,
                'site_title' => [
                    'enabled' => true
                ],
                'google_fonts_logo' => [
                    'enabled' => true
                ],
                'fontawesome' => [
                    'enabled' => true
                ],
                'google_prettify' => [
                    'enabled' => true
                ],
                'dropdown' => [
                    'enabled' => false
                ],
                'mobilemenu_breakpoint' => 'large',
                'mobilemenu_position' => 'left',
                'foundation_offcanvas_js' => [
                    'enabled' => true
                ],
                'foundation_util_mediaQuery_js' => [
                    'enabled' => true
                ],
                'foundation_util_motion_js' => [
                    'enabled' => true
                ],
                'foundation_util_touch_js' => [
                    'enabled' => true
                ],
                'foundation_util_triggers_js' => [
                    'enabled' => true
                ],
                'css_bones' => [
                    'enabled' => true
                ],
                'css_global_styles' => [
                    'enabled' => true
                ],
                'css_grid' => [
                    'enabled' => true
                ],
                'css_flex_grid' => [
                    'enabled' => false
                ],
                'css_typography' => [
                    'enabled' => true
                ],
                'css_button' => [
                    'enabled' => true
                ],
                'css_forms' => [
                    'enabled' => true
                ],
                'css_visibility_classes' => [
                    'enabled' => true
                ],
                'css_float_classes' => [
                    'enabled' => true
                ],
                'css_menu' => [
                    'enabled' => true
                ],
                'css_off_canvas' => [
                    'enabled' => true
                ],
                'css_pagination' => [
                    'enabled' => true
                ],
                'css_sticky' => [
                    'enabled' => true
                ],
                'css_table' => [
                    'enabled' => true
                ],
                'tab' => 'on',
                'animate_css' => [
                    'enabled' => true
                ],
                'wow_js' => [
                    'enabled' => true
                ],
                'foundation_abide_js' => [
                    'enabled' => false
                ],
                'foundation_accordion_js' => [
                    'enabled' => false
                ],
                'foundation_accordionMenu_js' => [
                    'enabled' => false
                ],
                'foundation_drilldown_js' => [
                    'enabled' => false
                ],
                'foundation_dropdown_js' => [
                    'enabled' => false
                ],
                'foundation_dropdownMenu_js' => [
                    'enabled' => false
                ],
                'foundation_equalizer_js' => [
                    'enabled' => true
                ],
                'foundation_interchange_js' => [
                    'enabled' => false
                ],
                'foundation_magellan_js' => [
                    'enabled' => false
                ],
                'foundation_orbit_js' => [
                    'enabled' => false
                ],
                'foundation_responsiveMenu_js' => [
                    'enabled' => false
                ],
                'foundation_responsiveToggle_js' => [
                    'enabled' => false
                ],
                'foundation_reveal_js' => [
                    'enabled' => false
                ],
                'foundation_slider_js' => [
                    'enabled' => false
                ],
                'foundation_sticky_js' => [
                    'enabled' => false
                ],
                'foundation_tabs_js' => [
                    'enabled' => false
                ],
                'foundation_toggler_js' => [
                    'enabled' => false
                ],
                'foundation_tooltip_js' => [
                    'enabled' => false
                ],
                'foundation_util_box_js' => [
                    'enabled' => false
                ],
                'foundation_util_keyboard_js' => [
                    'enabled' => false
                ],
                'foundation_util_nest_js' => [
                    'enabled' => false
                ],
                'foundation_util_timerAndImageLoader_js' => [
                    'enabled' => false
                ],
                'css_custom' => [
                    'enabled' => false
                ],
                'css_accordion' => [
                    'enabled' => false
                ],
                'css_accordion_menu' => [
                    'enabled' => false
                ],
                'css_badge' => [
                    'enabled' => false
                ],
                'css_breadcrumbs' => [
                    'enabled' => false
                ],
                'css_button_group' => [
                    'enabled' => false
                ],
                'css_callout' => [
                    'enabled' => true
                ],
                'css_close_button' => [
                    'enabled' => false
                ],
                'css_drilldown_menu' => [
                    'enabled' => false
                ],
                'css_dropdown' => [
                    'enabled' => false
                ],
                'css_dropdown_menu' => [
                    'enabled' => false
                ],
                'css_flex_video' => [
                    'enabled' => false
                ],
                'css_label' => [
                    'enabled' => false
                ],
                'css_media_object' => [
                    'enabled' => false
                ],
                'css_orbit' => [
                    'enabled' => false
                ],
                'css_progress_bar' => [
                    'enabled' => false
                ],
                'css_slider' => [
                    'enabled' => false
                ],
                'css_reveal' => [
                    'enabled' => false
                ],
                'css_switch' => [
                    'enabled' => false
                ],
                'css_tabs' => [
                    'enabled' => false
                ],
                'css_thumbnail' => [
                    'enabled' => false
                ],
                'css_title_bar' => [
                    'enabled' => false
                ],
                'css_tooltip' => [
                    'enabled' => false
                ],
                'css_top_bar' => [
                    'enabled' => false
                ],
                'css_ui_transitions' => [
                    'enabled' => false
                ],
                'css_ui_animations' => [
                    'enabled' => false
                ]
            ]
        ]
    ]
];
