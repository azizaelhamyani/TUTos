# Namespaces PHP

## Objectif

Organiser le code en espaces de noms distincts et importer une classe avec
`use`. L'exemple représente une catégorie et son formatage pour affichage.
Il est autonome et n'est pas branché sur Laravel.

## Fichiers

- `exemple.php` : deux classes réparties dans des espaces de noms et un point
  d'entrée qui les utilise.

## Parcours du code

1. `declare(strict_types=1)` active la vérification stricte des types scalaires
   pour ce fichier.
2. Le bloc `namespace Lab\Domain` place `Category` dans l'espace de noms du
   domaine. Son constructeur reçoit un identifiant et un nom.
3. Le bloc `namespace Lab\Presentation` contient `CategoryLabel`. La directive
   `use Lab\Domain\Category` importe le nom complet de la classe pour que le
   type du paramètre et `format()` désignent cette catégorie.
4. Le bloc `namespace { ... }` est le point d'entrée global. Ses deux
   instructions `use` importent les classes; le code crée une catégorie et
   affiche la chaîne formatée.

## Exécution

Depuis `Laravel\afficherCategorie` :

```powershell
php exemples\namespaces\exemple.php
```

Résultat attendu :

```text
#7 - Boissons
```

## Lien avec l'architecture du projet

L'application déclare l'espace de noms `App\` et le relie au dossier `app/`
avec l'autoload PSR-4 de Composer. Ici, les blocs de namespace dans un seul
fichier servent à montrer le principe sans nécessiter Composer ni changer
l'autoload du projet.

## Limite et exercice

Cet exemple n'illustre pas le chargement automatique de classes depuis
plusieurs fichiers. Pour aller plus loin, séparez les classes en fichiers
conformes à PSR-4 puis comparez leur chargement à celui des classes `App\`
dans l'application Laravel.
