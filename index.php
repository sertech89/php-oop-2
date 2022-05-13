<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->

<?php
require __DIR__ . '/figli/prodotto.php';
require __DIR__ . '/figli/cibo.php';
require __DIR__ . '/figli/user.php';

$clienteUno= new Cliente('Sergio','Caio',true,'mastercard',05.2023);
//  $clienteUno -> setSconto($clienteUno -> iscritto);
 echo "<p>"."acquisto:"." ".$clienteUno-> nomeUtente." ".$clienteUno-> cognome."</p>";
 echo "<p>".$clienteUno->getSconto()."</p>";
 echo "<p>".'pagamento con:'." ".$clienteUno-> carta."</p>";
 echo "<p>".'scadenza carta:'." ".$clienteUno-> scadenzaCarta."</p>";

$monge = new Crocchette('crocchette monge','alimentare',50,'pollo e verdure','bio');
$monge -> getScontoVenti($clienteUno -> iscritto);
// $monge -> setPrezzoScontato($monge->prezzo);
echo "<p>".'prodotto:'. $monge -> nome."</p>";
echo "<p>".'genere:'. $monge -> genere."</p>";
echo "<p>".'prezzo:'. $monge -> prezzo."</p>";
echo "<p>".'ingredienti:'. $monge -> ingredienti."</p>";
echo "<p>".'bio/no bio:'.' '. $monge -> tipologia."</p>";
var_dump($monge);


?>