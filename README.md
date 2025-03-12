# 🌿 UMNGrove - Lembur Mangrove Patikang Website V.2.0

An innovative web platform for sustainable mangrove tourism and education in Pangandaran, Indonesia.

![Version](https://img.shields.io/badge/version-2.0-brightgreen)
![Laravel](https://img.shields.io/badge/Laravel-11.x-red)
![PHP](https://img.shields.io/badge/PHP-8.2-blue)
![Livewire](https://img.shields.io/badge/Livewire-3.x-FB70A9)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-v3-38B2AC)
![Filament](https://img.shields.io/badge/Filament-3.x-5457EB)
![License](https://img.shields.io/badge/License-MIT-green)

## 📑 Table of Contents

-   [Overview](#-overview)
-   [Key Features](#-key-features)
-   [Tech Stack](#-tech-stack)
-   [System Requirements](#️-system-requirements)
-   [Installation Guide](#-installation-guide)
-   [Development Workflow](#-development-workflow)
-   [Project Structure](#-project-structure)
-   [Component Architecture](#-component-architecture)
-   [API Documentation](#-api-documentation)
-   [Deployment Guidelines](#-deployment-guidelines)
-   [Security Considerations](#-security-considerations)
-   [Contributing](#-contributing)
-   [License](#-license)
-   [Special Thanks](#-special-thanks)

## 📋 Overview

Lembur Mangrove Patikang is a comprehensive web platform designed to bridge environmental preservation with community development in Pangandaran. The project serves as a digital hub for sustainable mangrove tourism, educational programs, and conservation efforts, offering visitors a seamless experience for exploring and engaging with mangrove ecosystems.

This platform integrates modern web technologies and user-centered design principles to create an immersive, accessible, and informative experience for users interested in mangrove conservation, tourism, research opportunities, and community service programs.

## ✨ Key Features

### 🎯 Tour Packages

-   **Interactive Tour Selection**: Customizable mangrove tour experiences with detailed itineraries
-   **Real-time Availability**: Live booking calendar with availability checking
-   **Secure Booking System**: Encrypted payment processing and booking confirmation
-   **Interactive Tour Maps**: Geospatial visualization of tour routes and points of interest
-   **Multilingual Support**: Tour information in multiple languages

### 📰 News & Updates

-   **Conservation Progress**: Regular updates on mangrove conservation efforts
-   **Community Events**: Announcements about upcoming local and conservation events
-   **Environmental Education**: Articles on environmental awareness and sustainability
-   **Local Initiatives**: Coverage of community-driven conservation projects
-   **Media Gallery**: High-quality images and videos showcasing the mangrove ecosystem

### 🔬 Research & Dedication

-   **Academic Opportunities**: Information about scientific research possibilities
-   **Conservation Tracking**: Progress monitoring for ongoing conservation projects
-   **Educational Resources**: Comprehensive materials for students and researchers
-   **Community Engagement**: Programs for local community involvement
-   **Data Visualization**: Interactive charts and graphs of conservation metrics

### 🤝 CSR Programs

-   **Corporate Partnerships**: Structured programs for business involvement
-   **Community Empowerment**: Initiatives for local economic development
-   **Educational Projects**: Environmental education programs for schools
-   **Sustainability Initiatives**: Long-term conservation planning and implementation
-   **Impact Assessment**: Metrics and reporting on CSR program outcomes

## 🛠 Tech Stack

### Backend Infrastructure

-   **PHP 8.2**: Core server-side programming language
-   **Laravel 11.x**: PHP framework for robust application development
-   **MySQL/MariaDB**: Relational database management system
-   **Laravel Breeze**: Lightweight authentication scaffolding

### Frontend Technologies

-   **Tailwind CSS**: Utility-first CSS framework for custom designs
-   **Alpine.js**: Lightweight JavaScript framework for UI interactions
-   **Livewire 3.x**: Full-stack framework for dynamic interfaces without JavaScript
-   **Blade Templates**: Laravel's templating engine for view rendering

### Admin & Management

-   **Filament 3.x**: Admin panel framework for Laravel
-   **CRUD Operations**: Streamlined content management system
-   **Role-Based Access Control**: Granular permission system
-   **Media Library**: Integrated media management

### Testing & Quality Assurance

-   **PHPUnit**: Testing framework for PHP applications
-   **Laravel Dusk**: Browser automation and testing tool
-   **PHP CS Fixer**: Code style standardization
-   **Laravel Telescope**: Debug assistant for development

### Deployment & DevOps

-   **Git**: Version control system
-   **GitHub Actions**: CI/CD pipeline automation
-   **Docker**: Containerization for consistent environments
-   **Laravel Forge/Vapor**: Simplified deployment management

## ⚙️ System Requirements

Ensure your development environment meets these prerequisites:

-   **PHP**: Version 8.1 or higher
-   **Composer**: Version 2.x or higher
-   **Node.js**: Version 16 or higher
-   **NPM**: Version 8 or higher
-   **Database**: MySQL 8.0+ or MariaDB 10.3+
-   **Server**: Nginx or Apache
-   **Git**: Latest stable version
-   **OS**: Any system supporting the above requirements (Linux/macOS preferred)

## 📥 Installation Guide

Follow these steps to set up the project locally:

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/patikang.git
cd patikang
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install JavaScript Dependencies

```bash
npm install
```

### 4. Configure Environment Variables

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Configure Database Connection

Update your .env file with your database credentials:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=patikang
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Database Migrations and Seeders

```bash
php artisan migrate --seed
```

### 7. Build Frontend Assets

```bash
npm run build
```

### 8. Link Storage Directory

```bash
php artisan storage:link
```

### 9. Start the Development Server

```bash
php artisan serve
```

Your application should now be running at http://localhost:8000.

### 🚀 Development Workflow

Local Development Environment
Start the development server with hot module replacement:

```bash
npm run dev
```

### Code Style and Formatting

Maintain consistent code style by running:

```bash
# Fix PHP code style issues
composer format

# Run static analysis
composer analyse
```

### Testing

Run automated tests to ensure application reliability:

```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit

# Run with coverage report
php artisan test --coverage
```

### Component Development

The project uses Livewire components for dynamic interfaces:

-   Components are located in `app/Livewire`
-   Views are stored in `resources/views/livewire`
-   Alpine.js enhances interactive elements

### Branching Strategy

Follow this git workflow:

-   `main`: Production-ready code
-   `develop`: Integration branch for features
-   `feature/*`: New features and enhancements
-   `bugfix/*`: Bug fixes
-   `release/*`: Release preparation

## 📂 Project Structure

The application follows Laravel's standard directory structure with some custom organization:

```bash
patikang/
├── app/ # PHP application code
│ ├── Console/ # Artisan commands
│ ├── Exceptions/ # Exception handlers
│ ├── Http/ # Controllers, middleware
│ ├── Livewire/ # Livewire components
│ │ ├── Components/ # Reusable UI components
│ │ └── Pages/ # Page-level components
│ ├── Models/ # Eloquent models
│ ├── Providers/ # Service providers
│ └── Services/ # Business logic services
├── config/ # Configuration files
├── database/ # Migrations, factories, seeders
├── public/ # Publicly accessible files
├── resources/ # Frontend assets
│ ├── css/ # Stylesheets
│ ├── js/ # JavaScript files
│ └── views/ # Blade templates
├── routes/ # Route definitions
├── storage/ # Application storage
├── tests/ # Automated tests
└── vendor/ # Composer dependencies
```

## 🧩 Component Architecture

The application uses a component-based architecture with Livewire and Alpine.js:

### Page Components

-   `Pages/Home.php`: Main landing page
-   `Pages/NewsList.php`: News listing with filters
-   `Pages/NewsDetail.php`: Individual news article view
-   `Pages/ProductList.php`: Product/tour listings with filters
-   `Pages/ProductDetail.php`: Product detail pages
-   `Pages/ResearchDedication.php`: Research opportunities page
-   `Pages/CsrProgram.php`: CSR program information
-   `Pages/AboutUs.php`: About us page

### Reusable UI Components

-   `Components/ProductSlideshow.php`: Interactive product carousel
-   Navigation components for site-wide menus
-   Form components for user input
-   Card components for consistent content display
-   Social sharing widgets for articles

## 📡 API Documentation

The system includes several API endpoints for frontend integration:

### Authentication

```bash
POST /api/auth/login # User login
POST /api/auth/register # New user registration
POST /api/auth/logout # User logout
GET /api/auth/user # Get authenticated user
```

### Tour Package APIs

```bash
GET    /api/tours          # List all tours
GET    /api/tours/{id}     # Get specific tour details
POST   /api/tours/booking  # Create tour booking
```

### Content APIs

```bash
GET    /api/news           # List news articles
GET    /api/news/{slug}    # Get specific news article
GET    /api/products       # List all products
```

## 🔄 Deployment Guidelines

### Production Environment Setup

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

### Server Requirements

-   PHP 8.1+ with required extensions
-   Nginx or Apache web server
-   MySQL 8.0+ or MariaDB 10.3+
-   SSL certificate (for HTTPS)
-   Sufficient disk space for media storage

### Deployment Checklist

-   [ ] Run all tests and ensure they pass
-   [ ] Update `.env` for production settings
-   [ ] Configure proper file permissions
-   [ ] Set up HTTPS and security headers
-   [ ] Configure database backups
-   [ ] Set up monitoring and error reporting
-   [ ] Update DNS records if needed

## 🔐 Security Considerations

### Data Protection

-   User data is encrypted at rest and in transit
-   Password hashing uses Laravel's secure defaults
-   CSRF protection is enabled for all forms
-   Input validation is implemented for all user inputs

### Authentication System

-   Role-based access control for administrative functions
-   Session timeout settings for security
-   Rate limiting on login attempts
-   Two-factor authentication for administrators

### Vulnerability Reporting

If you discover a security vulnerability, please email [hello@lemburmangrove.com](mailto:hello@lemburmangrove.com) rather than using the issue tracker. All security vulnerabilities will be addressed promptly.

## 👥 Contributing

We welcome contributions to the Lembur Mangrove Patikang project! To contribute:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

Please ensure your code follows our style guidelines and includes appropriate tests.

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 🌟 Special Thanks

We extend our gratitude to the following contributors and partners:

### Project Leadership

-   **Project Leader**: Lovenia Megumi Surjanto

### Communications Team

-   **Public Relations**: Imel Sausan Maryam, Winsten, Christabell Grace Chalin
-   **Social Media**: Cindy Celia Jennifer, Kezia Margaretha Chandra

### Event Management

-   **Event Coordinators**: Angel Tambarna Teresa, Rafael Putra Hulu

### Design & Media

-   **Visuals**: Maitriana, Luna Ardhagia Widodo
-   **Videography**: Evelyn Valencia

### Development Team Website V1

-   **Fullstack**: Jeremy Ansellino Gunawan
-   **Frontend**: Aldo Juan Edrick Jolin, Ivan Reynardo
-   **Backend**: Edward

### Development Team Website V2

-   **Fullstack**: Jeremy Ansellino Gunawan

---

&copy; 2023-2024 Lembur Mangrove Patikang. All rights reserved.

For inquiries, contact: [hello@lemburmangrove.com](mailto:hello@lemburmangrove.com)
