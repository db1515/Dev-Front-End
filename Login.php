<!DOCTYPE html>
<html>
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

$user = sha1($_POST['email']);
$passwd = sha1($_POST['password']);

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");

$request = array();
$request['type'] = "login";
$request['email'] = "$user";
$request['password'] = "$passwd";

$response = $client->send_request($request);

if ($response['returnCode'] == 0)
{
	header('Location: Display.html');

}
else
{
        print_r($response);
 	     echo "\n\n";
}
?>
</html>
