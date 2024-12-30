<?php

function h(string $s):string
{
    return  htmlspecialchars($s, ENT_QUOTES);
}

$html = [
    "pw" => "password",
    "radio" => "rasio",
    "cheak" => "cheakbox",
    "sele" => "select",
    "tarea" => "textarea",
];

$datum = [];

foreach($html as $name => $type) {
    $datum[$name] = $_POST[$name] ?? "";
}

var_dump($datum);