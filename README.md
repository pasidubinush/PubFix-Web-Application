# 🛠️ PubFix – Online Handyman Hiring System

PubFix is a web-based platform designed to connect customers with skilled and reliable handymen. It allows users to find service providers, submit job requests, manage bookings, and share reviews and ratings.

The main goal of PubFix is to make hiring handyman services easier, faster, and more convenient through a centralized online platform.

## 🚀 Key Features

- **User Management** – Manage user accounts and profiles.
- **Worker Management** – Manage handyman profiles and service details.
- **Booking & Job Requests** – Allow customers to request services and manage bookings.
- **Reviews & Ratings** – Enable customers to provide feedback and rate completed services.
- **Role-Based Access** – Support different user roles and permissions.

## 🧰 Technologies Used

| Technology | Purpose |
|---|---|
| PHP | Backend development |
| Laravel | Backend framework |
| PostgreSQL | Database management |
| HTML | Web page structure |
| CSS | Styling |
| JavaScript | Frontend interactivity |
| Git & GitHub | Version control and collaboration |
| DBeaver | Database management |

## 📂 Project Structure

```text
PubFix/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   ├── Models/
│   └── Services/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
│   └── web.php
├── storage/
├── tests/
├── .env.example
└── README.md
```

## ⚙️ Installation & Setup

### 1. Clone the Repository

```bash
git clone <YOUR_REPOSITORY_URL>
cd PubFix
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Create Environment File

```bash
cp .env.example .env
```

Update the database configuration in the `.env` file:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=pubfix_db
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Create the PostgreSQL database before running migrations.

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Run Database Migrations

```bash
php artisan migrate
```

### 6. Start the Development Server

```bash
php artisan serve
```

Open the application in your browser:

```text
http://127.0.0.1:8000
```

## 👥 Development Team

This project is developed collaboratively by a team of four developers.

| Module | Responsibility |
|---|---|
| Reviews & Ratings | Customer feedback and rating management |
| Worker Management | Handyman profile and service management |
| User Management | User accounts and profile management |
| Booking & Job Requests | Service booking and job request management |

## 🔄 Version Control

Git and GitHub are used to manage source code, track changes, and support team collaboration.

Each developer works on their assigned module using separate branches and contributes changes through pull requests.

## 🎯 Project Objective

To develop a reliable and user-friendly online platform that simplifies the process of finding, hiring, and managing handyman services.

---

**Project Name:** PubFix  
**Project Type:** Web Application  
**Backend Framework:** Laravel  
**Database:** PostgreSQL  
**Development Status:** In Progress
