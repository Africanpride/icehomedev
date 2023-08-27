<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => config('app.name', 'Ice Home Development and Construction'), // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'

            'description'  => 'ICE Home Development and Construction is a renowned company that has been at the forefront of the construction industry for the past 47 years. With a rich history and extensive experience, we have established ourselves as a trusted name in the field, providing exceptional general construction, energy, and funding services.', // set false to total remove

            'separator'    => ' - ',
            'keywords'     => ['Ice Home, IceHomeDev, Ice Home Dev, Ice Home Development and Construction, Home development, Construction company, Construction industry, Renowned construction, 47 years of experience, Trusted name in construction, General construction services, Energy services, Funding services, Construction expertise, Established company, Construction history, Expert contractors, Reliable construction, Construction projects, Building development, Construction solutions, Construction leadership, Construction legacy, Experienced builders'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots' => 'all',
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
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
            'title'       => config('app.name', 'Ice Home Development & Construction'), // set false to total remove
            'description'  => 'ICE Home Development and Construction is a renowned company that has been at the forefront of the construction industry for the past 47 years. With a rich history and extensive experience, we have established ourselves as a trusted name in the field, providing exceptional general construction, energy, and funding services.',
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => ['/images/logo.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Over 9000 Thousand!', // set false to total remove
            'description' => 'For those who helped create the Genki Dama', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
