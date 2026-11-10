# Exemples PHP : namespaces, exceptions et traits

Ces exemples autonomes reprennent le domaine des catégories de l'application
`afficherCategorie`. Ils illustrent des notions PHP sans modifier ni démarrer
l'application Laravel.

## Prérequis et démarrage

PHP 8.1 ou supérieur est nécessaire. Depuis le répertoire
`Laravel\afficherCategorie`, exécutez chaque exemple avec PHP :

```powershell
php exemples\namespaces\exemple.php
php exemples\exceptions\exemple.php
php exemples\traits\exemple.php
```

| Notion | Exemple | Tutoriel |
|---|---|---|
| Namespaces | [namespaces/exemple.php](namespaces/exemple.php) | [namespaces/tutoriel.md](namespaces/tutoriel.md) |
| Exceptions | [exceptions/exemple.php](exceptions/exemple.php) | [exceptions/tutoriel.md](exceptions/tutoriel.md) |
| Traits | [traits/exemple.php](traits/exemple.php) | [traits/tutoriel.md](traits/tutoriel.md) |

Dans l'application réelle, les classes de l'espace de noms `App\` sont
chargées par Composer grâce à la correspondance PSR-4 définie dans
`composer.json`. Les fichiers présentés ici utilisent des espaces de noms
pour l'apprentissage, mais restent des scripts autonomes : ils ne font pas
partie de l'autoload Laravel.
