#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
$client = new rabbitMQClient("deployRabbitServer.ini","deployServer");
$request = array();
$request['type'] = $argv[1];
$request['package'] = $argv[2];
$request['tier'] = $argv[3];
$request['packageName'] = $argv[4];
$response = $client->send_request($request);
print_r($response);

echo "\n";
?>
