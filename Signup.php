<!DOCTYPE html>
<html>
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

$firstname = sha1($_POST['firstname']);
$lastname= sha1($_POST['lastname']);
$email= sha1($_POST['email']);
$password= sha1($_POST['password']);

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");

$request = array();
$request['type'] = "register";
$request['password'] = "$password";
$request['firstname'] = "$firstname";
$request['lastname'] = "$lastname";
$request['email'] = "$email";

$response = $client->send_request($request);

if ($response['returnCode'] == 1)
{
        header('Location: Login.html');

}
else
{
        print_r($response);
             echo "\n\n";
}
?>
</html>
