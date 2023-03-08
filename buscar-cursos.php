<?php

require 'vendor/autoload.php';


use Projeto_Composer\Buscador_Cursos_Alura\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    // echo "<p>$curso" . PHP_EOL."</p>";
    echo exibeMensagem($curso);
}

