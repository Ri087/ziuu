<?php

echo "=== TESTS SIMPLES ===\n\n";

// Test 1: Fonction de détection de palindrome
function testPalindrome($word)
{
    $result = ($word === strrev($word));
    echo "Test palindrome pour '$word': " . ($result ? "OUI" : "NON") . "\n";
    return $result;
}

// Test 2: Simulation d'entrées utilisateur
function simulateUserInput($inputs)
{
    echo "\n--- Simulation d'entrées ---\n";
    foreach ($inputs as $input) {
        echo "Entrée simulée: '$input'\n";

        if (empty($input)) {
            echo "-> Vous n'avez rien entré\n";
            continue;
        }

        if ($input === "exit") {
            echo "-> Au revoir!\n";
            break;
        }

        if ($input === strrev($input)) {
            echo "-> Palindrome détecté : '$input'\n";
        } else {
            echo "-> Vous avez écrit : $input\n";
        }
    }
}

echo "1. Tests de palindromes:\n";
testPalindrome("aba");      // Palindrome
testPalindrome("radar");    // Palindrome  
testPalindrome("hello");    // Pas palindrome
testPalindrome("a");        // Palindrome
testPalindrome("racecar");  // Palindrome

echo "\n2. Test de gestion des entrées:\n";
$testInputs = ["hello", "aba", "test", "", "radar", "exit"];
simulateUserInput($testInputs);

echo "\n3. Tests de cas spéciaux:\n";
testPalindrome("");         // Chaîne vide
testPalindrome("A");        // Majuscule
testPalindrome("121");      // Nombres

echo "\n=== TESTS TERMINÉS ===\n";
