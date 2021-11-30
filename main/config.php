<?php 


//  CONNESSIONE AL DB 


require('../vendor/autoload.php');
$client = new MongoDB\Client('mongodb://localhost:27017');
$db = $client->veronica;
$collection = $db->ricette;

?>