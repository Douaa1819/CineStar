# 🎥 CinéStar - Revolutionizing Cinema Booking Experience 🎥

## Introduction

**CinéStar** is an innovative web platform designed to provide an exceptional cinema experience by merging the passion for films with cutting-edge technology. Built using Laravel, PHP, and SQL, this platform offers users a seamless way to explore and book their favorite movies, while administrators can efficiently manage the entire system.

This project was completed in **8 days**, meeting the deadline of **28/02/2024**.

## Table of Contents
- [Features](#features)
  - [For Users](#for-users)
  - [For Administrators](#for-administrators)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

### ++ FOR OUR USERS ++
- 🔒 **Simplified Registration**: Choose your role as either a Member or Administrator. A secure authentication system awaits you.
- 🌟 **Easy Login**: Use Google or Facebook for quick access via Laravel Socialite.
- 🎥 **Explore Cinema**: Search movies by title, genre, or actor, and easily view schedules and availability.
- 🎟️ **Ticket Booking**: Select your seat from an interactive hall map.
- 📧 **E-Ticketing**: Receive and print your ticket directly from your email.

### ++ FOR OUR ADMINISTRATORS ++
- 🚀 **Optimized Management**: Control reservations and inform users about any changes.
- 🛡️ **Data Integrity**: Validate user inputs with specific queries.
- 💼 **Film Catalogue**: Add, edit, or delete movies in the database.
- 🔄 **Improved Performance**: Frequently accessed data is cached for better responsiveness.
- 🌐 **Easy Development & Deployment**: Use Laravel Sail for local development and simple deployment.
- 📝 **SEO-Friendly URLs**: Automatically generate slugs for accessible links.
- 📈 **Access Control**: Create custom middleware for role-based access and ensure quality with unit tests.
- 📊 **Analytics & Strategy**: Track cinema performance and analyze popular movies among viewers.

## Tech Stack

The following technologies were used in the development of **CinéStar**:
- **Backend**: Laravel, PHP, SQL
- **Frontend**: Blade, HTML, CSS, JavaScript
- **Authentication**: Laravel Socialite (Google, Facebook)
- **Database**: MySQL
- **Caching**: Redis
- **Testing**: PHPUnit
- **Deployment**: Laravel Sail, Docker

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository**:
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


<img width="484" alt="image" src="https://github.com/user-attachments/assets/c121b700-7338-4eab-a608-5035ae3268f3">



<img width="691" alt="image" src="https://github.com/user-attachments/assets/3336209b-d3b5-41b2-b50f-edfddecd7183">

<img width="670" alt="image" src="https://github.com/user-attachments/assets/e297e3a5-9059-4171-8343-a27b623abd7b">
<img width="691" alt="image" src="https://github.com/user-attachments/assets/7c487315-b3a1-4a75-b034-68a84f812c83">



 For more details, check the presentation:
# Project Presentation: 
https://www.canva.com/design/DAFyF27394c/xldVGvE6ciZtzF5-jtZL6w/edit
