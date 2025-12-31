# Assignment-Blog
Holiday Web Dev Assignment by Olawore Abdulazeez Oladimeji 24/10MSS075

# Laravel Blog Application
This project is a Laravel-based blog application developed as part of a Web Application Development assignment.  
It includes authentication, blog management, public blog access, and RESTful APIs for mobile applications.

---

## ?? Features

### ?? Authentication
- User registration and login
- Protected admin dashboard
- Logout functionality

### ?? Blog Management (Admin)
- Create blog posts
- Publish or save posts as drafts
- Edit and delete posts
- Only published posts are visible publicly

### ?? Public Blog
- View all published posts
- View single post by slug
- Read comments on posts
- Submit comments on published posts

### ?? Public REST APIs
- Fetch all published posts
- Fetch single post by slug
- Fetch comments for a post
- Submit comments (for published posts only)

---

## ??? Web Application Screenshots

### Login Page


---

### Dashboard (After Login)


---

### Create Blog Post


---

### Public Blog Page


---

### Single Blog Post with Comments

## ?? API Screenshots

### Fetch All Published Posts
**GET** `/api/posts`



---

### Fetch Single Post by Slug
**GET** `/api/posts/{slug}`



---

### Fetch Comments for a Post
**GET** `/api/posts/{slug}/comments`




