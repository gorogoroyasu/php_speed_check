<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
if (False) {
  for ($i = 0; $i < 10; $i++) {
    $response = $client->request('GET', 'https://www.yahoo.co.jp/');
    echo $response->getStatusCode().PHP_EOL;
  }
  /*
  1回目:
  [root@372abd04cc88 php_speed]# time php guzzle.php
  200
  200
  200
  200
  200
  200
  200
  200
  200
  200

  real	0m1.362s
  user	0m0.070s
  sys	0m0.110s

  2回目:
  200
  200
  200
  200
  200
  200
  200
  200
  200
  200

  real	0m1.154s
  user	0m0.040s
  sys	0m0.130s

  3回目:
  200
  200
  200
  200
  200
  200
  200
  200
  200
  200

  real	0m1.207s
  user	0m0.090s
  sys	0m0.100s
  */
} else {
  $promises = [];
  for ($i = 0; $i < 10; $i++) {
    $promises[] = $client->requestAsync('GET', 'https://www.yahoo.co.jp/');
  }
  $responses = \GuzzleHttp\Promise\all($promises)->wait();
  // var_dump($responses);
  foreach($responses as $response) {
    echo $response->getStatusCode().PHP_EOL;
  }
  /*
  1回目:
  200
  200
  200
  200
  200
  200
  200
  200
  200
  200

  real	0m0.799s
  user	0m0.070s
  sys	0m0.170s

  2回目:
  200
  200
  200
  200
  200
  200
  200
  200
  200
  200

  real	0m0.859s
  user	0m0.110s
  sys	0m0.130s

  3回目:
  200
  200
  200
  200
  200
  200
  200
  200
  200
  200

  real	0m0.781s
  user	0m0.110s
  sys	0m0.130s
  */
}
