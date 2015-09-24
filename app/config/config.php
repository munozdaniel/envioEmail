<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '',
        'dbname'      => 'test',
        'charset'     => 'utf8',
    ),
    'application' => array(
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/app/models/',
        'migrationsDir'  => APP_PATH . '/app/migrations/',
        'viewsDir'       => APP_PATH . '/app/views/',
        'pluginsDir'     => APP_PATH . '/app/plugins/',
        'librariesDir'     => APP_PATH . '/app/libraries/',
        'cacheDir'       => APP_PATH . '/app/cache/',
        'baseUri'        => '/envioEmail/',
    ),
    'mail' => array(
        'host'     => 'mail.imps.org.ar',
        'username'        => 'dmunioz@imps.org.ar',
        'password'    => 'dan$%&--iel',
        'security'    => '',
        'port'      => '26',
        'charset'     => 'UTF-8',
        'email'     => 'dmunioz@imps.org.ar',
        'name'     => 'dmunioz@imps.org.ar',
    )
));
