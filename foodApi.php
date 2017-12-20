<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }  
  }
}
</script>
</head>
<body>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Product.." title="Type in a name">

<table id="myTable">
 <tbody>
  <tr>
    <th>Recalling-Firm</th>
    <th>Product-Description</th>
    <th>Recall-Number</th>
    <th>Recall-Initiation Date</th>
    <th>Report-Date</th>
    <th>Distribution</th>
    <th>Classification</th>
    <th>Code-Info</th>
    <th>Initial Firm Notification</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Postal-Code</th>
    <th>Country</th>
    <th>Status of Recall</th>
  </tr>
 </tbody>
</table>
</body>
</html>
<?php
$product = $_GET['query'];
echo $product;
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
$request = array();
//$argv[1] = $_POST['search'];
$request['type'] = "apiPull";
$request['foodName'] = $product; 
$response = $client->send_request($request);
//$response = $client->publish($request);

echo "client received response: ".PHP_EOL;
print_r($response);
echo "\n\n";

echo $argv[0]." END".PHP_EOL;
?>
