<?php

// Fonction pour tester la détection de palindrome
function isPalindrome($word)
{
    return $word === strrev($word);
}

function formatOutput($input)
{
    if (empty($input)) {
        return "Vous n'avez rien entré";
    }

    if ($input === "exit") {
        return "Au revoir!";
    }

    if (isPalindrome($input)) {
        return "Bien joué";
    }

    return "$input";
}

// Tests automatiques
function runTests()
{
    $tests = [
        ["input" => "aba", "expected" => "Palindrome détecté : 'aba'"],
        ["input" => "hello", "expected" => "Vous avez écrit : hello"],
        ["input" => "", "expected" => "Vous n'avez rien entré"],
        ["input" => "exit", "expected" => "Au revoir!"],
        ["input" => "radar", "expected" => "Palindrome détecté : 'radar'"],
    ];

    echo "=== TESTS AUTOMATIQUES ===\n";
    $passed = 0;
    $total = count($tests);

    foreach ($tests as $i => $test) {
        $result = formatOutput($test["input"]);
        $success = $result === $test["expected"];

        echo "Test " . ($i + 1) . ": ";
        echo $success ? "✅ PASSÉ" : "❌ ÉCHOUÉ";
        echo " - Entrée: '{$test['input']}'\n";

        if (!$success) {
            echo "   Attendu: {$test['expected']}\n";
            echo "   Obtenu:  $result\n";
        }

        if ($success) $passed++;
    }

    echo "\nRésultat: $passed/$total tests passés\n";
    return $passed === $total;
}


runTests();
