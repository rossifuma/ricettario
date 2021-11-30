<?php

$ricerca = "";


$cursor = $collection->find(
    // 'nome' => $ricerca
);
$array = array();
foreach ($cursor as $restaurant) {
    // $json = MongoDB\BSON\toJSON(MongoDB\BSON\fromPHP($restaurant));
    array_push($array, $restaurant);
};

?>

<script>
let prova = <?php echo json_encode($array)?>;

for (let i = 0; i<prova.length; i++){
    console.log(prova[i].nome);
}
</script>