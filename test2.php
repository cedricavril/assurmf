<?php
include('includes/head.php');
$params['symbol']="Pegeot";
/* 
Création d'un objet SOAPCLIENT.
L'ouverture du fichier WSDL va permettre d'automatiser l'utilisation du <italique>Web Service</italique>.
Les méthodes définies dans le WSDL seront vues comme des méthodes internes.
*/
$client = new SoapClient("http://www.webservicex.net/stockquote.asmx?wsdl");
/*
Appel de la méthode GETQUOTE du WS STOCKQUOTE vue comme une méthode locale.
*/
$result = $client->GetQuote($params);
$ResultQuote = $result->GetQuoteResult;
echo $ResultQuote;
?>