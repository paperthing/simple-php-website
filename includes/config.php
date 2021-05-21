<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website by Dalbert',
        'site_url' => '',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Blog',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
