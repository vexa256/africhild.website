<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'              => [
            'title'     => "The AfriChild Center Makerere", // set false to total remove
            'titleBefore' => true, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description' => 'The AfriChild Centre exists to generate research that informs policy and practice for the wellbeing of children.', // set false to total remove
            'separator' => ' - ',
            'keywords'  => ['AfriChild Center', 'Makerere University', 'African Child', 'Uganda', 'Child Research', 'Children\'s Research', ''],
            'canonical' => 'current', // Set to null or 'full' to use Url::full(), set to ''current'' to use Url::'current'(), set false to total remove
            'robots'      => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags'        => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'     => 'The AfriChild Centre - The AfriChild Centre exists to generate research that informs policy and practice for the wellbeing of children.', // set false to total remove
            'description' => 'Vision | We strive for an Africa where children\'s wellbeing is realized for sustainable development.', // set false to total remove
            'url' => null, // Set null for using Url::'current'(), set false to total remove
            'type' => false,
            'site_name' => true,
            'images'    => [public_path('img/logo.png')],
        ],
    ],
    'twitter'   => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card' => 'summary',
            'site' => '@AfriChildCenter',
        ],
    ],
    'json-ld'   => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'  => 'The AfriChild Centre - The AfriChild Centre exists to generate research that informs policy and practice for the wellbeing of children.', // set false to total remove
            'description' => 'We strive for an Africa where children\'s wellbeing is realized for sustainable development.', // set false to total remove
            'url' => 'current', // Set to null or 'full' to use Url::full(), set to ''current'' to use Url::'current'(), set false to total remove
            'type' => 'WebPage',
            'images' => [public_path('img/logo.png')],
        ],
    ],
];
