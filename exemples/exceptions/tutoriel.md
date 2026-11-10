# Exceptions PHP

## Objectif

Valider un nom de catégorie et signaler une valeur vide avec une exception
typée. Le point d'entrée intercepte l'erreur et affiche un message au lieu
d'interrompre le script. Cette démonstration autonome n'est pas intégrée à
Laravel.

## Fichiers

- `exemple.php` : exception métier, validation et traitement à la frontière
  du script.

## Parcours du code

1. `InvalidCategoryName` hérite de `\InvalidArgumentException`. Le préfixe
   `\` désigne la classe globale PHP depuis le namespace `Lab\Categories`.
2. `CategoryName::validate()` retire les espaces en bordure avec `trim()`.
   Si la chaîne devient vide, `throw` lève l'exception dédiée; sinon la valeur
   nettoyée est renvoyée.
3. Dans le namespace global, la boucle fournit un nom correct puis une chaîne
   composée d'espaces. Le bloc `try` appelle la validation et affiche le nom
   accepté.
4. Le bloc `catch (InvalidCategoryName $exception)` ne traite que l'erreur
   prévue. Il affiche son message et laisse le script poursuivre la boucle.

## Exécution

Depuis `Laravel\afficherCategorie` :

```powershell
php exemples\exceptions\exemple.php
```

Résultat attendu :

```text
Categorie valide : Boissons
Erreur de saisie : Le nom de la categorie est obligatoire.
```

## Lien avec l'architecture du projet

Le projet possède un modèle `App\Models\Category` et une table comportant un
nom. La validation montrée ici est un exemple de règle de domaine; elle n'est
pas appelée par le modèle, une route ou un contrôleur Laravel.

## Limite et exercice

La règle ne vérifie que les noms vides. Essayez d'ajouter une limite de
longueur et une exception distincte, puis décidez où une application Laravel
devrait convertir cette erreur en message de validation destiné à
l'utilisateur.
