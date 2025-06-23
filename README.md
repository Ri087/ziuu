# Application PHP Simple - Version Optimisée

## Description

Cette application PHP interactive simple permet de saisir des mots et détecte automatiquement les palindromes.

## Fonctionnalités

### 1. Saisie de mots

- Interface simple en ligne de commande
- Saisie continue jusqu'à "exit"
- Gestion des entrées vides

### 2. Détection de palindromes

- Détection automatique des mots palindromes
- Affichage spécial pour les palindromes détectés
- **clg** : Klingon

### 3. Jeu de palindromes

- L'utilisateur peut entrer des mots
- Si le mot est un palindrome (se lit de la même façon dans les deux sens), l'application affiche "Bien dit"
- Pour quitter, tapez "exit"

## Structure du projet

```
cours/
├── index.php          # Fichier principal de l'application
├── README.me          # Documentation du projet
└── local/             # Dossier des traductions
    ├── fr.php         # Traductions françaises
    ├── en.php         # Traductions anglaises
    ├── es.php         # Traductions espagnoles
    ├── de.php         # Traductions allemandes
    ├── it.php         # Traductions italiennes
    └── clg.php        # Traductions klingon
```

## Utilisation

### Prérequis

- PHP 7.0 ou supérieur
- Terminal/ligne de commande

### Lancement de l'application

1. Ouvrez un terminal
2. Naviguez vers le dossier du projet
3. Exécutez la commande :

```bash
php index.php
```

### Exemple d'utilisation

```
Bonjour
Choose language fr, en, es, de, it, clg: fr
Entrer mot : radar
Bien dit
Entrer mot : bonjour
Entrer mot : exit
Bonne journée
```

## Code principal (index.php)

Le fichier principal contient la logique suivante :

1. **Initialisation** : Charge les traductions françaises par défaut
2. **Détection de l'heure** : Affiche la salutation appropriée selon l'heure
3. **Sélection de langue** : Demande à l'utilisateur de choisir une langue
4. **Boucle interactive** :
   - Demande à l'utilisateur d'entrer un mot
   - Vérifie si c'est un palindrome
   - Continue jusqu'à ce que l'utilisateur tape "exit"
5. **Message de sortie** : Affiche un message d'au revoir approprié

## Fonctions clés

### Détection de palindrome

```php
if ($a === strrev($a)) {
    echo $translations['well_said'] . "\n";
}
```

### Gestion du temps

```php
if (date("H") < 12) {
    $word = $translations['morning'] . "\n";
} elseif (date("H") < 18) {
    $word = $translations['afternoon'] . "\n";
} else {
    $word = $translations['evening'] . "\n";
}
```

## Fichiers de traduction

Chaque fichier de traduction dans le dossier `local/` contient un tableau associatif avec les clés suivantes :

- `morning` : Salutation du matin
- `afternoon` : Salutation de l'après-midi
- `evening` : Salutation du soir
- `good_day` : Message d'au revoir
- `enter_word` : Invite à entrer un mot
- `nothing_entered` : Message d'erreur si rien n'est entré
- `well_said` : Message de félicitation pour un palindrome

## Exemples de palindromes

- **Français** : radar, kayak, été, noon
- **Anglais** : level, madam, racecar, civic
- **Espagnol** : oso, ama, ara
- **Allemand** : otto, anna, ehe
- **Italien** : oso, ama, ara

## Auteur

Projet créé pour l'apprentissage du PHP et de l'internationalisation.

## Notes techniques

- Utilise `date_default_timezone_set('UTC')` pour la gestion du temps
- Utilise `readline()` pour l'interaction utilisateur
- Utilise `require_once` et `require` pour charger les traductions
- Gestion d'erreur si l'utilisateur n'entre rien
