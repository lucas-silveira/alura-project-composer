<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();


$response = $client->request('GET', 'https://www.alura.com.br/cursos-online-infraestrutura/cloud-computing');

$html = (string) $response->getBody(); // Esse método retorna um stream por padrão.
$crawler = new Crawler($html);

$courses = $crawler->filter('.card-curso__nome');

foreach ($courses as $course) {
  print($course->textContent . PHP_EOL);
}