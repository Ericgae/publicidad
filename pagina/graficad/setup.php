<?php
require_once('lib/idiorm.php');
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'llantera';
ORM::configure("mysql:host=$host;dbname=$database");
ORM::configure('username', $user);
ORM::configure('password', $pass);
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
