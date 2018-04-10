<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1523367051,
    'checksum' => '6b5798dff85e11ad05d506eb1511dbb6',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1519906686
            ],
            'plugins/admin' => [
                'file' => 'user/config/plugins/admin.yaml',
                'modified' => 1520842214
            ],
            'plugins/advanced-pagecache' => [
                'file' => 'user/config/plugins/advanced-pagecache.yaml',
                'modified' => 1522070926
            ],
            'plugins/autoseo' => [
                'file' => 'user/config/plugins/autoseo.yaml',
                'modified' => 1522325682
            ],
            'plugins/backup-manager' => [
                'file' => 'user/config/plugins/backup-manager.yaml',
                'modified' => 1521699692
            ],
            'plugins/customadmin' => [
                'file' => 'user/config/plugins/customadmin.yaml',
                'modified' => 1522326526
            ],
            'plugins/email' => [
                'file' => 'user/config/plugins/email.yaml',
                'modified' => 1521653922
            ],
            'plugins/error' => [
                'file' => 'user/config/plugins/error.yaml',
                'modified' => 1521701280
            ],
            'plugins/login' => [
                'file' => 'user/config/plugins/login.yaml',
                'modified' => 1521643308
            ],
            'plugins/minify-html' => [
                'file' => 'user/config/plugins/minify-html.yaml',
                'modified' => 1522326406
            ],
            'plugins/pagination' => [
                'file' => 'user/config/plugins/pagination.yaml',
                'modified' => 1522934221
            ],
            'plugins/quick-tray-links' => [
                'file' => 'user/config/plugins/quick-tray-links.yaml',
                'modified' => 1522326474
            ],
            'plugins/readingtime' => [
                'file' => 'user/config/plugins/readingtime.yaml',
                'modified' => 1521804362
            ],
            'plugins/simplesearch' => [
                'file' => 'user/config/plugins/simplesearch.yaml',
                'modified' => 1522304500
            ],
            'plugins/sitemap' => [
                'file' => 'user/config/plugins/sitemap.yaml',
                'modified' => 1522326060
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1519906682
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1522996518
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1519906686
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1523366950
            ],
            'themes/mache' => [
                'file' => 'user/config/themes/mache.yaml',
                'modified' => 1519907512
            ],
            'themes/tc2018' => [
                'file' => 'user/config/themes/tc2018.yaml',
                'modified' => 1520944234
            ],
            'themes/tcAMP18' => [
                'file' => 'user/config/themes/tcAMP18.yaml',
                'modified' => 1522326656
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1521787994
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1521787994
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1521787994
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1521787994
            ]
        ],
        'user/plugins' => [
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1522830994
            ],
            'plugins/advanced-pagecache' => [
                'file' => 'user/plugins/advanced-pagecache/advanced-pagecache.yaml',
                'modified' => 1522070910
            ],
            'plugins/ampimage' => [
                'file' => 'user/plugins/ampimage/ampimage.yaml',
                'modified' => 1522055216
            ],
            'plugins/devtools' => [
                'file' => 'user/plugins/devtools/devtools.yaml',
                'modified' => 1522692894
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1519906590
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1520841962
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1521801780
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1521643230
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/pagination.yaml',
                'modified' => 1522934205
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1519906566
            ],
            'plugins/sitemap' => [
                'file' => 'user/plugins/sitemap/sitemap.yaml',
                'modified' => 1522326026
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => '>_Tomas ',
                'body_classes' => '',
                'content_padding' => true,
                'twofa_enabled' => true,
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => true,
                    'dashboard-notifications' => false,
                    'dashboard-feed' => false,
                    'dashboard-pages' => true
                ],
                'pages' => [
                    'show_parents' => 'both'
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'frontend_preview_target' => 'inline',
                'show_github_msg' => false,
                'pages_list_display_field' => 'title',
                'google_fonts' => true,
                'admin_icons' => 'font-awesome',
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => false,
                    'dashboard' => false,
                    'plugins' => false,
                    'themes' => false
                ],
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => '30',
                        'monthly' => '12',
                        'visitors' => '20'
                    ]
                ],
                'frontend_pages_target' => '_blank'
            ],
            'advanced-pagecache' => [
                'enabled' => true,
                'enabled_with_params' => true,
                'enabled_with_query' => true,
                'whitelist' => false,
                'blacklist' => [
                    0 => '/error',
                    1 => '/random'
                ]
            ],
            'ampimage' => [
                'enabled' => true,
                'addFigure' => true,
                'defaultLayout' => 'responsive',
                'moveClassToFigure' => true
            ],
            'devtools' => [
                'enabled' => true
            ],
            'email' => [
                'enabled' => true,
                'from' => 'menos5@gmail.com',
                'from_name' => 'TC 2018',
                'to' => 'menos5@gmail.com',
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'smtp',
                    'smtp' => [
                        'server' => 'smtp.gmail.com',
                        'port' => 465,
                        'encryption' => 'ssl',
                        'user' => 'menos5@gmail.com',
                        'password' => 'Cri55tina'
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail -bs'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/404'
                ]
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'inline_css' => true,
                'refresh_prevention' => false,
                'client_side_validation' => true,
                'inline_errors' => false,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'filesize' => 0,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => NULL,
                'redirect_to_login' => true,
                'redirect_after_login' => NULL,
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'route_profile' => '/user_profile',
                'route_register' => '/user_register',
                'route_unauthorized' => '/user_unauthorized',
                'dynamic_page_visibility' => false,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ],
                'max_pw_resets_count' => 0,
                'max_pw_resets_interval' => 60,
                'max_login_count' => 0,
                'max_login_interval' => 2,
                'user_registration' => [
                    'enabled' => false,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'level'
                    ],
                    'default_values' => [
                        'level' => 'Newbie'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'redirect_after_registration' => '',
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => false,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => '0'
                    ]
                ]
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => false,
                'delta' => 0
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'sitemap' => [
                'enabled' => true,
                'route' => '/sitemap',
                'changefreq' => 'daily',
                'priority' => 1,
                'ignores' => [
                    0 => '/404'
                ]
            ],
            'autoseo' => [
                'enabled' => false,
                'description' => [
                    'enabled' => true,
                    'length' => 30
                ],
                'keywords' => [
                    'enabled' => true,
                    'length' => 20
                ],
                'facebook' => [
                    'enabled' => true
                ],
                'twitter' => [
                    'enabled' => true
                ]
            ],
            'backup-manager' => [
                'enabled' => true,
                'backup' => [
                    'testmode' => [
                        'enabled' => false,
                        'compressionratio' => 1.2
                    ],
                    'phptimeout' => 600,
                    'storage' => [
                        'maxspace' => 10,
                        'keepdays' => 10,
                        'showbackups' => 50
                    ],
                    'log' => true,
                    'ignore' => [
                        'foldercase' => true,
                        'toplevelintersect' => false,
                        'foldersintersect' => false,
                        'forceaddasempty' => false
                    ]
                ]
            ],
            'customadmin' => [
                'enabled' => false
            ],
            'minify-html' => [
                'enabled' => false,
                'cache' => true,
                'mode' => 'fastest'
            ],
            'quick-tray-links' => [
                'enabled' => false,
                'links' => [
                    0 => [
                        'icon' => 'fa fa-book',
                        'link' => 'https://learn.getgrav.org',
                        'tooltip' => 'Grav Documentation and Tutorials'
                    ],
                    1 => [
                        'icon' => 'fa fa-info',
                        'link' => '/admin/config/info',
                        'tooltip' => 'PHP Information'
                    ]
                ]
            ],
            'readingtime' => [
                'enabled' => true,
                'words_per_minute' => 200,
                'format' => '{minutes_short_count} {minutes_text}',
                'round' => 'minutes'
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => false,
                'built_in_js' => false,
                'display_button' => false,
                'min_query_length' => 3,
                'route' => '/search',
                'search_content' => 'raw',
                'template' => 'simplesearch_results',
                'filter_combinator' => 'and',
                'ignore_accented_characters' => false,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ]
        ],
        'media' => [
            'types' => [
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
                    'thumb' => 'media/thumb-jpg.png',
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
                    'thumb' => 'media/thumb-svg.png',
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
                'webm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-webm.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
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
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
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
                    'thumb' => 'media/thumb-docx.png',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xls.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xlsx.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ppt.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pptx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pptx.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pps.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-rtf.png',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-bmp.png',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tiff.png',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpe.png',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-avi.png',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-wmv.png',
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
                'ics' => [
                    'type' => 'iCal',
                    'thumb' => 'media/thumb-ics.png',
                    'mime' => 'text/calendar'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'ai' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ai.png',
                    'mime' => 'image/ai'
                ],
                'psd' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-psd.png',
                    'mime' => 'image/psd'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7z.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tar.png',
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
            ]
        ],
        'site' => [
            'title' => 'TomasCornelles',
            'default_lang' => 'es',
            'author' => [
                'name' => 'Tomás Cornelles',
                'email' => 'tomascornelles@gmail.com'
            ],
            'taxonomies' => [
                0 => 'tag',
                1 => 'type',
                2 => 'tech',
                3 => 'client',
                4 => 'year'
            ],
            'metadata' => [
                'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
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
            'timezone' => 'Europe/Madrid',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'force_lowercase_urls' => true,
            'custom_base_url' => '',
            'username_regex' => '^[a-z0-9_-]{3,16}$',
            'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
            'intl_enabled' => true,
            'languages' => [
                'supported' => [
                    0 => 'es'
                ],
                'include_default_lang' => false,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => true
            ],
            'pages' => [
                'theme' => 'tcAMP2018',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => 'd-m-Y H:i',
                    'short' => 'd-m-y G:i',
                    'long' => 'd-m-y G:i'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
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
                'cache_control' => NULL,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '302',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'clear_images_by_default' => true,
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => true,
                'allow_webserver_gzip' => true,
                'redis' => [
                    'socket' => false
                ]
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
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => '1',
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
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ],
                'auto_metadata_exif' => false,
                'upload_limit' => 2097152
            ],
            'session' => [
                'enabled' => true,
                'initialize' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true,
                'official_gpm_only' => true
            ]
        ],
        'security' => [
            'salt' => 'UuGn2M0bD6LKgc'
        ],
        'themes' => [
            'mache' => [
                'enabled' => true,
                'blog_thumbnail_width' => 600,
                'blog_thumbnail_height' => 450,
                'favicon' => [
                    'user/themes/mache/images/icono.png' => [
                        'name' => 'icono.png',
                        'type' => 'image/png',
                        'size' => 1271,
                        'path' => 'user/themes/mache/images/icono.png'
                    ]
                ],
                'logo' => [
                    'user/themes/mache/images/principal.svg' => [
                        'name' => 'principal.svg',
                        'type' => 'image/svg+xml',
                        'size' => 15666,
                        'path' => 'user/themes/mache/images/principal.svg'
                    ]
                ]
            ],
            'tc2018' => [
                'enabled' => true,
                'color' => 'red',
                'blog_thumbnail_width' => 600,
                'blog_thumbnail_height' => 450
            ],
            'tcAMP18' => [
                'enabled' => true,
                'color' => 'red',
                'left_footer' => '',
                'blog_thumbnail_width' => '600',
                'blog_thumbnail_height' => '450',
                'favicon' => [
                    'user/themes/tc2018/images/icono.png' => [
                        'name' => 'icono.png',
                        'type' => 'image/png',
                        'size' => 6224,
                        'path' => 'user/themes/tc2018/images/icono.png'
                    ]
                ]
            ]
        ]
    ]
];
