<?php

use \GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'https://cursos.alura.com.br/category/infraestrutura/cloud-computing');

$html = $response->getBody();