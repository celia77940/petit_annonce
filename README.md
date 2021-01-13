# Projet Petites Annonces

# Temps : 15 jours

## Technologies 👨‍💻 👩‍💻

- UML
- MVC
- MLD
- HTML/CSS
- PHP
- POO 
- MVC 
- ALTO ROUTEUR
- REECRITURES D'URL
- SERVEUR WEB LOCAL
- IDE
- PHPMYADMIN 
- MYSQL 
- GIT
- COMPOSER

## Outil web 📚

- https://getbootstrap.com/
- https://fonts.google.com/

## Référence web 📚 
- https://www.paruvendu.fr/a/voiture-occasion/peugeot/3008/
- https://www.lesparticuliers.fr/Immobilier/Echange-Appartement-Maison/

## Ressources 📚

- Pierre giraud PHP/MYSQL
- https://sql.sh/
- https://www.php.net/
-	Installer composer sous windows
-	composer guide : Ajouter une dépendance
-	composer Autoload  PSR-4
-	Exemple d'une structure des dossiers en mvc
-	.gitignore exemple
-	Altorouter
-	Altorouter exemple mapping
-	MJML
-	MJML exemple de base
-	MJML-php
-	MPDF


## Description du projet 📄

- Réaliser un site de petites annonces. Qui permet de créer une annonce et permettre d'ajouter une annonce avec une simple adresse courriel
- Quand le client ajoutera une annonce il recevra un mail qui lui permettra de valider son annoncé, sur ce mail se trouvera un lien pour la modifier.
- Quand l'annonce sera validée il recevra un mail de confirmation avec lien de suppression.
- Quand l'annonce est validée, l'annonce se mettra dans la base de données et va se générer sur la page d'accueil.

 ### !!IMPORTANT!! 
 
 - La page d'accueil doit lister les 10 premières annonces du site et permettre d'afficher les suivantes. 
 - Lorsque l'on clique sur une annonce afin de la visualiser plus précisément, elle doit afficher un lien permettant de la télécharger en PDF. 
 - Mettre en place des messages lors de la confirmation et la suppression. 
 - Une image par défaut sera générée si l'utilisateur ne met pas de photo.
 
### Structuration

Une page accueil avec :

- Les 10 premières annonces (affichera une image par défaut si l'utilisateur ne met pas de photo).
- Button pour ajouter un produit.
- Un modulo qui apparaîtra l'annonce en plus grand avec un button pour générer un PDF de l'annonce.

Une page formulaire ajouter : 

- Permets à l'utilisateur de remplir les champs pour son annonce 
- Button Ajouter

Une page formulaire modifier :

- Permets à l'utilisateur de modifier les champs qu'il avait remplis.
- Button Modifier

Une page message supression :

- Message d'alerte pour demander s'il est sur de vouloir supprimer l'annonce.

## En plus ➕ 

- Tâche cron qui supprime les annonces qui sont en attente de publication à n+2 jours de la date de création. Envoyez un courriel à la personne de la suppression de son annonce en attente
- Tâche cron qui supprime les annonces qui sont publiées à n+15 jours de la date de création. Envoyez un mail à la personne de la suppression de son annonce.
- Créer un infinite-scroll pour la pagination des annonces.

## Tache à réaliser 💪

-	[x] Comprendre le projet
-	[x] Réaliser un benchmark
-	[x] Réaliser un diagramme de cas d'utilisation
-	[x] Réaliser le readme
-	[x] Réaliser la maquette du site
-	[ ] Comprendre les technologies que l'on a besoin pour le projet
-	[x] Concevoir le MCD
-	[ ] Concevoir le MLD
-	[ ] Concevoir le modèle physique
-   [ ] Installer le composer Windows 
-	[ ] Installer les dépendances PHP : AltoRouter, mPDF
-	[ ] Définir l'arborescence des dossiers
-	[ ] Mettre en place un gitignore
-	[ ] Avec composer généré l'Autoload (PSR-4)
-	[ ] Définir les routes nécessaire à votre projet
-	[ ] Mettre en place le Router et ajouter vos routes
-	[ ] Créer les contrôleurs et méthodes nécessaire au routes
-	[ ] Créer les controleurs et méthodes nécessaire à vos routes ensemble.

### Front 
-	[ ] Réaliser les wireframe de tout les pages et emails
-	[ ] Réaliser les vues nécessaires pour les différentes pages.
-	[ ] (Réaliser le MJML de vos mails)
-	[ ] Réaliser le code pour générer le PDF
-	[ ] Réaliser le CSS et responsive

### Back  
-	[ ] Créer les modèles
-	[ ] Pour chaque méthodes définir les variables nécessaire à la vue

## Objectifs ⭕️

- Manipuler la programmation orientée objet en PHP
- Consolider les bases du CRUD 
- Consolider/approfondir les bases du langage SQL
- Comprendre les nouvelles techniques que l'on n'a pas abordés auparavant
