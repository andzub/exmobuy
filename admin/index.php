<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../config/config.php';
require_once 'core/CoreAdmin.php';
require_once 'core/BootAdmin.php';
require_once 'core/RouteAdmin.php';

RouteAdmin::run();