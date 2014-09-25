<?php
error_reporting(E_ALL);
session_start();
require_once 'core/config.php';
require_once 'core/MVC.php';
require_once 'core/Controller.php';
require_once 'core/DB.php';
require_once 'core/Import.php';
$mvc  = new MVC();
