# Traits PHP

## Objectif

Partager un comportement de formatage de date entre deux classes qui n'ont
pas besoin d'hériter l'une de l'autre. L'exemple utilise une catégorie et un
article fictif; il est autonome et n'ajoute pas de propriétés aux modèles
Laravel du projet.

## Fichiers

- `exemple.php` : le trait partagé, deux classes utilisatrices et leur
  instanciation.

## Parcours du code

1. `HasCreationDate` déclare une propriété nullable `DateTimeImmutable`.
   Elle vaut `null` tant qu'aucune date n'a été fournie.
2. `markAsCreated()` mémorise une date immuable. `creationDateLabel()` utilise
   l'opérateur nullsafe `?->` pour formater la date si elle existe; sinon,
   `??` fournit le libellé de remplacement.
3. `Category` et `Article` incluent le trait avec `use`. Chaque classe reçoit
   ainsi les mêmes méthodes et propriété sans copier leur code.
4. Le point d'entrée crée les deux objets, leur attribue la même date
   déterministe et affiche les deux libellés.

## Exécution

Depuis `Laravel\afficherCategorie` :

```powershell
php exemples\traits\exemple.php
```

Résultat attendu :

```text
Categorie : 2026-11-09
Article : 2026-11-09
```

## Lien avec l'architecture du projet

L'application dispose d'un modèle de catégorie, mais pas de modèle d'article
ni de comportement de date partagé explicite. Ces deux classes sont
uniquement des exemples pour montrer un usage pertinent d'un trait; les dates
de l'application sont actuellement gérées par Eloquent.

## Limite et exercice

Un trait partage du code, mais ne remplace ni une relation « est-un » ni un
service indépendant. Essayez d'afficher le libellé d'un objet avant l'appel à
`markAsCreated()` et observez la valeur de remplacement.
