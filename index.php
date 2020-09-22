<?php

require 'vendor/autoload.php';
require 'src/CoursesSearchEngine.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Alura\CoursesSearchEngine\CoursesSearch;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$coursesSearch = new CoursesSearch($client, $crawler);
$courses = $coursesSearch->search('cursos-online-infraestrutura/cloud-computing');

print_r($courses);