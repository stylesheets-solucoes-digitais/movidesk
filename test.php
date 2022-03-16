<?php

use Stylesheets\Movidesk\Request;

require __DIR__ . '/vendor/autoload.php';

try {
    $token = "b8429a4c-b87b-4f55-aa8c-cd8a185a332d";
    $persons = new Request("persons", $token);
    $response = $persons->get();
    echo $response;
} catch (\Throwable $th) {
    echo $th->getMessage();
}
