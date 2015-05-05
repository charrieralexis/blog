<?php

// Chemin d'application
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(dirname(__DIR__)) . DS);
define('LIB_PATH', ROOT_PATH . 'vendor' . DS);
define('APP_PATH', ROOT_PATH . 'app' . DS);
define('SRC_PATH', APP_PATH . 'src' . DS);
define('TPL_PATH', APP_PATH . 'tpl' . DS);

// Base urls
define('BASE_URL', '/blog/');
define('CSS_PATH', BASE_URL . 'css/');
define('JS_PATH', BASE_URL . 'js/');
define('IMG_PATH', BASE_URL . 'image/');

// Accès de connection à la base de données
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'blog');
define('DB_ENCODING', 'UTF8');
define('DB_DSN', sprintf('mysql:host=%s;dbname=%s;', 
    DB_HOST,
    DB_NAME
));
