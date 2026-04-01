# 📚 Saifi-Coder E-Learning Platform

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-7.x-646CFF?style=for-the-badge&logo=vite&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind-3.x-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-8BC0D0?style=for-the-badge&logo=alpinedotjs&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Active-success?style=for-the-badge)

<br/>

> **A full-featured, role-based web E-Learning Platform** built with Laravel 12.  
> Students enroll in courses · Instructors manage content · Admins control everything.

<br/>

[🚀 Features](#-features) • [🏗 Architecture](#-architecture) • [⚙️ Installation](#️-installation) • [📁 Folder Structure](#-folder-structure) • [🔐 Security](#-security) • [🧪 Testing](#-testing) • [📸 Screenshots](#-screenshots) • [🗺 Roadmap](#-roadmap)

</div>

---

## 📖 Table of Contents

- [Project Overview](#-project-overview)
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Architecture](#-architecture)
- [Database Design](#-database-design)
- [Installation](#️-installation)
- [Environment Variables](#-environment-variables)
- [Folder Structure](#-folder-structure)
- [Routing Overview](#-routing-overview)
- [Security](#-security)
- [Testing](#-testing)
- [Screenshots](#-screenshots)
- [Roadmap](#-roadmap)
- [Contributing](#-contributing)
- [License](#-license)

---

## 🎯 Project Overview

**Saifi-Coder** is a web-based E-Learning Platform that connects students, instructors, and administrators in a single organized system.

| Role | Capabilities |
|------|-------------|
| 👨‍🎓 **Student** | Browse courses, enroll (free/paid), upload payment proof, track enrollment status, apply as instructor |
| 👨‍🏫 **Instructor** | Apply to teach, manage approved courses, view enrolled students |
| 🛠️ **Admin** | Full dashboard — manage courses, categories, enrollments, payment verification, instructor applications, users |

---

## ✨ Features

### 👨‍🎓 Student Features
- ✅ User registration & authentication (Laravel Breeze)
- ✅ Browse & filter courses by category
- ✅ **Free course** → instant one-click enrollment
- ✅ **Paid course** → upload payment proof image
- ✅ Track enrollment status: `Pending` · `Approved` · `Rejected`
- ✅ Apply to become an instructor
- ✅ Personal dashboard with enrollment history
- ✅ Profile management (name, email, password)

### 👨‍🏫 Instructor Features
- ✅ Submit instructor application with qualifications
- ✅ Track application approval status
- ✅ Manage assigned courses after admin approval

### 🛠️ Admin Features
- ✅ Centralized admin dashboard with platform statistics
- ✅ Full course CRUD (create, read, update, delete)
- ✅ Course category management
- ✅ Enrollment approval / rejection queue
- ✅ Payment proof preview & verification
- ✅ Instructor application approval workflow
- ✅ User management & role control
- ✅ Email notifications to students & instructors

---

## 🧰 Tech Stack

| Layer | Technology | Version |
|-------|-----------|---------|
| **Backend** | PHP + Laravel | `^8.2` / `^12.0` |
| **Authentication** | Laravel Breeze | `^2.3` |
| **Database** | MySQL | `8.0+` |
| **ORM** | Laravel Eloquent | — |
| **Frontend** | Bootstrap + Tailwind CSS | `5.x` / `3.x` |
| **JS Interactivity** | Alpine.js | `^3.4.2` |
| **HTTP Client** | Axios | `^1.11.0` |
| **Build Tool** | Vite + laravel-vite-plugin | `^7.0` / `^2.0` |
| **CSS Processing** | PostCSS + Autoprefixer | `^8.4` / `^10.4` |
| **Testing** | Pest PHP | `^3.8` |
| **Mocking** | Mockery | `^1.6` |
| **Dev Tools** | VS Code, XAMPP, Git | Latest |

---

## 🏗 Architecture

The project follows **Laravel's MVC (Model-View-Controller)** pattern:

```
Browser Request
      │
      ▼
┌─────────────┐
│   ROUTES    │  routes/web.php · routes/api.php
└──────┬──────┘
       │
       ▼
┌─────────────┐
│ MIDDLEWARE  │  auth · admin · CSRF · verified
└──────┬──────┘
       │
       ▼
┌─────────────┐       ┌──────────────┐
│ CONTROLLERS │──────▶│    MODELS    │──▶ MySQL Database
│  (Business  │       │ (Eloquent    │    (PDO Prepared
│   Logic)    │       │    ORM)      │     Statements)
└──────┬──────┘       └──────────────┘
       │
       ▼
┌─────────────┐
│    VIEWS    │  Blade Templates → HTML Response
│  (Blade)    │
└─────────────┘
```

### Request Lifecycle
```
1. Browser  →  Laravel Router  →  Middleware Stack
2. Middleware  →  Controller  →  Eloquent Model  →  MySQL
3. MySQL  →  Model  →  Controller  →  Blade View  →  Browser
```

---

## 🗄 Database Design

### Entity Relationship Overview

```
USERS ─────────────────────────────────────────┐
  │                                             │
  │ (student)                                   │ (instructor)
  │ one-to-many                                 │ one-to-many
  ▼                                             ▼
ENROLLMENTS ─── many-to-one ───▶ COURSES ──── many-to-one ──▶ CATEGORIES
                                               
USERS ─── one-to-one ───▶ INSTRUCTOR_APPLICATIONS
```

### Tables

<details>
<summary><b>📋 users</b></summary>

| Column | Type | Notes |
|--------|------|-------|
| `id` | BIGINT PK | Auto-increment |
| `name` | VARCHAR(255) | Full name |
| `email` | VARCHAR(255) | Unique — used for login |
| `password` | VARCHAR(255) | bcrypt hashed |
| `role` | ENUM | `student` · `instructor` · `admin` |
| `email_verified_at` | TIMESTAMP | Nullable |
| `remember_token` | VARCHAR(100) | Nullable |
| `created_at / updated_at` | TIMESTAMP | Auto-managed |

</details>

<details>
<summary><b>📋 courses</b></summary>

| Column | Type | Notes |
|--------|------|-------|
| `id` | BIGINT PK | Auto-increment |
| `title` | VARCHAR(255) | Course title |
| `description` | TEXT | Nullable |
| `price` | DECIMAL(8,2) | 0.00 if free |
| `is_free` | BOOLEAN | True = instant enrollment |
| `thumbnail` | VARCHAR(255) | File path, nullable |
| `category_id` | BIGINT FK | → categories.id |
| `instructor_id` | BIGINT FK | → users.id |
| `created_at / updated_at` | TIMESTAMP | Auto-managed |

</details>

<details>
<summary><b>📋 enrollments</b></summary>

| Column | Type | Notes |
|--------|------|-------|
| `id` | BIGINT PK | Auto-increment |
| `user_id` | BIGINT FK | → users.id |
| `course_id` | BIGINT FK | → courses.id |
| `status` | ENUM | `pending` · `approved` · `rejected` |
| `payment_proof` | VARCHAR(255) | File path, nullable |
| `created_at / updated_at` | TIMESTAMP | Auto-managed |

</details>

<details>
<summary><b>📋 categories</b></summary>

| Column | Type | Notes |
|--------|------|-------|
| `id` | BIGINT PK | Auto-increment |
| `name` | VARCHAR(255) | e.g. Programming, Design |
| `description` | TEXT | Nullable |
| `created_at / updated_at` | TIMESTAMP | Auto-managed |

</details>

<details>
<summary><b>📋 instructor_applications</b></summary>

| Column | Type | Notes |
|--------|------|-------|
| `id` | BIGINT PK | Auto-increment |
| `user_id` | BIGINT FK | → users.id |
| `qualifications` | TEXT | Academic credentials |
| `experience` | TEXT | Nullable |
| `status` | ENUM | `pending` · `approved` · `rejected` |
| `created_at / updated_at` | TIMESTAMP | Auto-managed |

</details>

---

## ⚙️ Installation

### Prerequisites

Make sure you have the following installed:

| Tool | Version |
|------|---------|
| PHP | `>= 8.2` |
| Composer | `>= 2.x` |
| Node.js | `>= 18.x` |
| MySQL | `>= 8.0` |
| Git | Latest |

---

### Step 1 — Clone the Repository

```bash
git clone https://github.com/saifullah857/Transformer-T5-Dialogue-Summarizer.git
cd e-learning
```

### Step 2 — Install PHP Dependencies

```bash
composer install
```

### Step 3 — Install Node Dependencies

```bash
npm install
```

### Step 4 — Configure Environment

```bash
cp .env.example .env
php artisan key:generate
```

Then open `.env` and update your database and mail settings:

```env
APP_NAME="Saifi-Coder"
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=elearning
DB_USERNAME=root
DB_PASSWORD=your_password

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_FROM_ADDRESS="noreply@saificoder.com"
MAIL_FROM_NAME="Saifi-Coder"
```

### Step 5 — Run Database Migrations & Seeders

```bash
# Run migrations only
php artisan migrate

# Run migrations + seed sample data
php artisan migrate --seed
```

### Step 6 — Create Storage Symlink

```bash
php artisan storage:link
```

### Step 7 — Build Frontend Assets

```bash
# Development (with hot reload)
npm run dev

# Production build
npm run build
```

### Step 8 — Start the Application

```bash
# Start Laravel dev server
php artisan serve

# OR use the combined dev command (server + queue + vite)
composer run dev
```

> 🌐 App runs at: **http://127.0.0.1:8000**

---

> ### 🔑 Default Admin Credentials (after seeding)
> 
> | Field | Value |
> |-------|-------|
> | Email | `admin@saificoder.com` |
> | Password | `password` |
> 
> ⚠️ **Change these immediately in production!**

---

## 🔧 Environment Variables

| Variable | Default | Description |
|----------|---------|-------------|
| `APP_NAME` | `Saifi-Coder` | Application display name |
| `APP_ENV` | `local` | `local` / `production` |
| `APP_DEBUG` | `true` | Set to `false` in production |
| `APP_URL` | `http://localhost` | Base URL |
| `DB_CONNECTION` | `mysql` | Database driver |
| `DB_DATABASE` | `elearning` | Database name |
| `MAIL_MAILER` | `smtp` | Email driver |
| `SESSION_DRIVER` | `file` | Session storage |
| `FILESYSTEM_DISK` | `local` | File storage driver |
| `QUEUE_CONNECTION` | `sync` | Queue driver |

---

## 📁 Folder Structure

```
e-learning/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/              # Admin dashboard controllers
│   │   │   │   ├── CourseController.php
│   │   │   │   ├── EnrollmentController.php
│   │   │   │   ├── InstructorController.php
│   │   │   │   └── UserController.php
│   │   │   ├── Auth/               # Laravel Breeze auth controllers
│   │   │   ├── CourseController.php
│   │   │   ├── EnrollmentController.php
│   │   │   ├── DashboardController.php
│   │   │   └── ProfileController.php
│   │   ├── Middleware/
│   │   │   ├── AdminMiddleware.php  # Admin role check
│   │   │   └── InstructorMiddleware.php
│   │   └── Requests/               # Form validation classes
│   ├── Models/
│   │   ├── User.php
│   │   ├── Course.php
│   │   ├── Enrollment.php
│   │   ├── Category.php
│   │   └── InstructorApplication.php
│   └── Providers/
│       └── AppServiceProvider.php
│
├── database/
│   ├── factories/                  # Eloquent model factories
│   ├── migrations/                 # Database schema migrations
│   └── seeders/
│       ├── DatabaseSeeder.php
│       ├── AdminSeeder.php
│       └── CategorySeeder.php
│
├── resources/
│   ├── css/
│   │   └── app.css                 # Main CSS entry (Tailwind)
│   ├── js/
│   │   └── app.js                  # Main JS entry (Alpine.js + Axios)
│   └── views/
│       ├── layouts/
│       │   ├── app.blade.php       # Main layout with nav + footer
│       │   └── guest.blade.php     # Auth pages layout
│       ├── auth/                   # Login, register, reset views
│       ├── admin/                  # All admin dashboard views
│       ├── courses/                # Course listing + detail
│       ├── components/             # Reusable Blade components
│       └── dashboard.blade.php     # Student dashboard
│
├── routes/
│   ├── web.php                     # Web routes
│   └── api.php                     # API routes
│
├── storage/
│   └── app/
│       └── payments/               # Uploaded payment proof files
│
├── tests/
│   ├── Feature/                    # End-to-end HTTP tests
│   └── Unit/                       # Isolated unit tests
│
├── public/
│   └── build/                      # Vite compiled assets
│
├── config/                         # Laravel config files
├── .env.example                    # Environment template
├── composer.json                   # PHP dependencies
├── package.json                    # Node dependencies
├── vite.config.js                  # Vite build config
├── tailwind.config.js              # Tailwind CSS config
└── phpunit.xml                     # PHPUnit / Pest config
```

---

## 🗺 Routing Overview

### Public Routes
| Method | URI | Description |
|--------|-----|-------------|
| GET | `/` | Home page |
| GET | `/courses` | Browse all courses |
| GET | `/courses/{id}` | Course detail page |
| GET/POST | `/register` | User registration |
| GET/POST | `/login` | User login |
| GET/POST | `/contact` | Contact admin |

### Authenticated Student Routes
| Method | URI | Description |
|--------|-----|-------------|
| GET | `/dashboard` | Student dashboard |
| GET | `/enrollments` | My enrollments |
| POST | `/enroll/{course}` | Enroll in course |
| POST | `/enroll/{id}/payment` | Upload payment proof |
| GET/POST | `/instructor/apply` | Apply as instructor |
| GET/PATCH | `/profile` | Edit profile |

### Admin Routes (`/admin/*`)
| Method | URI | Description |
|--------|-----|-------------|
| GET | `/admin/dashboard` | Admin overview |
| GET/POST | `/admin/courses` | List & create courses |
| PUT/DELETE | `/admin/courses/{id}` | Update / delete course |
| GET/POST | `/admin/categories` | Manage categories |
| GET | `/admin/enrollments` | View all enrollments |
| POST | `/admin/enrollments/{id}/approve` | Approve enrollment |
| POST | `/admin/enrollments/{id}/reject` | Reject enrollment |
| GET | `/admin/applications` | Instructor applications |
| POST | `/admin/applications/{id}/approve` | Approve instructor |
| GET | `/admin/users` | Manage users |

---

## 🔐 Security

| Feature | Implementation |
|---------|---------------|
| **Password Hashing** | bcrypt via `Hash::make()` |
| **CSRF Protection** | `@csrf` token on all forms — validated by Laravel middleware |
| **RBAC** | Custom `AdminMiddleware` and `InstructorMiddleware` on route groups |
| **SQL Injection** | Eloquent ORM uses PDO prepared statements — no raw queries |
| **XSS Prevention** | Blade `{{ }}` escapes all output automatically |
| **File Upload Security** | MIME type validation, size limits, stored outside `public/` |
| **Auth** | Session-based via Laravel Breeze — no plain-text credentials stored |
| **Email Verification** | Built-in Laravel `MustVerifyEmail` contract |
| **Password Reset** | Secure time-limited token sent via email |
| **Environment Secrets** | All credentials in `.env` — never committed to Git |

---

## 🧪 Testing

Tests are written with **Pest PHP 3**:

```bash
# Run all tests
php artisan test

# Run with Pest directly
vendor/bin/pest

# Run a specific file
vendor/bin/pest tests/Feature/EnrollmentTest.php

# Run with coverage
vendor/bin/pest --coverage
```

### Example Test

```php
it('allows a student to enroll in a free course', function () {
    $student = User::factory()->create(['role' => 'student']);
    $course  = Course::factory()->create(['is_free' => true]);

    $this->actingAs($student)
         ->post('/enroll/' . $course->id)
         ->assertRedirect('/dashboard');

    $this->assertDatabaseHas('enrollments', [
        'user_id'   => $student->id,
        'course_id' => $course->id,
        'status'    => 'approved',
    ]);
});
```

### Test Coverage

| Category | Tests |
|----------|-------|
| Authentication (Feature) | Register, login, logout, password reset |
| Enrollment (Feature) | Free enroll, paid enroll, upload proof, status changes |
| Admin Actions (Feature) | Approve/reject enrollments and applications |
| Model Logic (Unit) | User role checks, relationships |

---

## 📸 Screenshots

> *(Add screenshots here)*

| Page | Description |
|------|-------------|
| 🏠 Home | Landing page with course highlights |
| 📚 Courses | Course catalog with category filters |
| 📋 Dashboard | Student enrollment tracking |
| 🛠️ Admin | Admin statistics and management panel |
| 💳 Enrollment | Payment proof upload form |

---

## 🗺 Roadmap

- [ ] 💳 **Online Payment Gateway** — Stripe / PayPal integration
- [ ] 🎥 **Video Streaming** — AWS S3 / Cloudinary for course videos
- [ ] 🤖 **AI Recommendations** — ML-based course suggestion engine
- [ ] 🔔 **Real-Time Notifications** — Laravel Echo + Pusher
- [ ] 📱 **Mobile App** — React Native / Flutter
- [ ] 🎓 **Certificates** — Auto-generated PDF on course completion
- [ ] 💬 **Discussion Forums** — Course-specific student-instructor chat
- [ ] 🌐 **Multi-language** — Urdu and Arabic localization
- [ ] 📊 **Analytics** — Student progress and completion tracking
- [ ] 🔗 **REST API** — Full API for third-party integrations

---

## 🤝 Contributing

Contributions are welcome!

```bash
# 1. Fork the repository
# 2. Create your feature branch
git checkout -b feature/your-feature-name

# 3. Commit your changes
git commit -m "feat: add your feature description"

# 4. Push to the branch
git push origin feature/your-feature-name

# 5. Open a Pull Request
```

Please follow [PSR-4](https://www.php-fig.org/psr/psr-4/) coding standards and write tests for new features.

---

## 📄 License

This project is licensed under the **MIT License**.  
See the [LICENSE](LICENSE) file for details.

---

## 👨‍💻 Author

**Saifullah**  
GitHub: [@saifullah857](https://github.com/saifullah857)

---

<div align="center">

Made with ❤️ using **Laravel 12** · **PHP 8.2** · **MySQL** · **Vite** · **Tailwind CSS**

⭐ Star this repo if you found it helpful!

</div>