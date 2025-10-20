# ICFT 2025 - International Conference on Future Technology

A Laravel 11 web platform for an academic conference/journal site inspired by ICCIP and ICFT designs.

## Features

### ✅ Completed
- **Responsive Homepage** - ICCIP-style design with hero section, important dates, topics, and call-to-action
- **Static Pages** - About, Call for Papers, Committee, Submission, Contact
- **Clean Architecture** - MVC structure with organized controllers and views
- **Tailwind CSS** - Modern, responsive styling with professional design
- **Navigation** - Mobile-friendly header with smooth navigation
- **Footer** - Comprehensive footer with links, important dates, and contact info

### 🚀 Ready for Future Development
- **Admin Dashboard** - Prepared structure for conference management
- **Authentication System** - Login/Register controllers ready for implementation
- **Paper Management** - Models and controllers for paper submission and review
- **User Management** - Admin panel for user management
- **Publications Module** - Structure for published papers and proceedings

## Project Structure

```
app/
├── Http/Controllers/
│   ├── Admin/           # Admin panel controllers
│   ├── Auth/            # Authentication controllers
│   ├── Publications/    # Publications module
│   └── [Static Pages]   # Home, About, etc.
├── Models/
│   ├── Paper.php        # Paper model
│   ├── Review.php       # Review model
│   └── User.php         # User model (Laravel default)
└── ...

resources/views/
├── layouts/
│   ├── app.blade.php    # Main layout
│   └── partials/        # Header, footer components
├── admin/               # Admin panel views
├── auth/                # Authentication views
├── publications/        # Publications views
└── [Static Pages]       # Home, about, etc.

database/migrations/
├── create_papers_table.php
├── create_reviews_table.php
└── [Laravel defaults]
```

## Getting Started

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & NPM
- Laravel 11

### Installation

1. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

2. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Database Setup**
   ```bash
   php artisan migrate
   ```

4. **Build Assets**
   ```bash
   npm run build
   # or for development:
   npm run dev
   ```

5. **Start Development Server**
   ```bash
   php artisan serve
   ```

## Pages Overview

### Homepage (`/`)
- Hero section with conference branding
- Important dates timeline
- Conference topics grid
- Call-to-action sections

### About (`/about`)
- Mission and vision
- Conference highlights
- Program overview
- Committee information

### Call for Papers (`/call-for-papers`)
- Important dates
- Topics of interest
- Submission guidelines
- Review process information

### Committee (`/committee`)
- General chairs
- Program chairs
- Track chairs
- Advisory board

### Submission (`/submission`)
- Paper submission form
- Author information
- File upload
- Terms and conditions

### Contact (`/contact`)
- Contact form
- Contact information
- FAQ section
- Social media links

## Future Development

### Admin Panel
- Dashboard with statistics
- Paper management
- User management
- Review assignment
- Conference settings

### Authentication
- User registration/login
- Password reset
- Email verification
- Role-based access control

### Paper Management
- Paper submission workflow
- Review assignment
- Review process
- Acceptance/rejection workflow

### Publications
- Published papers listing
- Search functionality
- Paper details
- Download capabilities

## Design Philosophy

- **Academic Professional** - Clean, scholarly design appropriate for academic conferences
- **Responsive** - Mobile-first approach with Tailwind CSS
- **Accessible** - Semantic HTML and proper contrast ratios
- **Performance** - Optimized assets and efficient code structure
- **Maintainable** - Clean code with proper separation of concerns

## Technology Stack

- **Backend**: Laravel 11 (PHP 8.2+)
- **Frontend**: Blade templates with Tailwind CSS
- **Database**: SQLite (default), easily configurable for MySQL/PostgreSQL
- **Build Tools**: Vite with Laravel plugin
- **Styling**: Tailwind CSS v4

## Contributing

This project follows Laravel conventions and best practices:

1. Use descriptive commit messages
2. Follow PSR-12 coding standards
3. Write tests for new features
4. Update documentation as needed
5. Use meaningful variable and function names

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For questions or support, please contact the development team or refer to the Laravel documentation.

---

**Built with ❤️ for the academic community**
