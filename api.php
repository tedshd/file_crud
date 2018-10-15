<?php

if ($_POST["data"]) {
    $response = json_decode($_POST["data"]);
}

$file = "./data/data.php";
$content = file_get_contents($file);
$content = json_decode($content);

$res = json_encode($content);

file_put_contents($file, "");

file_put_contents($file, $res);

header('Content-Type: application/json; charset=utf-8');
echo $res;
