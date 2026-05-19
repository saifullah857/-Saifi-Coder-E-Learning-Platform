<div align="center">

<!-- Animated Header Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&color=gradient&customColorList=6,11,20&height=220&section=header&text=Saifi-Coder&fontSize=80&fontColor=fff&animation=twinkling&fontAlignY=35&desc=E-Learning%20Platform&descAlignY=58&descSize=26" width="100%"/>

<!-- Typing Animation -->
<a href="https://git.io/typing-svg"><img src="https://readme-typing-svg.demolab.com?font=JetBrains+Mono&weight=700&size=22&pause=1000&color=6366F1&center=true&vCenter=true&multiline=true&repeat=true&width=800&height=80&lines=🎓+Full-Stack+E-Learning+Platform+Built+with+Laravel+12;👨‍🎓+Students+·+👨‍🏫+Instructors+·+🛠️+Admins;💡+Learn+%7C+Teach+%7C+Manage+%7C+Grow" alt="Typing SVG" /></a>

<br/>

<!-- Core Badge Row -->
[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![Vite](https://img.shields.io/badge/Vite-7.x-646CFF?style=for-the-badge&logo=vite&logoColor=white)](https://vitejs.dev)

<br/>

[![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-3.x-06B6D4?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-8BC0D0?style=for-the-badge&logo=alpinedotjs&logoColor=white)](https://alpinejs.dev)
[![Pest](https://img.shields.io/badge/Pest-3.x-F17232?style=for-the-badge&logo=testcafe&logoColor=white)](https://pestphp.com)

<br/>

<!-- Status Badges -->
[![License: MIT](https://img.shields.io/badge/License-MIT-22c55e?style=for-the-badge&logo=opensourceinitiative&logoColor=white)](LICENSE)
[![Status](https://img.shields.io/badge/Status-Active_Development-6366f1?style=for-the-badge&logo=statuspage&logoColor=white)]()
[![Version](https://img.shields.io/badge/Version-1.0.0-f59e0b?style=for-the-badge&logo=semver&logoColor=white)]()
[![PRs Welcome](https://img.shields.io/badge/PRs-Welcome-ec4899?style=for-the-badge&logo=github&logoColor=white)](CONTRIBUTING.md)

<br/>

---

<p align="center">
  <b>🎯 A production-ready, role-based E-Learning Platform</b><br/>
  Students enroll in courses &nbsp;·&nbsp; Instructors manage content &nbsp;·&nbsp; Admins control everything
</p>

---

<!-- Navigation -->
**[🎯 Overview](#-project-overview)** &nbsp;•&nbsp;
**[✨ Features](#-features)** &nbsp;•&nbsp;
**[🧰 Tech Stack](#-tech-stack)** &nbsp;•&nbsp;
**[🏗 Architecture](#-architecture)** &nbsp;•&nbsp;
**[🗄 Database](#-database-design)** &nbsp;•&nbsp;
**[⚙️ Installation](#️-installation)** &nbsp;•&nbsp;
**[📁 Structure](#-folder-structure)** &nbsp;•&nbsp;
**[🗺 Routes](#-routing-overview)** &nbsp;•&nbsp;
**[🔐 Security](#-security)** &nbsp;•&nbsp;
**[🧪 Testing](#-testing)** &nbsp;•&nbsp;
**[🚀 Roadmap](#-roadmap)**

</div>

<br/>

---

## 🎯 Project Overview

<table>
<tr>
<td>

**Saifi-Coder** is a modern, full-featured **web-based E-Learning Platform** that seamlessly connects students, instructors, and administrators in one unified ecosystem. Built on **Laravel 12** with a clean **MVC architecture**, it handles everything from free course discovery to payment verification and instructor onboarding — all with enterprise-grade security.

</td>
</tr>
</table>

<br/>

### 👥 Role-Based Access Matrix

<div align="center">

| Role | Browse | Enroll | Upload Proof | Manage Courses | Approve Users | Full Control |
|------|:------:|:------:|:------------:|:--------------:|:-------------:|:------------:|
| 👨‍🎓 **Student** | ✅ | ✅ | ✅ | ❌ | ❌ | ❌ |
| 👨‍🏫 **Instructor** | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ |
| 🛠️ **Admin** | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |

</div>

<br/>

---

## ✨ Features

<details open>
<summary><h3>👨‍🎓 Student Features</h3></summary>

<br/>

| Feature | Status | Description |
|---------|:------:|-------------|
| Registration & Authentication | ✅ | Powered by **Laravel Breeze** — secure, fast, clean |
| Browse & Filter Courses | ✅ | Filter courses by category with instant results |
| Free Course Enrollment | ✅ | One-click instant enrollment for free courses |
| Paid Course Enrollment | ✅ | Upload payment proof image for paid courses |
| Enrollment Status Tracking | ✅ | Real-time status: `Pending` · `Approved` · `Rejected` |
| Become an Instructor | ✅ | Submit instructor application with qualifications |
| Personal Dashboard | ✅ | Full enrollment history and progress overview |
| Profile Management | ✅ | Update name, email, and password securely |

</details>

<details>
<summary><h3>👨‍🏫 Instructor Features</h3></summary>

<br/>

| Feature | Status | Description |
|---------|:------:|-------------|
| Submit Application | ✅ | Apply with qualifications and experience details |
| Track Approval Status | ✅ | Monitor application: `Pending` · `Approved` · `Rejected` |
| Manage Courses | ✅ | Full control over assigned courses post-approval |
| View Enrolled Students | ✅ | See all students enrolled in your courses |

</details>

<details>
<summary><h3>🛠️ Admin Features</h3></summary>

<br/>

| Feature | Status | Description |
|---------|:------:|-------------|
| Centralized Dashboard | ✅ | Platform-wide statistics at a glance |
| Course CRUD | ✅ | Full Create, Read, Update, Delete for all courses |
| Category Management | ✅ | Organize courses into categories |
| Enrollment Queue | ✅ | Approve or reject enrollments with ease |
| Payment Verification | ✅ | Preview uploaded proof images before approving |
| Instructor Applications | ✅ | Review and approve/reject instructor requests |
| User Management | ✅ | Control user roles and permissions |
| Email Notifications | ✅ | Automated emails to students and instructors |

</details>

<br/>

---

## 🧰 Tech Stack

<div align="center">

### Backend

[![PHP](https://skillicons.dev/icons?i=php)](https://php.net)&nbsp;
[![Laravel](https://skillicons.dev/icons?i=laravel)](https://laravel.com)&nbsp;
[![MySQL](https://skillicons.dev/icons?i=mysql)](https://mysql.com)

### Frontend

[![Tailwind](https://skillicons.dev/icons?i=tailwind)](https://tailwindcss.com)&nbsp;
[![Bootstrap](https://skillicons.dev/icons?i=bootstrap)](https://getbootstrap.com)&nbsp;
[![JS](https://skillicons.dev/icons?i=js)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)&nbsp;
[![Vite](https://skillicons.dev/icons?i=vite)](https://vitejs.dev)

### Dev Tools

[![VSCode](https://skillicons.dev/icons?i=vscode)](https://code.visualstudio.com)&nbsp;
[![Git](https://skillicons.dev/icons?i=git)](https://git-scm.com)&nbsp;
[![GitHub](https://skillicons.dev/icons?i=github)](https://github.com)

</div>

<br/>

<div align="center">

| Layer | Technology | Version | Purpose |
|-------|-----------|:-------:|---------|
| 🔧 **Backend** | PHP + Laravel | `8.2+` / `12.x` | Core application framework |
| 🔑 **Auth** | Laravel Breeze | `2.3+` | Session-based authentication |
| 🗄 **Database** | MySQL + Eloquent | `8.0+` | Relational data & ORM |
| 🎨 **Styling** | Bootstrap + Tailwind | `5.x` / `3.x` | UI components & utility classes |
| ⚡ **JS** | Alpine.js + Axios | `3.x` / `1.x` | Reactive UI & HTTP requests |
| 📦 **Build** | Vite | `7.x` | Lightning-fast asset bundling |
| 🧪 **Testing** | Pest PHP + Mockery | `3.8+` / `1.6+` | Feature & unit test suite |
| 🖥 **Dev** | VS Code + XAMPP | Latest | Local development environment |

</div>

<br/>

---

## 🏗 Architecture

<div align="center">

### MVC Request Lifecycle

</div>

```
╔══════════════════════════════════════════════════════════════════════════╗
║                        REQUEST LIFECYCLE                                 ║
╚══════════════════════════════════════════════════════════════════════════╝

  🌐 Browser Request
         │
         ▼
  ┌─────────────────┐
  │   🗺  ROUTER    │  ──  routes/web.php  ·  routes/api.php
  └────────┬────────┘
           │
           ▼
  ┌─────────────────┐
  │  🛡 MIDDLEWARE  │  ──  auth · admin · CSRF · verified · throttle
  └────────┬────────┘
           │
           ▼
  ┌─────────────────┐         ┌──────────────────┐
  │ 🎮 CONTROLLERS  │ ──────▶ │   📦 MODELS      │ ──▶  🗄 MySQL
  │  (Business      │         │  (Eloquent ORM    │      (PDO Prepared
  │    Logic)       │         │   Relationships)  │       Statements)
  └────────┬────────┘         └──────────────────┘
           │
           ▼
  ┌─────────────────┐
  │  🖼 VIEWS       │  ──  Blade Templates → Compiled HTML → Response
  │  (Blade)        │
  └─────────────────┘
           │
           ▼
  🌐 Browser Response
```

<br/>

### Route Groups & Middleware Stack

```
routes/web.php
├── 🌍 Public Routes         (no auth required)
│   ├── GET  /               Home page
│   ├── GET  /courses        Course catalog
│   └── GET  /courses/{id}   Course detail
│
├── 🔐 Auth Routes           (middleware: auth, verified)
│   ├── GET  /dashboard      Student dashboard
│   ├── POST /enroll/{id}    Course enrollment
│   └── GET  /profile        Profile management
│
└── 🛠 Admin Routes          (middleware: auth, admin)
    ├── GET  /admin/dashboard
    ├── CRUD /admin/courses
    ├── CRUD /admin/categories
    ├── GET  /admin/enrollments
    └── GET  /admin/applications
```

<br/>

---

## 🗄 Database Design

### Entity Relationship Diagram

```
╔══════════════════╗        ╔══════════════════════════════╗
║      USERS       ║        ║         COURSES              ║
╠══════════════════╣        ╠══════════════════════════════╣
║ id          PK   ║───┐    ║ id              PK           ║
║ name             ║   │    ║ title                        ║
║ email       UQ   ║   │    ║ description                  ║
║ password         ║   │    ║ price           DECIMAL(8,2) ║
║ role        ENUM ║   └───▶║ is_free         BOOLEAN      ║
║ email_verified   ║        ║ thumbnail                    ║
╚══════════════════╝        ║ category_id     FK  ──┐      ║
        │                   ║ instructor_id   FK  ──│──────╫──┐
        │                   ╚══════════════════════╝│      ║  │
        │                            │              │      ║  │
        │ 1:N                        │ 1:N          │      ║  │
        ▼                            ▼              │      ▼  │
╔══════════════════╗        ╔══════════════╗  ╔══════════════╗│
║   ENROLLMENTS    ║        ║  CATEGORIES  ║  ║    USERS     ║│
╠══════════════════╣        ╠══════════════╣  ║ (instructors)║│
║ id          PK   ║        ║ id      PK   ║  ╚══════════════╝│
║ user_id     FK ──╫──────┐ ║ name         ║                  │
║ course_id   FK   ║      │ ║ description  ║                  │
║ status      ENUM ║      │ ╚══════════════╝                  │
║ payment_proof    ║      │                                   │
╚══════════════════╝      └───────────────────────────────────┘

╔══════════════════════════════╗
║   INSTRUCTOR_APPLICATIONS    ║
╠══════════════════════════════╣
║ id              PK           ║
║ user_id         FK ──▶ USERS ║
║ qualifications  TEXT         ║
║ experience      TEXT         ║
║ status          ENUM         ║
╚══════════════════════════════╝
```

<br/>

### Table Schemas

<details>
<summary><b>📋 users</b></summary>
<br/>

| Column | Type | Constraint | Notes |
|--------|------|-----------|-------|
| `id` | `BIGINT UNSIGNED` | `PRIMARY KEY` | Auto-increment |
| `name` | `VARCHAR(255)` | `NOT NULL` | Full display name |
| `email` | `VARCHAR(255)` | `UNIQUE, NOT NULL` | Login identifier |
| `password` | `VARCHAR(255)` | `NOT NULL` | bcrypt hashed |
| `role` | `ENUM` | `NOT NULL` | `student` · `instructor` · `admin` |
| `email_verified_at` | `TIMESTAMP` | `NULLABLE` | Verified date |
| `remember_token` | `VARCHAR(100)` | `NULLABLE` | Session token |
| `created_at` | `TIMESTAMP` | `AUTO` | Laravel auto-managed |
| `updated_at` | `TIMESTAMP` | `AUTO` | Laravel auto-managed |

</details>

<details>
<summary><b>📋 courses</b></summary>
<br/>

| Column | Type | Constraint | Notes |
|--------|------|-----------|-------|
| `id` | `BIGINT UNSIGNED` | `PRIMARY KEY` | Auto-increment |
| `title` | `VARCHAR(255)` | `NOT NULL` | Course title |
| `description` | `TEXT` | `NULLABLE` | Full description |
| `price` | `DECIMAL(8,2)` | `DEFAULT 0.00` | `0.00` = free course |
| `is_free` | `BOOLEAN` | `DEFAULT FALSE` | Instant enrollment if true |
| `thumbnail` | `VARCHAR(255)` | `NULLABLE` | Storage file path |
| `category_id` | `BIGINT UNSIGNED` | `FK → categories` | Category reference |
| `instructor_id` | `BIGINT UNSIGNED` | `FK → users` | Instructor reference |

</details>

<details>
<summary><b>📋 enrollments</b></summary>
<br/>

| Column | Type | Constraint | Notes |
|--------|------|-----------|-------|
| `id` | `BIGINT UNSIGNED` | `PRIMARY KEY` | Auto-increment |
| `user_id` | `BIGINT UNSIGNED` | `FK → users` | Enrolled student |
| `course_id` | `BIGINT UNSIGNED` | `FK → courses` | Target course |
| `status` | `ENUM` | `NOT NULL` | `pending` · `approved` · `rejected` |
| `payment_proof` | `VARCHAR(255)` | `NULLABLE` | Uploaded file path |

</details>

<details>
<summary><b>📋 categories</b></summary>
<br/>

| Column | Type | Constraint | Notes |
|--------|------|-----------|-------|
| `id` | `BIGINT UNSIGNED` | `PRIMARY KEY` | Auto-increment |
| `name` | `VARCHAR(255)` | `NOT NULL` | e.g. Programming, Design |
| `description` | `TEXT` | `NULLABLE` | Optional description |

</details>

<details>
<summary><b>📋 instructor_applications</b></summary>
<br/>

| Column | Type | Constraint | Notes |
|--------|------|-----------|-------|
| `id` | `BIGINT UNSIGNED` | `PRIMARY KEY` | Auto-increment |
| `user_id` | `BIGINT UNSIGNED` | `FK → users` | Applicant |
| `qualifications` | `TEXT` | `NOT NULL` | Academic credentials |
| `experience` | `TEXT` | `NULLABLE` | Work experience |
| `status` | `ENUM` | `NOT NULL` | `pending` · `approved` · `rejected` |

</details>

<br/>

---

## ⚙️ Installation

### ✅ Prerequisites

<div align="center">

| Tool | Minimum Version | Download |
|------|:--------------:|---------|
| 🐘 PHP | `>= 8.2` | [php.net](https://php.net) |
| 🎼 Composer | `>= 2.x` | [getcomposer.org](https://getcomposer.org) |
| 🟩 Node.js | `>= 18.x` | [nodejs.org](https://nodejs.org) |
| 🗄 MySQL | `>= 8.0` | [mysql.com](https://mysql.com) |
| 🐙 Git | Latest | [git-scm.com](https://git-scm.com) |

</div>

<br/>

### 🚀 Quick Start Guide

```bash
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
# STEP 1 — Clone the Repository
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
git clone https://github.com/saifullah857/saifi-coder.git
cd saifi-coder

# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
# STEP 2 — Install PHP Dependencies
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
composer install

# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
# STEP 3 — Install Node Dependencies
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
npm install

# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
# STEP 4 — Configure Environment
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
cp .env.example .env
php artisan key:generate

# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
# STEP 5 — Run Migrations & Seeders
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
php artisan migrate --seed

# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
# STEP 6 — Create Storage Symlink
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
php artisan storage:link

# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
# STEP 7 — Build Frontend Assets
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
npm run dev          # Development with hot reload
# npm run build      # Production optimized build

# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
# STEP 8 — Launch the Application
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
php artisan serve
# OR use the combined dev command:
composer run dev
```

> 🌐 **App runs at:** `http://127.0.0.1:8000`

<br/>

### 🔧 Environment Configuration

Open `.env` and configure these key variables:

```env
# ─── Application ────────────────────────────────────────────
APP_NAME="Saifi-Coder"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

# ─── Database ───────────────────────────────────────────────
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=elearning
DB_USERNAME=root
DB_PASSWORD=your_password

# ─── Mail (Mailtrap for dev) ─────────────────────────────────
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_FROM_ADDRESS="noreply@saificoder.com"
MAIL_FROM_NAME="Saifi-Coder"

# ─── Storage & Queue ─────────────────────────────────────────
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
```

<br/>

> [!IMPORTANT]
> ### 🔑 Default Admin Credentials
> After running seeders, use these credentials to access the admin panel:
>
> | Field | Value |
> |-------|-------|
> | 📧 Email | `admin@saificoder.com` |
> | 🔒 Password | `password` |
>
> ⚠️ **Change these credentials immediately before deploying to production!**

<br/>

---

## 📁 Folder Structure

```
saifi-coder/                           🏠 Project Root
│
├── 📂 app/
│   ├── 📂 Http/
│   │   ├── 📂 Controllers/
│   │   │   ├── 📂 Admin/              🛠  Admin panel controllers
│   │   │   │   ├── CourseController.php
│   │   │   │   ├── EnrollmentController.php
│   │   │   │   ├── InstructorController.php
│   │   │   │   └── UserController.php
│   │   │   ├── 📂 Auth/               🔐 Breeze auth controllers
│   │   │   ├── CourseController.php
│   │   │   ├── EnrollmentController.php
│   │   │   ├── DashboardController.php
│   │   │   └── ProfileController.php
│   │   ├── 📂 Middleware/
│   │   │   ├── AdminMiddleware.php    🛡  Admin role guard
│   │   │   └── InstructorMiddleware.php
│   │   └── 📂 Requests/              ✅  Form validation classes
│   ├── 📂 Models/
│   │   ├── User.php                  👤 User model + relationships
│   │   ├── Course.php                📚 Course model
│   │   ├── Enrollment.php            📋 Enrollment model
│   │   ├── Category.php              🏷️  Category model
│   │   └── InstructorApplication.php 📝 Application model
│   └── 📂 Providers/
│       └── AppServiceProvider.php
│
├── 📂 database/
│   ├── 📂 factories/                 🏭 Eloquent model factories
│   ├── 📂 migrations/                🗄  Database schema migrations
│   └── 📂 seeders/
│       ├── DatabaseSeeder.php        🌱 Master seeder
│       ├── AdminSeeder.php           👑 Creates admin account
│       └── CategorySeeder.php        🏷️  Seeds default categories
│
├── 📂 resources/
│   ├── 📂 css/
│   │   └── app.css                   🎨 Tailwind CSS entry
│   ├── 📂 js/
│   │   └── app.js                    ⚡ Alpine.js + Axios entry
│   └── 📂 views/
│       ├── 📂 layouts/
│       │   ├── app.blade.php         🖼️  Main layout (nav + footer)
│       │   └── guest.blade.php       🔓 Guest/auth layout
│       ├── 📂 auth/                  🔐 Login, register, reset
│       ├── 📂 admin/                 🛠️  All admin dashboard views
│       ├── 📂 courses/               📚 Catalog + course detail
│       ├── 📂 components/            🧩 Reusable Blade components
│       └── dashboard.blade.php       📊 Student dashboard
│
├── 📂 routes/
│   ├── web.php                       🗺  All web routes
│   └── api.php                       🔌 API routes
│
├── 📂 storage/
│   └── 📂 app/
│       └── 📂 payments/              💳 Payment proof uploads
│
├── 📂 tests/
│   ├── 📂 Feature/                   🧪 End-to-end HTTP tests
│   └── 📂 Unit/                      🔬 Isolated unit tests
│
├── 📂 public/
│   └── 📂 build/                     📦 Vite compiled assets
│
├── 📂 config/                        ⚙️  Laravel config files
├── .env.example                      📄 Environment template
├── composer.json                     🐘 PHP dependencies
├── package.json                      📦 Node dependencies
├── vite.config.js                    ⚡ Vite build config
├── tailwind.config.js                🎨 Tailwind config
└── phpunit.xml                       🧪 PHPUnit / Pest config
```

<br/>

---

## 🗺 Routing Overview

### 🌍 Public Routes

| Method | URI | Controller | Description |
|--------|-----|-----------|-------------|
| `GET` | `/` | `HomeController` | Landing page |
| `GET` | `/courses` | `CourseController@index` | Browse all courses |
| `GET` | `/courses/{id}` | `CourseController@show` | Course detail page |
| `GET\|POST` | `/register` | `Auth\RegisterController` | User registration |
| `GET\|POST` | `/login` | `Auth\LoginController` | User login |
| `GET\|POST` | `/contact` | `ContactController` | Contact admin |

<br/>

### 🔐 Authenticated Student Routes `[auth, verified]`

| Method | URI | Controller | Description |
|--------|-----|-----------|-------------|
| `GET` | `/dashboard` | `DashboardController` | Student dashboard |
| `GET` | `/enrollments` | `EnrollmentController@index` | My enrollments list |
| `POST` | `/enroll/{course}` | `EnrollmentController@store` | Enroll in a course |
| `POST` | `/enroll/{id}/payment` | `EnrollmentController@uploadProof` | Upload payment proof |
| `GET\|POST` | `/instructor/apply` | `InstructorController@apply` | Apply as instructor |
| `GET\|PATCH` | `/profile` | `ProfileController` | Edit profile |

<br/>

### 🛠 Admin Routes `/admin/*` `[auth, admin]`

| Method | URI | Description |
|--------|-----|-------------|
| `GET` | `/admin/dashboard` | Admin overview & statistics |
| `GET\|POST` | `/admin/courses` | List & create courses |
| `GET\|PUT\|DELETE` | `/admin/courses/{id}` | View, update, or delete a course |
| `GET\|POST` | `/admin/categories` | Manage course categories |
| `GET` | `/admin/enrollments` | View all platform enrollments |
| `POST` | `/admin/enrollments/{id}/approve` | ✅ Approve enrollment |
| `POST` | `/admin/enrollments/{id}/reject` | ❌ Reject enrollment |
| `GET` | `/admin/applications` | View instructor applications |
| `POST` | `/admin/applications/{id}/approve` | ✅ Approve instructor |
| `POST` | `/admin/applications/{id}/reject` | ❌ Reject instructor |
| `GET` | `/admin/users` | Manage all platform users |

<br/>

---

## 🔐 Security

<div align="center">

| 🛡 Feature | ⚙️ Implementation | 📌 Details |
|-----------|-------------------|-----------|
| **Password Hashing** | `Hash::make()` — bcrypt | Never stored in plain text |
| **CSRF Protection** | `@csrf` + Laravel Middleware | All forms are CSRF-validated |
| **Role-Based Access** | `AdminMiddleware` + `InstructorMiddleware` | Custom middleware on route groups |
| **SQL Injection** | Eloquent ORM — PDO Prepared Statements | Zero raw SQL queries |
| **XSS Prevention** | Blade `{{ }}` — auto-escaped output | All data sanitized before render |
| **File Upload Security** | MIME type validation + size limits | Files stored outside `public/` |
| **Session Auth** | Laravel Breeze — session-based | No plain-text credentials stored |
| **Email Verification** | `MustVerifyEmail` contract | Required before access |
| **Password Reset** | Time-limited secure token via email | Tokens expire automatically |
| **Environment Secrets** | `.env` file — gitignored | Never committed to version control |

</div>

<br/>

---

## 🧪 Testing

The project uses **Pest PHP 3** — the elegant PHP testing framework.

### Run Tests

```bash
# ─── Run all tests ──────────────────────────────────────────
php artisan test

# ─── Run with Pest directly ─────────────────────────────────
vendor/bin/pest

# ─── Run specific test file ─────────────────────────────────
vendor/bin/pest tests/Feature/EnrollmentTest.php

# ─── Run with code coverage report ──────────────────────────
vendor/bin/pest --coverage

# ─── Filter by test name ────────────────────────────────────
vendor/bin/pest --filter="student can enroll"
```

<br/>

### Test Coverage

<div align="center">

| 🧪 Test Suite | 📝 Type | ✅ Covered Scenarios |
|--------------|:-------:|---------------------|
| **Authentication** | Feature | Register, login, logout, password reset, email verification |
| **Enrollment** | Feature | Free enroll, paid enroll, upload proof, status change flows |
| **Admin Actions** | Feature | Approve/reject enrollments, instructor applications |
| **Model Logic** | Unit | User role checks, Eloquent relationships, factories |

</div>

<br/>

### Example Test

```php
<?php

use App\Models\{User, Course};

// ─── Feature: Free Course Enrollment ─────────────────────────────────────────
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

// ─── Feature: Paid Course Enrollment ─────────────────────────────────────────
it('sets enrollment to pending when uploading payment proof', function () {
    $student = User::factory()->create(['role' => 'student']);
    $course  = Course::factory()->create(['is_free' => false, 'price' => 29.99]);

    $this->actingAs($student)
         ->post('/enroll/' . $course->id . '/payment', [
             'payment_proof' => UploadedFile::fake()->image('proof.jpg'),
         ])
         ->assertRedirect('/dashboard');

    $this->assertDatabaseHas('enrollments', [
        'user_id'   => $student->id,
        'course_id' => $course->id,
        'status'    => 'pending',
    ]);
});

// ─── Unit: User Role Check ────────────────────────────────────────────────────
it('correctly identifies an admin user', function () {
    $admin = User::factory()->create(['role' => 'admin']);

    expect($admin->role)->toBe('admin')
        ->and($admin->isAdmin())->toBeTrue();
});
```

<br/>

---

## 🌍 Environment Variables Reference

<div align="center">

| Variable | Default | Environment | Description |
|----------|---------|:-----------:|-------------|
| `APP_NAME` | `Saifi-Coder` | All | Application display name |
| `APP_ENV` | `local` | All | `local` / `staging` / `production` |
| `APP_DEBUG` | `true` | Dev only | **Set `false` in production** |
| `APP_URL` | `http://localhost` | All | Base application URL |
| `DB_CONNECTION` | `mysql` | All | Database driver |
| `DB_DATABASE` | `elearning` | All | Database name |
| `DB_USERNAME` | `root` | All | Database user |
| `DB_PASSWORD` | _(empty)_ | All | Database password |
| `MAIL_MAILER` | `smtp` | All | Email driver |
| `SESSION_DRIVER` | `file` | All | Session storage backend |
| `FILESYSTEM_DISK` | `local` | All | File storage driver |
| `QUEUE_CONNECTION` | `sync` | All | Queue driver (use `database`/`redis` in prod) |

</div>

<br/>

---

## 🚀 Roadmap

<div align="center">

| Priority | Feature | Status |
|:--------:|---------|:------:|
| 🔴 High | 💳 **Online Payment Gateway** — Stripe / PayPal integration | 🔲 Planned |
| 🔴 High | 🎥 **Video Streaming** — AWS S3 / Cloudinary for course videos | 🔲 Planned |
| 🟠 Medium | 🔔 **Real-Time Notifications** — Laravel Echo + Pusher | 🔲 Planned |
| 🟠 Medium | 🎓 **Certificates** — Auto-generated PDF on course completion | 🔲 Planned |
| 🟠 Medium | 📊 **Analytics** — Student progress and completion tracking | 🔲 Planned |
| 🟡 Normal | 🤖 **AI Recommendations** — ML-based course suggestion engine | 🔲 Planned |
| 🟡 Normal | 💬 **Discussion Forums** — Course-specific student-instructor chat | 🔲 Planned |
| 🟡 Normal | 🔗 **REST API** — Full API for third-party integrations | 🔲 Planned |
| 🟢 Low | 📱 **Mobile App** — React Native / Flutter | 🔲 Planned |
| 🟢 Low | 🌐 **Multi-language** — Urdu and Arabic localization | 🔲 Planned |

</div>

<br/>

---

## 🤝 Contributing

Contributions are welcome! Here's how to get started:

```bash
# 1️⃣  Fork the repository on GitHub

# 2️⃣  Clone your fork
git clone https://github.com/YOUR_USERNAME/saifi-coder.git

# 3️⃣  Create a feature branch
git checkout -b feature/amazing-new-feature

# 4️⃣  Make your changes & write tests
vendor/bin/pest

# 5️⃣  Commit with a descriptive message (Conventional Commits)
git commit -m "feat: add course completion certificates"

# 6️⃣  Push and open a Pull Request
git push origin feature/amazing-new-feature
```

### 📋 Contribution Guidelines

- Follow **[PSR-4](https://www.php-fig.org/psr/psr-4/)** PHP coding standards
- Write **Pest tests** for all new features
- Use **Conventional Commits** format (`feat:`, `fix:`, `docs:`, etc.)
- Keep PRs focused — one feature or fix per pull request
- Update documentation when changing functionality

<br/>

---

## 📄 License

<div align="center">

This project is licensed under the **MIT License**.

[![License: MIT](https://img.shields.io/badge/License-MIT-22c55e?style=for-the-badge&logo=opensourceinitiative&logoColor=white)](LICENSE)

```
MIT License — Copyright (c) 2025 Saifullah

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software.
```

See the full [LICENSE](LICENSE) file for details.

</div>

<br/>

---

## 👨‍💻 Author

<div align="center">

<img src="https://avatars.githubusercontent.com/saifullah857" width="100" style="border-radius: 50%"/>

### Saifullah

[![GitHub](https://img.shields.io/badge/GitHub-@saifullah857-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/saifullah857)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Connect-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://linkedin.com)
[![Email](https://img.shields.io/badge/Email-Contact-EA4335?style=for-the-badge&logo=gmail&logoColor=white)](mailto:noreply@saificoder.com)

</div>

<br/>

---

<div align="center">

<!-- Activity Graph -->
[![GitHub Activity Graph](https://github-readme-activity-graph.vercel.app/graph?username=saifullah857&theme=tokyo-night&hide_border=true&bg_color=0d1117&color=6366f1&line=6366f1&point=f59e0b)](https://github.com/saifullah857)

<br/>

<!-- Footer Stats -->
![GitHub Stars](https://img.shields.io/github/stars/saifullah857/saifi-coder?style=social)
&nbsp;
![GitHub Forks](https://img.shields.io/github/forks/saifullah857/saifi-coder?style=social)
&nbsp;
![GitHub Watchers](https://img.shields.io/github/watchers/saifullah857/saifi-coder?style=social)

<br/>

---

**Made with ❤️ using**

[![Laravel](https://img.shields.io/badge/-Laravel_12-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/-PHP_8.2-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/-MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://mysql.com)
[![Tailwind](https://img.shields.io/badge/-Tailwind_CSS-06B6D4?style=flat-square&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![Vite](https://img.shields.io/badge/-Vite-646CFF?style=flat-square&logo=vite&logoColor=white)](https://vitejs.dev)

<br/>

⭐ **Star this repo if you found it helpful!** ⭐

<br/>

<!-- Bottom wave -->
<img src="https://capsule-render.vercel.app/api?type=waving&color=gradient&customColorList=6,11,20&height=120&section=footer" width="100%"/>

</div>