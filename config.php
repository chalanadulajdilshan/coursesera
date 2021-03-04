<?php
 error_reporting(0);
 @ini_set('display_errors', 0);

// root URL
$host = $_SERVER['HTTP_HOST'];
define('HOST', $host);
define('DEVELOPMENT_MODE', 0);

define('URL', 'http://' . $host . '/coursesera/');
define('MAIN_PUBLIC_URL', 'http://' . $host . '/coursesera/public/');
define('URL_Admin', 'http://' . $host . 'coursesera/');

// Database
define('DB_TYPE', "mysql");
define('DB_NAME', "coursesera");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_HOST', "localhost");

//server
//define('URL', 'http://' . $host . '/');
//define('MAIN_PUBLIC_URL', 'http://' . $host . '/public/');
//define('URL_Admin', 'https://' . $host . '/');
//// Database
//define('DB_TYPE', "mysql");
//define('DB_NAME', "vtalk_coursesera");
//define('DB_USER', "vtalk_soslp");
//define('DB_PASS', "!!6zHYVb%Eb");
//define('DB_HOST', "localhost");

define('MHOST', "smtp-mail.outlook.com");
define('MUSERNAME', 'NoReply@vtasl.gov.lk');
define('MPASSWORD', 'r$f#_zU$dHK4r2H+');
define('MTITLE', "Skills Online - Sri Lanka");
define('MPORT', 587);


define('AUTH_PREFIX', 'vtapms');
define('MAX_TRY', 3);
//SALT
define('SALT', 'This_makes_texting_a_quick_and_easy_way_to_communicate_with_friends');
