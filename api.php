<?php

header('Content-Type: application/json; charset=utf-8');

if (isset($_POST["data"])) {
    $response = json_decode($_POST["data"]);
}

$file = "./data/data.json";
$content = file_get_contents($file);
$content = json_decode($content);

$res = json_encode($content);

file_put_contents($file, "");

file_put_contents($file, $res);

echo $res;
