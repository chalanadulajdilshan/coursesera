<?php
require 'import.php';

import('config');
import('libs/Bootstrap');
import('libs/Controller');
import('libs/User_Auth_Controller');
import('libs/Database');
import('libs/Model');
import('libs/User_Auth_Model');
import('libs/View');

// ==========================
import('./libs/Validation');
import('./libs/Upload');
import('./libs/Helper');
import('./libs/Hash');
import('./libs/Session');
import('./libs/Auth');
// ===========================

$bootstrap = new Bootstrap();
$bootstrap->init();
