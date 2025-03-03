# 🌿 UMNGrove - Lembur Mangrove Patikang Website V.2.0

An innovative web platform for sustainable mangrove tourism and education in Pangandaran, Indonesia.

![Laravel](https://img.shields.io/badge/Laravel-11.x-red)
![PHP](https://img.shields.io/badge/PHP-8.1-blue)
![License](https://img.shields.io/badge/License-MIT-green)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-v3-38B2AC)
![Livewire](https://img.shields.io/badge/Livewire-v3-FB70A9)

## 📋 Overview

Lembur Mangrove Patikang connects visitors with mangrove conservation efforts through sustainable tourism and educational programs. Our platform serves as a bridge between environmental preservation and community development in Pangandaran.

## ✨ Key Features

### 🎯 Tour Packages

-   Customizable mangrove tour experiences
-   Real-time availability checking
-   Secure booking system
-   Interactive tour maps

### 📰 News & Updates

-   Conservation progress reports
-   Community event announcements
-   Environmental awareness articles
-   Local initiatives coverage

### 🔬 Research & Dedication

-   Scientific research opportunities
-   Conservation project tracking
-   Educational resource center
-   Community engagement programs

### 🤝 CSR Programs

-   Corporate partnership opportunities
-   Community empowerment initiatives
-   Environmental education projects
-   Sustainability programs

## 🛠 Tech Stack

-   **Backend:**
    -   PHP 8.1
    -   Laravel 11.x
    -   MySQL/MariaDB
    -   Laravel Breeze (Authentication)
-   **Frontend:**
    -   Tailwind CSS
    -   Alpine.js
    -   Livewire 3.x
-   **Admin Panel:**
    -   Filament 3.x
-   **Testing:**
    -   PHPUnit
    -   Laravel Dusk

## ⚙️ Requirements

-   PHP >= 8.1
-   Composer 2.x
-   Node.js >= 16
-   NPM >= 8
-   MySQL >= 8.0/MariaDB >= 10.3
-   Git

## 📥 Installation

1. **Clone Repository**

```bash
git clone https://github.com/yourusername/patikang.git
cd patikang
```

2. **Install Dependencies**

```bash
composer install
npm install
```

3. **Environment Setup**

```bash
copy .env.example .env
php artisan key:generate
```

4. **Configure Database**

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=patikang
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. **Run Migrations & Seeders**

```bash
php artisan migrate --seed
```

6. **Build Assets**

```bash
npm run build
```

7. **Start Development Server**

```bash
php artisan serve
```

## 🚀 Development

### Setup Development Environment

```bash
npm run dev
```

### Running Tests

```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit

# Run with coverage report
php artisan test --coverage
```

### Code Style & Analysis

```bash
# Fix code style
composer format

# Run static analysis
composer analyse
```

## 🔄 Deployment

1. **Update Dependencies**

```bash
composer install --optimize-autoloader --no-dev
npm install --production
```

2. **Optimize Application**

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link
```

3. **Database Migration**

```bash
php artisan migrate --force
```

## 🔐 Security

If you discover any security vulnerabilities, please email [hello@lemburmangrove.com](mailto:hello@lemburmangrove.com).

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🌟 **Special Thanks**

We extend our gratitude to the following contributors and partners:

-   **Project Leader**: Lovenia Megumi Surjanto
-   **Public Relations**: Imel Sausan Maryam, Winsten, Christabell Grace Chalin
-   **Event Coordinators**: Angel Tambarna Teresa, Rafael Putra Hulu
-   **Visuals**: Maitriana, Luna Ardhagia Widodo
-   **Social Media**: Cindy Celia Jennifer, Kezia Margaretha Chandra
-   **Developers**:
    -   Fullstack: Jeremy Ansellino Gunawan
    -   Frontend: Aldo Juan Edrick Jolin, Ivan Reynardo
    -   Backend: Edward
-   **Videography**: Evelyn Valencia
