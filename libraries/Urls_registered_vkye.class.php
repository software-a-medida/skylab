<?php

defined('_EXEC') or die;

class Urls_registered_vkye
{
    static public $home_page_default = '/';

    static public function urls()
    {
        return [
            '/' => [
                'controller' => 'Index',
                'method' => 'index'
            ],
            '/vcard' => [
                'controller' => 'Index',
                'method' => 'vcard'
            ],
            '/aviso-de-privacidad' => [
                'controller' => 'Index',
                'method' => 'privacy_notice'
            ]
        ];
    }
}
