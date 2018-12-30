<?php
include_once('Ping.php');

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$server = $_GET["SERVER"];
$url = $_GET["HOST"];
$que = $_GET["DISPLAY"];


$response = array();

try {
    $response = @file_get_contents($url, false, stream_context_create($arrContextOptions));
    if ($response=="") {
        $response = '[{"name":"SERVERNAME","value":"'.$server.'"},{"name":"IP (ping)","value":"'.ping($server).'"}]';
    }
        
}
catch (Exception $e) {
    $response = '[{"name":"#SERVERNAME#","value":"'.$url.'"},{"name":"#ERROR#","value":"'.$e->getMessage().'"}]';
    //echo $e->getMessage();
}

$response = json_decode( $response);

$ports = array();

if ($que=='Network' || $que=="ALL")
	$ports = array(21, 25, 80, 443, 81, 110, 3306, 8080, 8888);
elseif ($que=='Warnings')
	$ports = array(21, 25, 81, 110, 3306, 8080, 8888);

if (count($ports)>0) {
	foreach ($ports as $port)
	{
	    $connection = @fsockopen($server, $port,$errno, $errstr, 0.1);
	
	    if (is_resource($connection))  {
	    	if ($que!='Warnings')
	        	array_push($response, ['name' => 'PORT: '.$port, 'value' => 'OPEN']);
	        else 
	        	array_push($response, ['name' => 'PORT: '.$port, 'value' => 'WARNING']);
	    /*}  else  {
	        array_push($response, ['name' => $port, 'value' => 'OK'.$server]);*/
	    }
	    fclose($connection);
	}
}

if ($que=='Small')
	$response =  json_decode('[{"name":"SERVERNAME","value":"'.$server.'"},{"name":"IP (ping)","value":"'.ping($server).'"}]');
	
echo json_encode($response);

//print (join(" ", file ($_GET["HOST"])));


function ping ($host, $timeout = 1000) {

	$ping = new Ping($host);
    $result = $ping->ping();
    $ip = $ping->getIpAddress();
	
    if ($result) {    
	    return $ip.' ('.$result.')';
    } else {
        return "not found";
    }
}
