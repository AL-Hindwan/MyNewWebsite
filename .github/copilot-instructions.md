# Copilot Instructions for AI Agents

## Project Overview
- This is a Laravel-based web application, following standard Laravel MVC architecture.
- Key directories: 
  - `app/Http/Controllers/` for controllers
  - `resources/views/` for Blade templates
  - `routes/web.php` for web routes
  - `public/` for static assets (CSS, JS, images)
  - `database/migrations/` for schema changes
  - `database/seeders/` for initial data

## Routing & Controllers
- All web routes are defined in `routes/web.php` using controller classes (e.g., `homecontroller`, `servicescontroller`).
- Route names are set for navigation (e.g., `route('services')`).
- Controller methods match route names (e.g., `home`, `services`, `MedicalStaff`, `news`, `deatails`).
- Watch for typos in method names (e.g., `deatails` instead of `details`).

## Views & Assets
- Blade templates are in `resources/views/`. Use `@include` for partials (e.g., `compnant.header`, `compnant.footer`).
- Static assets are referenced via `{{ asset('...') }}` and stored in `public/css/`, `public/js/`, `public/images/`.
- Tailwind CSS and AOS (Animate On Scroll) are used for styling and animation.

## Developer Workflows
- Use `php artisan serve` to run the development server.
- Use `php artisan migrate` for database migrations.
- Use `php artisan db:seed` to seed the database.
- Run tests with `php artisan test` or `vendor/bin/phpunit`.
- Debugging: Set up Xdebug with VS Code's PHP Debug extension. Breakpoints work in controllers and routes.

## Conventions & Patterns
- Controller and route names use camelCase, but some files use lowercase (e.g., `homecontroller`).
- Blade partials are in `resources/views/compnant/` (note: typo, should be `component`).
- Data flows from controllers to views via compact variables or associative arrays.
- Use route names for navigation links in views.

## Integration Points
- No custom service boundaries or microservices detected; all logic is in Laravel controllers/models.
- External JS/CSS libraries are loaded from `public/`.
- No API routes or SPA patterns detected; all navigation is server-rendered.

## Examples
- Route definition: `Route::get('/services', [servicescontroller::class, 'services'])->name('services');`
- Blade asset usage: `<link rel="stylesheet" href="{{asset('/css/style.css')}}" />`
- Navigation: `<a href="{{route('services')}}">رؤية المزيد</a>`

## Key Files
- `routes/web.php`: Main route definitions
- `app/Http/Controllers/`: Controller logic
- `resources/views/`: Blade templates
- `public/`: Static assets

---

If any conventions or workflows are unclear, please ask for clarification or provide examples from the codebase.
