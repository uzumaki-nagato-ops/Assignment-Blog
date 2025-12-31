# Assignment-Blog
Holiday Web Dev Assignment by Olawore Abdulazeez Oladimeji 24/10MSS075.   
Department of Mathematics and Computing Sciences.

Thomas Adewumi University.

# Laravel Blog Application
This project is a Laravel-based blog application developed as part of a Web Application Development assignment.  
It includes authentication, blog management, public blog access, and RESTful APIs for mobile applications.



## Features

### Authentication
- User registration and login
- Protected admin dashboard
- Logout functionality

### Blog Management (Admin)
- Create blog posts
- Publish or save posts as drafts
- Edit and delete posts
- Only published posts are visible publicly

### Public Blog
- View all published posts
- View single post by slug
- Read comments on posts
- Submit comments on published posts

### Public REST APIs
- Fetch all published posts
- Fetch single post by slug
- Fetch comments for a post
- Submit comments (for published posts only)

---

## Web Application Screenshots

### Registration Page

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/registration-page.png?raw=true)

### Login Page

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/login-page.png?raw=true)

### Dashboard (After Login)

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/dashboard.png?raw=true)

### Create Blog Post

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/create-post.png?raw=true)

### Public Blog Page

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/blog-page.png?raw=true)

### Single Blog Post with Comments

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/single-post-comments%201.png?raw=true)

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/single-post-comments%202.png?raw=true)


## API Screenshots

### Fetch All Published Posts
**GET** `/api/posts`

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/api-posts.png?raw=true)

### Fetch Single Post by Slug
**GET** `/api/posts/{slug}`

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/api-single-post.png?raw=true)

### Fetch Comments for a Post
**GET** `/api/posts/{slug}/comments`

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/api-comments.png?raw=true)


## Database Screenshots

### Project Database

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/project-database.png?raw=true)

### Users

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/users-database-table.png?raw=true)

### Posts

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/posts-database-table.png?raw=true)

### Comments

![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/comments-database-table.png?raw=true)


## Technologies Used

### PHP(Laravel Framework)
![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/laravel-screenshot.png?raw=true)

### MySql(Laragon)
![image alt](https://github.com/uzumaki-nagato-ops/Assignment-Blog/blob/main/AssignBlog/public/screenshots/mysql-laragon.png?raw=true)


## How to Run the Project
1. Clone the repository
2. Install dependencies
   "composer install"
3. Configure .env file
4. Run migrations
   "php artisan migrate"
5. Start the server
   "php artisan serve"
6. Open in browser
   "http://127.0.0.1:8000"

   











