<?php

require __DIR__ . '/vendor/autoload.php';

use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

$Query = new MinecraftQuery();
$Players;
$mustache = new Mustache_Engine([
    'cache' => dirname(__FILE__).'/tmp/cache/mustache',
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/views'),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/views/partials')
]);
$template = $mustache->loadTemplate('home');

try {
    $Query->Connect('play.galactic.ga', 25565);

    $Players = $Query->GetPlayers();
} catch(MinecraftQueryException $e) {
    //echo $e->getMessage();
    $Players = false;
}

$players = [];
if ($Players != false) {
    foreach ($Players as $player) {
        array_push($players, ["name" => $player]);
    }
}

echo $template->render([
    "players" => $players
]);