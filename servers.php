<?php
// Aplicação de monitoramento de servidores
// Criada por Carlos Madera - Michelin (17/06/2016)

$servers = array();

array_push($servers, array('nome' => "WWW",             'url' => "bigbank.com.br",              'agent' => "/monitor/monitor.php", 'protocol' => "https"));
array_push($servers, array('nome' => "Big",             'url' => "big.bigbank.com.br",          'agent' => "/monitor.php", 'protocol' => "https"));
array_push($servers, array('nome' => "Big2",            'url' => "big2.bigbank.com.br",         'agent' => "/monitor.php", 'protocol' => "http"));
array_push($servers, array('nome' => "Test",            'url' => "test.bigbank.com.br",         'agent' => "/monitor.php", 'protocol' => "https"));
array_push($servers, array('nome' => "Fast",            'url' => "fast.bigbank.com.br",         'agent' => "/monitor.php", 'protocol' => "http"));
//array_push($servers, array('nome' => "Node1",           'url' => "node1.bigbank.com.br",        'agent' => "/monitor.php", 'protocol' => "https"));
//array_push($servers, array('nome' => "Node2",           'url' => "node2.bigbank.com.br",        'agent' => "/monitor.php", 'protocol' => "https"));
//array_push($servers, array('nome' => "Node3",           'url' => "node3.bigbank.com.br",        'agent' => "/monitor.php", 'protocol' => "https"));
//array_push($servers, array('nome' => "Windows",         'url' => "windows.bigbank.com.br",      'agent' => "/monitor.php", 'protocol' => "http"));

echo json_encode($servers);

?>
