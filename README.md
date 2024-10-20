# 🎥 CinéStar - Cinema Booking Platform 🎥

## Introduction

**CinéStar** est une plateforme de réservation de cinéma développée avec Laravel, PHP, et SQL, permettant aux utilisateurs d'explorer des films, de réserver des billets et de gérer les réservations. Les administrateurs peuvent contrôler efficacement l'ensemble du système. Ce projet a été complété en **8 jours** par l'équipe.

## Table des Matières
- [Fonctionnalités](#fonctionnalités)
  - [Pour les Utilisateurs](#pour-les-utilisateurs)
  - [Pour les Administrateurs](#pour-les-administrateurs)
- [Technologies](#technologies)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Contribution](#contribution)
- [Collaborateurs](#collaborateurs)
- [Licence](#licence)
- [Captures d'Écran](#captures-décran)

## Fonctionnalités

### Pour les Utilisateurs
- 🔒 **Inscription Sécurisée**: Inscrivez-vous en tant que Membre ou Administrateur.
- 🌟 **Connexion Sociale**: Accédez rapidement avec Google ou Facebook via Laravel Socialite.
- 🎥 **Exploration des Films**: Recherchez des films par titre, genre ou acteur.
- 🎟️ **Sélection des Sièges**: Plan interactif de la salle pour choisir votre place.
- 📧 **E-Billet**: Recevez et imprimez votre billet par email.

### Pour les Administrateurs
- 🚀 **Gestion Efficiente**: Gérer les réservations et gérer la liste des films.
- 🛡️ **Validation des Données**: Validation sécurisée des entrées utilisateurs.
- 🔄 **Optimisation des Performances**: Mise en cache et URL optimisées pour le SEO.
- 📊 **Analytique**: Suivez la performance du cinéma et les films populaires.

## Technologies
- **Backend**: Laravel, PHP, MySQL
- **Frontend**: Blade, HTML, CSS, JavaScript
- **Authentification**: Laravel Socialite (Google, Facebook)
- **Base de données**: MySQL
- **Mise en Cache**: Redis
- **Tests**: PHPUnit

## Installation

Suivez ces étapes pour configurer le projet en local :

1. **Clonez le dépôt** :
   ```bash
   git clone https://github.com/Douaa1819/CineStar.git
   cd CineStar

``

2. **Install dependencies**:  
   Make sure you have Composer installed, then run:
   ```bash
   composer install
````
### Configure the environment:
### Copy the .env.example file to .env and set up your database and other configurations.
cp .env.example .env

### Generate an application key:
php artisan key:generate

### Run database migrations:
php artisan migrate

### Run the application locally:
### You can use Laravel Sail for local development with Docker.
./vendor/bin/sail up

### Usage:

 Once the application is up and running, you can access it in your browser:
 - For user access, visit the homepage and either sign up or log in using Google or Facebook.
 - For administrative access, log in with an Administrator account to manage films and reservations.

### Contributing:
 We welcome contributions to enhance the project! To contribute:

### Fork the repository.

### Create a new branch with your feature or bug fix:
git checkout -b feature-name

### Commit your changes:
git commit -m "Add new feature"

### Push the changes to your fork:
git push origin feature-name

# Open a pull request.

### Collaborators:

### Meet the amazing team behind CinéStar:
 - Douaa Chemnane- Full Stack Developer
 - Hariti Asmmae - Full Stack Developer
 - Ghollam Simo - Full Stack Developer

### License:
This project is licensed under the MIT License. See the LICENSE file for details.

## Screenshots of the Application

Here are some screenshots of the CinéStar platform:


<img width="682" alt="image" src="https://github.com/user-attachments/assets/c4931bc6-2265-4f89-ae3c-bae971f5f8f8">


<img width="677" alt="image" src="https://github.com/user-attachments/assets/c1b80dda-9ec8-4f70-b7d7-99eaf8a65514">



<img width="691" alt="image" src="https://github.com/user-attachments/assets/3336209b-d3b5-41b2-b50f-edfddecd7183">

<img width="670" alt="image" src="https://github.com/user-attachments/assets/e297e3a5-9059-4171-8343-a27b623abd7b">
<img width="691" alt="image" src="https://github.com/user-attachments/assets/7c487315-b3a1-4a75-b034-68a84f812c83">



 For more details, check the presentation:
# Project Presentation: 
https://www.canva.com/design/DAFyF27394c/xldVGvE6ciZtzF5-jtZL6w/edit
