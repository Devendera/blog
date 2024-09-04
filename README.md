# Blog Management System

## Overview

This project is a Blog Management System built using Laravel 10. It allows users to register, log in, create, edit, delete, and view blog posts. Users can also add comments to posts. The system ensures that users can only manage their own posts.

## Features

- User Registration and Authentication
- Create, Edit, and Soft Delete Blog Posts
- View a List of Blog Posts
- View Individual Blog Posts with Comments
- Responsive UI with Bootstrap
- Post Image Handling
- Pagination for Posts
- Confirmation Dialog for Deletion

## Installation

### Prerequisites

- PHP 8.1 or higher
- Composer
- Laravel 10.x
- MySQL or other supported database

### Setup

1. **Clone the Repository**

   git clone https://github.com/yourusername/blog-management-system.git
   cd blog-management-system

2. composer install
composer install


3. Environment Configuration

Copy the .env.example file to .env and update the database configuration.


 cp .env.example .env

Edit .env to configure your database connection:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password


4. Generate Application Key
php artisan key:generate

5. Run Migrations

php artisan migrate

6. Create Storage Link
php artisan storage:link

7. Seed the Database (Optional)

php artisan db:seed

8. Start the Development Server

php artisan serve

Usage
Authentication
Register: Go to /register to create a new account.
Login: Go to /login to sign in with your account.
Logout: Click on the logout button available in the navigation bar.
Post Management
Create Post: After logging in, go to /posts/create to create a new post.
Edit Post: From the list of posts, click on the "Edit" button next to a post to modify it.
Delete Post: Click on the "Delete" button next to a post to remove it. A confirmation dialog will appear before deletion.
Viewing Posts
View All Posts: Navigate to /posts to see a paginated list of posts created by the logged-in user.
View Post Details: Click on "Read More" to see the full content of a post and its comments.
Customization
Styles
You can customize the styles in resources/css/app.css.
Routes
All routes are defined in routes/web.php.
Controllers
The logic for handling requests is located in the app/Http/Controllers/PostController.php.
Models
Models for User, Post, and Comment are located in app/Models.
Testing
Register a New User
Create a Post
Edit the Post
Delete the Post
Check Pagination and Comments
Ensure that you are only able to edit or delete posts that you have created.

License
This project is licensed under the MIT License. See the LICENSE file for details.

Acknowledgements
Laravel 10.x for the framework
Bootstrap 5 for styling

