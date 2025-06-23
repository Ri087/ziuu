<?php

$translations = require_once 'local/fr.php';

date_default_timezone_set('UTC');
$today = date("H:i:s");
$word = $translations['morning'];
$a = "";

if (date("H") < 12) {
    $word =  $translations['morning'] . "\n";
} elseif (date("H") < 18) {
    $word = $translations['afternoon'] . "\n";
} else {
    $word = $translations['evening'] . "\n";
}

echo $word;

$lang = readline("choos language fr, en, es, de, it, pt, ru, zh, ja, ko: ");
$translations = require "local/$lang.php";

while ($a !== "exit") {
    $a = readline($translations['enter_word']);

    if (empty($a)) {
        echo $translations['nothing_entered'] . "\n";
        exit;
    }

    if ($a === "exit") {
        if ($word === $translations['morning'] . "\n") {
            echo $translations['good_day'] . "\n";
        } else {
            echo "$word";
        }
        break; // Sortir de la boucle
    }

    if ($a === strrev($a)) {
        echo $translations['well_said'] . "\n";
    }
}
