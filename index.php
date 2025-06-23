<?php

while (true) {
    $input = readline("Entrez un mot (ou 'exit' pour quitter) : ");

    if (empty($input)) {
        echo "Vous n'avez rien entré\n";
        continue;
    }

    if ($input === "exit") {
        echo "Au revoir!\n";
        break;
    }

    if ($input === strrev($input)) {
        echo "Bien joué";
    } else {
        echo "$input\n";
    }
}
