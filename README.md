## Enhanced Blog Application with Authentication and Admin Panel
Project Overview
This project builds upon the basic blog application by incorporating user authentication using Laravel UI with Bootstrap, along with an admin panel for managing blog posts and users. The main goal was to enhance the functionality of the blog by adding role-based access control and providing administrators with the tools to manage the content and users effectively.

## Features Implemented
User Authentication:

Installed and set up Laravel UI to handle user authentication.
Integrated Bootstrap for styling the authentication pages.
Implemented login, registration, and password reset functionalities.
Admin Panel:

Created a dedicated admin panel with routes protected by middleware to ensure only admins have access.
Designed the admin panel using Bootstrap's dashboard template.
Implemented CRUD operations for both users and blog posts through the admin panel.
Role-Based Access Control:

Added user roles (admin, author, user) with corresponding permissions.
Updated the registration process to allow the assignment of roles.
Ensured that only admins can manage users, while authors can manage their own posts.

## Database Integration with MongoDB:
Configured MongoDB as the database for the application as per the demonstration in Lecture 4.
Created migrations to handle the new roles and related fields.
Challenges Faced
Middleware Implementation: Setting up the middleware to correctly restrict access to the admin panel required careful handling of role checks to ensure security and functionality.
Role-Based Access Control: Implementing the role-based access control system involved modifying both the user model and the registration process, which required thorough testing to ensure it worked as expected.
MongoDB Integration: Integrating MongoDB with Laravel was initially challenging, but following the lecture guidelines helped streamline the process.
How to Run the Application

## Clone the Repository:
git clone [repository-url]

## Switch to the Feature Branch:
git checkout feature/auth-admin-panel
Install Dependencies:

## composer install
npm install

## Set Up the Environment:
Configure your .env file with the appropriate MongoDB connection details.
Run migrations to set up the database schema:
php artisan migrate
Run the Application:

## php artisan serve
Access the Admin Panel:

## Log in as an admin user to access the admin panel at [your-app-url]/admin.
GitHub Repository
The source code for this project is available in a private GitHub repository. The repository is version-controlled, with commits made after each major step of the implementation.
