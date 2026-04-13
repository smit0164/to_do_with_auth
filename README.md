<p align="center">
  <img src="https://cdn-icons-png.flaticon.com/512/906/906334.png" width="120" alt="Todo App Logo">
</p>

<h1 align="center">Todo App with Authentication</h1>

<p align="center">
  A Laravel-based Todo Management Application with User Authentication and Personal Task Management
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12-red" alt="Laravel Version">
  <img src="https://img.shields.io/badge/PHP-8%2B-blue" alt="PHP Version">
  <img src="https://img.shields.io/badge/License-MIT-green" alt="License">
</p>

---

## About Project

This is a full-stack Todo Management Application built with **Laravel** that allows authenticated users to manage their own todo tasks securely.

Each user can:

* Register / Login to their account
* Create personal todo tasks
* Edit existing todos
* Delete todos with confirmation modal
* Update task status (Pending / Completed)
* View only their own todos

---

## Features

* Authentication System
* Protected Routes
* User-specific Todo Management
* Todo CRUD Operations
* Modal-based Edit/Delete
* Form Validation
* Responsive Tailwind CSS UI

---

## Tech Stack

* **Backend:** Laravel
* **Frontend:** Blade + Tailwind CSS
* **Database:** MySQL
* **JavaScript:** jQuery

---

## Screenshots

### Login Page

<img width="1909" height="833" alt="image" src="https://github.com/user-attachments/assets/a02dae13-ec4f-45da-8a6c-357f6edba424" />


### Register Page

<img width="1157" height="862" alt="image" src="https://github.com/user-attachments/assets/4e4fbe76-f557-4129-8ef6-fd9ee603613b" />


### Todo Dashboard
<img width="1533" height="875" alt="image" src="https://github.com/user-attachments/assets/9a3a9db6-a2df-4a9a-b48f-ded6aeda5226" />


### Edit Modal

<img width="1674" height="877" alt="image" src="https://github.com/user-attachments/assets/212369d2-e2e6-48ae-9074-c62d9abeb0c0" />
<img width="1440" height="853" alt="image" src="https://github.com/user-attachments/assets/d76a0c99-af8f-4ff8-a04e-1d02a1491388" />


---

## Installation Guide

### Clone Repository

```bash
git clone https://github.com/smit0164/to_do_with_auth.git
cd to_do_with_auth
```

### Install Dependencies

```bash
composer install
```

### Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

### Configure Database

Update your `.env` file:

```env
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### Run Migrations

```bash
php artisan migrate
```

### Start Server

```bash
php artisan serve
```

Visit:

```text
http://127.0.0.1:8000
```

---

## Project Structure Highlights

* One-to-Many Relationship between User and Todos
* Secure Authorization for Todo Ownership
* Dynamic Edit/Delete Modals
* Clean Blade Component Structure

---

## Future Enhancements

* AJAX CRUD Operations
* Search / Filter Todos
* Pagination
* Drag & Drop Sorting
* Dark Mode Support

---

## Author

**Smit Patel**

* GitHub: https://github.com/smit0164

---

## License

This project is open-sourced software licensed under the MIT license.
