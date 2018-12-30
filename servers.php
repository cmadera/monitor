<?php
// Aplicação de monitoramento de servidores
// Criada por Carlos Madera - Michelin (17/06/2016)

/*
$servers = array();

array_push($servers, array('nome' => "WWW",             'url' => "www.bigbank.com.br",          'agent' => "/monitor.php", 'protocol' => "http"));
array_push($servers, array('nome' => "APP",				'url' => "app.bigbank.com.br", 	    	'agent' => "/monitor.txt", 'protocol' => "https"));
array_push($servers, array('nome' => "MQTT",			'url' => "mqtt.bigbank.com.br", 	    'agent' => "/monitor.php", 'protocol' => "http"));
array_push($servers, array('nome' => "COS701",			'url' => "cos701.bigbank.com.br",  		'agent' => "/monitor.php", 'protocol' => "http"));
array_push($servers, array('nome' => "COS702",			'url' => "cos702.bigbank.com.br",   	'agent' => "/monitor.php", 'protocol' => "http"));
array_push($servers, array('nome' => "COS703",			'url' => "cos703.bigbank.com.br",  		'agent' => "/monitor.php", 'protocol' => "http"));
array_push($servers, array('nome' => "COS704",			'url' => "cos704.bigbank.com.br",   	'agent' => "/monitor.php", 'protocol' => "http"));
array_push($servers, array('nome' => "Py",				'url' => "py.bigbank.com.br",   		'agent' => "/monitor.php", 'protocol' => "http"));
array_push($servers, array('nome' => "DEV",				'url' => "dev.bigbank.com.br",  		'agent' => "/monitor.php", 'protocol' => "http"));
array_push($servers, array('nome' => "eSSe",            'url' => "www.esseregalos.com",         'agent' => "/monitor.php", 'protocol' => "http"));
array_push($servers, array('nome' => "Utopias",         'url' => "utopiasargentinas.com",       'agent' => "/monitor.php", 'protocol' => "http"));

echo json_encode($servers);

*/
echo file_get_contents('https://app.bigbank.com.br/servers.txt');
?>
