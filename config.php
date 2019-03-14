<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/loja/");
	$config['dbname'] = 'nova_loja';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://projects.crddeveloper.com/loja/");
	$config['dbname'] = 'crddev71_loja';
	$config['host'] = 'http://projects.crddeveloper.com/loja/';
	$config['dbuser'] = 'crddev71_admin';
	$config['dbpass'] = 'ba0896@P';
}

$config['default_lang'] = 'pt-br';
$config['cep_origin'] = '72240803';

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>