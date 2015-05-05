<?php // app/init.php

// Loading conf
require_once 'config/global.php';

// APPLICATION PATHS
set_include_path(
    implode(
        PATH_SEPARATOR,
        array(
            LIB_PATH, // c:\wamp\www\blog\vendor
            SRC_PATH, // c:\wamp\www\blog\app\src
            TPL_PATH, // c:\wamp\www\blog\app\tpl
        )
    )
);

// Initialize autoloader
require_once 'Ipf/Loader/ClassLoader.php';
$loader = new \Ipf\Loader\ClassLoader('Ipf', LIB_PATH);

// Initialisation de la base de données
$connection = new \Ipf\Db\Connection\Pdo(DB_DSN, DB_USERNAME, DB_PASSWORD);
