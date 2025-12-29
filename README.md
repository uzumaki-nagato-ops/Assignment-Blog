# Assignment-Blog
Holiday Web Dev Assignment by Olawore Abdulazeez Oladimeji 24/10MSS075
# Laravel Blog Application

This project is a Laravel-based blog application developed as part of a Web Application Development assignment.  
It includes authentication, blog management, public blog access, and RESTful APIs for mobile applications.

---

## 📌 Features

### 🔐 Authentication
- User registration and login
- Protected admin dashboard
- Logout functionality

### 📝 Blog Management (Admin)
- Create blog posts
- Publish or save posts as drafts
- Edit and delete posts
- Only published posts are visible publicly

### 🌍 Public Blog
- View all published posts
- View single post by slug
- Read comments on posts
- Submit comments on published posts

### 🔌 Public REST APIs
- Fetch all published posts
- Fetch single post by slug
- Fetch comments for a post
- Submit comments (for published posts only)

---

## 🖥️ Web Application Screenshots

### Login Page
![Login Page](public/screenshots/login-page.png)

---

### Dashboard (After Login)
![Dashboard](public/screenshots/dashboard.png)

---

### Create Blog Post
![Create Post](public/screenshots/create-post.png)

---

### Public Blog Page
![Blog Page](public/screenshots/blog-page.png)

---

### Single Blog Post with Comments
![Single Post](public/screenshots/single-post-comments.png)

---

## 🔌 API Screenshots

### Fetch All Published Posts
**GET** `/api/posts`

![API Posts](public/screenshots/api-posts.png)

---

### Fetch Single Post by Slug
**GET** `/api/posts/{slug}`

![API Single Post](public/screenshots/api-single-post.png)

---

### Fetch Comments for a Post
**GET** `/api/posts/{slug}/comments`

![API Comments](public/screenshots/api-comments.png)

---

### Submit Comment
**POST** `/api/posts/{slug}/comments`

Request body:
```json
{
  "author_name": "Test User",
  "author_email": "test@example.com",
  "content": "This is a test comment"
}
