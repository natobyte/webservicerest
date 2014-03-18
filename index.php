<?php 
include_once('Consumidor.php'); 

$objConsumidor = new Consumidor();

// Webservice disponibilizado por terceiro para poder exemplificar como os dados são gerados para serem consumidos.
$url = 'http://www.byiorio.com/php/exemplo2/ClientesRest.php';

// Descomente o comentário baixo para consumir o webservice local.
//$url = 'http://localhost/webservicerest/Produtos.php'; 

$objConsumidor->getRequest($url);
?>
