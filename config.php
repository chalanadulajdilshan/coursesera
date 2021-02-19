<?php

// root URL
$host = $_SERVER['HTTP_HOST'];
define('HOST', $host);
define('DEVELOPMENT_MODE', 1);

define('URL', 'http://' . $host . '/coursesera/');
define('MAIN_PUBLIC_URL', 'http://' . $host . '/coursesera/public/');
define('URL_Admin', 'http://' . $host . 'coursesera');

// Database
define('DB_TYPE', "mysql");
define('DB_NAME', "coursera");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_HOST', "localhost");

define('AUTH_PREFIX', 'vtapms');
define('MAX_TRY', 3);
//SALT
define('SALT', 'This_makes_texting_a_quick_and_easy_way_to_communicate_with_friends');