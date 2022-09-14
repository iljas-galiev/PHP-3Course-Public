<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$guzzle = new Client(["base_uri"=>"http://httpbin.org", "timeout"=>2.0]);

$response = $guzzle->post("/post", ["form_params"=>["data"=>"test 42"]]);
$data = json_decode(json_encode($response), true);
$code = $response->getStatusCode(); // 200
$reason = $response->getReasonPhrase(); // OK
echo $code, " ", $reason;
echo $response->getBody()."\r\n";






?>
<?php
/*
* wttr.in/Kazan ???
* httpbin.org/ip
* wtfismyip.com/json
* numbersapi.com
*/