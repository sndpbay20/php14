<?php

// require_once"app/Email.php";
// require_once"app/Person.php";

require_once"vendor/autoload.php";

// $email = new app\Email();
// $person = new app\Person(); 

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

echo $response->getStatusCode(); // 200
echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'