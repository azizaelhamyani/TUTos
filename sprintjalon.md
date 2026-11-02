---
marp=true
paginate:true
theme:default
style |

section { #03045e; --french-blue: #023e8a; --bright-teal-blue: #0077b6; --blue-green: #0096c7; --turquoise-surf: #00b4d8; --sky-aqua: #48cae4; --frosted-blue: #90e0ef; --frosted-blue-2: #ade8f4; --light-cyan: #caf0f8; background-color: var(--light-cyan); background-image: linear-gradient(90deg, var(--deep-twilight), var(--bright-teal-blue), var(--sky-aqua)); background-size: 100% 14px; background-repeat: no-repeat; color: var(--deep-twilight); font-size: 26px; } section h1 { color: var(--french-blue); } section h2 { color: var(--bright-teal-blue); border-bottom: 3px solid var(--sky-aqua); padding-bottom: 6px; } section strong { color: var(--french-blue); } section a { color: var(--blue-green); } section li::marker { color: var(--turquoise-surf); } section code { background: var(--frosted-blue-2); color: var(--deep-twilight); border-radius: 4px; padding: 0 4px; } section pre { font-size: 18px; background: #f1fbfe; border: 1px solid var(--frosted-blue); border-left: 6px solid var(--blue-green); border-radius: 6px; } section pre code { background: transparent; padding: 0; } table { font-size: 20px; border-collapse: collapse; } th { background: var(--french-blue); color: var(--light-cyan); } td, th { border: 1px solid var(--frosted-blue); padding: 6px 10px; } tr:nth-child(odd) td { background: var(--light-cyan); } tr:nth-child(even) td { background: var(--frosted-blue-2); } section::after { color: var(--bright-teal-blue); font-weight: bold; } section blockquote { background: var(--frosted-blue-2); border-left: 6px solid var(--turquoise-surf); color: var(--deep-twilight); font-size: 20px; padding: 4px 14px; margin: 0 0 14px 0; } section blockquote::before, section blockquote::after { content: none; } /* Title slide */ section.lead { background-color: var(--deep-twilight); background-image: linear-gradient(135deg, var(--deep-twilight) 0%, var(--french-blue) 60%, var(--bright-teal-blue) 100%); background-size: 100% 100%; color: var(--light-cyan); justify-content: center; } section.lead h1 { color: var(--light-cyan); font-size: 52px; } section.lead h2 { color: var(--frosted-blue); border-bottom: 3px solid var(--sky-aqua); }
---
#  Présentation du Sprint / Jalon 3

## 1. Introduction

Bonjour à tous.

Aujourd’hui, je vais vous présenter le travail réalisé pendant le **Sprint / Jalon 3** de notre application de gestion.

L’objectif principal de ce sprint était de développer les fonctionnalités principales de l’application, de mettre en place la communication entre le frontend et le backend, et d’améliorer l’expérience utilisateur.

---

## 2. Objectifs du Sprint

Pendant ce sprint, nous avons travaillé principalement sur :

- la création de l’API PHP ;
- la gestion des données ;
- la communication entre JavaScript et PHP ;
- la validation des données ;
- l’interface avec Tailwind CSS ;
- les Spinners et les Toasts ;
- la gestion des erreurs ;
- et le suivi du travail avec GitHub Issues.

---

## 3. Architecture du projet

Notre application est organisée en plusieurs parties.

Le **frontend** contient l'interface utilisateur et le JavaScript.

Le **backend** contient la logique PHP et la gestion des données.

Nous avons également séparé les responsabilités avec une partie **Entité** et une partie **Gestionnaire**.

Cette organisation permet d'avoir un code plus clair, plus facile à comprendre et plus facile à maintenir.

---

## 4. API PHP

Pour communiquer avec le frontend, nous avons créé une API en PHP.

Nous utilisons différentes méthodes HTTP :

- **GET** pour récupérer les données ;
- **POST** pour ajouter des données ;
- **PUT** pour modifier les données ;
- **DELETE** pour supprimer les données.

Le frontend communique avec cette API grâce à la fonction JavaScript `fetch()`.

---

## 5. Ajout des données

Pour ajouter une donnée, l'utilisateur remplit un formulaire.

JavaScript récupère les informations saisies et les transforme en JSON grâce à `JSON.stringify()`.

Ensuite, les données sont envoyées au backend avec une requête POST.

Le PHP récupère les données avec :

`php://input`

puis les décode avec `json_decode()`.

Enfin, les données sont enregistrées.

---

## 6. Validation des données

Nous avons également mis en place une validation des données.

Avant d'enregistrer une information, nous vérifions que les données reçues sont bien au format attendu.

Par exemple, nous vérifions que `nom` et `description` existent et qu'ils sont bien de type chaîne de caractères.

Cela permet d'éviter les erreurs et d'améliorer la sécurité de notre application.

---

## 7. Interface utilisateur

Pour l'interface, nous avons utilisé **Tailwind CSS**.

Notre objectif était d'avoir une interface :

- simple ;
- responsive ;
- adaptée aux téléphones ;
- adaptée aux tablettes ;
- et adaptée aux ordinateurs.

Nous avons donc utilisé une approche **Mobile First**.

---

## 8. Spinner

Nous avons ajouté un **Spinner** pendant les opérations asynchrones.

Par exemple, lorsqu'une requête est envoyée au serveur, l'utilisateur voit un indicateur de chargement.

Cela permet à l'utilisateur de comprendre que l'application est en train de traiter sa demande.

---

## 9. Toasts

Nous avons également ajouté des **Toasts** pour informer l'utilisateur du résultat de son action.

Par exemple :

**"Matière ajoutée avec succès !"**

ou :

**"Une erreur est survenue."**

Cela rend l'application plus claire et plus agréable à utiliser.

---

## 10. Difficultés rencontrées

Pendant ce sprint, nous avons rencontré plusieurs difficultés.

Nous avons notamment eu des problèmes avec :

- le CORS ;
- les requêtes `fetch()` ;
- le format JSON ;
- les erreurs PHP ;
- et le traitement des données dans JavaScript.

Par exemple, nous avons rencontré l'erreur :

`data.forEach is not a function`

Cette erreur venait du fait que les données reçues n'étaient pas dans le format attendu.

Nous avons donc vérifié les réponses de l'API et amélioré le traitement des erreurs.

---

## 11. GitHub Issues

Pour organiser notre travail, nous avons utilisé **GitHub Issues**.

Chaque fonctionnalité ou tâche était représentée par une Issue.

Nous avons utilisé les statuts :

- **Bloquée**
- **En cours**
- **Terminée**

Cela nous a permis de suivre l'avancement du projet et de mieux organiser le travail du sprint.

---

## 12. Résultats du Sprint

À la fin de ce sprint, nous avons réussi à mettre en place :

- ✅ une API PHP ;
- ✅ la communication frontend/backend ;
- ✅ l'ajout et l'affichage des données ;
- ✅ la validation des données ;
- ✅ une interface responsive avec Tailwind ;
- ✅ les Spinners ;
- ✅ les Toasts ;
- ✅ la gestion des erreurs ;
- ✅ le suivi avec GitHub Issues.

---

## 13. Ce que nous avons appris

Ce sprint nous a permis d'améliorer nos compétences en :

**PHP**,  
**JavaScript**,  
**API**,  
**JSON**,  
**Fetch**,  
**Tailwind CSS**,  
**Git et GitHub**,  
et surtout en **debugging**.

Nous avons également appris l'importance de séparer les responsabilités dans une application.

---

## 14. Prochaines étapes

Pour la suite du projet, nous pouvons améliorer encore l'application avec :

- l'authentification ;
- une base de données MySQL ;
- une meilleure gestion des utilisateurs ;
- davantage de validations ;
- des tests ;
- et des améliorations de l'interface utilisateur.

---

# Conclusion

Pour conclure, ce Sprint 3 nous a permis de passer d'une simple interface à une application qui communique réellement avec un backend PHP.

Nous avons également travaillé sur l'expérience utilisateur avec les Spinners, les Toasts et la gestion des erreurs.

**Merci pour votre attention.**

## Des questions ?