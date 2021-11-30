<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php

require '/home/kal/vendor/autoload.php'; // include Composer's autoloader
// $manager = new MongoDB\Driver\Manager('mongodb://192.168.1.50:27017'); //CONNESSIONE AL DB

// $bulk = new MongoDB\Driver\BulkWrite; //creazione di una nuova query 
// $bulk->insert(['x' => 1]); // assegnazione della query 
// $manager->executeBulkWrite('db.collection', $bulk); //esecuzione della query $connessione->executeBulkWrite('db.tabella', queryDaEseguire)

// $filter = ['x' => ['$gt' => 1]]; 
// $options = [
//     'projection' => ['_id' => 0],
//     'sort' => ['x' => -1],
// ];

// $query = new MongoDB\Driver\Query($filter, $options);
// $cursor = $manager->executeQuery('db.collection', $query);

// foreach ($cursor as $document) {
//     var_dump($document);
// }


// $db = 'veronica.ricette';

$connessione = new MongoDB\Driver\Client('mongodb://192.168.1.50:27017');


$db = $connessione->veronica;

$collection = $db->ricette;

$cursor = $collection->find ( array('nome' => 'pasta al forno' ));
echo "sono qui";

foreach ($cursor as $doc) {
    echo $doc['nome'];
}


?>
