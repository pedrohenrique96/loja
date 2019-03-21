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
class Cart extends odel {
	define("BASE_URL", "http://projects.crddeveloper.com/loja/");
	$config['dbname'] = 'crddev71_loja';
	$config['host'] = '162.241.2.184';
	$config['dbuser'] = 'crddev71_pedro';
	$config['dbpass'] = 'ba0896@P';
}

$config['default_lang'] = 'pt-br';
$config['cep_origin'] = '72240803';

$config['pagseguro_seller'] = 'pedrook16@gmail.com';

// Informações do MercadoPago
$config['mp_appid'] = '1173267089584114';
$config['mp_key'] = 'yvnv1p6RfzfSFRH5XPhe5l0zMn6VUKnQ';

// Informações do PayPal
$config['paypal_clientid'] = 'AUo7e6io-_H2AjYEnhs40uJS1V_VocN-QKZH8-A2dCftsWgPKCP-HmqSGaIXfo8IoXlUxCGLJsOoYbnj';
$config['paypal_secret'] = 'EJ23fZs_pBbVgbz5eCTFbzOqfrUfcXfZR6A0uWTRSqpDFm_yrKamxn7Ad6UpTdQTHxN6xo-gJbMi-wWd';

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("NovaLoja")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("NovaLoja")->setRelease("1.0.0");

\PagSeguro\Configuration\Configure::setEnvironment('sandbox');
\PagSeguro\Configuration\Configure::setAccountCredentials('pedrook16@gmail.com', 'A3ABB78C867344328A5626FF9D117FCC');
\PagSeguro\Configuration\Configure::setCharset('UTF-8');
\PagSeguro\Configuration\Configure::setLog(true, 'pagseguro.log');
