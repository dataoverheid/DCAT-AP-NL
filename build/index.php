<?php

require_once 'docs.php';

$mysqli   = new mysqli('localhost', 'root', '', 'dcat');

// Datasets
$datasets = $mysqli->query('SELECT * FROM datasets');
while ($object = $datasets->fetch_object()) {
    $filename = docs::getRstFilenameFromObject('dataset', $object);
    $content  = docs::createRstDatasetPageFromObject($object);
    file_put_contents($filename, $content);
}

// Distributies
$datasets = $mysqli->query('SELECT * FROM distributie');
while ($object = $datasets->fetch_object()) {
    $filename = docs::getRstFilenameFromObject('distributie', $object);
    $content  = docs::createRstDistributiePageFromObject($object);
    file_put_contents($filename, $content);
}
