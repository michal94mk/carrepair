# Car Repair - Auto Service Website

A modern, responsive website for "Car Repair" auto service shop, built with clean PHP.

## Features

- Home page with full-screen carousel, about us section, services, and contact form
- About Us page with company information and history
- Services page with detailed service offerings and subpages for each service
- Interactive gallery with filtering and modal image viewer
- Contact form with validation
- Contact page with company details and map integration
- Fully responsive design (mobile, tablet, desktop)
- Bootstrap-based UI with custom enhancements
- Dynamic content loading via AJAX

## Technologies

- HTML5
- CSS3
- JavaScript (vanilla)
- PHP 7+
- Bootstrap 5
- Font Awesome icons
- jQuery (minimal usage)

## Project Structure

```
/carrepair
├── config/                # Configuration files
│   └── config.php         # Main configuration
├── css/                   # CSS styles
│   └── style.css          # Main stylesheet
├── images/                # Images and graphics
├── includes/              # PHP include files
│   ├── functions.php      # Helper functions
│   ├── init.php           # Initialization file
│   └── messages.php       # Message handling
├── js/                    # JavaScript scripts
│   ├── main.js            # Main JavaScript file
│   └── ajax-loader.js     # AJAX content loading
├── layouts/               # Page layouts
│   └── layout.php         # Main template
├── pages/                 # Subpages
│   ├── 404.php            # Error page
│   ├── home.php           # Home page
│   ├── aboutus.php        # About us
│   ├── services.php       # Services overview
│   ├── services/          # Individual service pages
│   │   ├── mechanical.php # Mechanical repairs
│   │   ├── maintenance.php# Maintenance services
│   │   └── ...            # Other service pages
│   ├── gallery.php        # Gallery
│   ├── contact.php        # Contact
│   └── send_form.php      # Form handler
├── index.php              # Entry file
└── README.md              # Documentation
```

## Installation Instructions

1. Clone or download the repository
2. Place files on a server with PHP 7+ support
3. Ensure the directory is accessible by the web server
4. Open the site in a browser

## Development Guidelines

### Adding New Pages

To add a new page:
1. Create a PHP file in the `pages/` directory
2. Add the route to the page in `includes/functions.php` (in the `loadPage()` function)
3. Add a link to the navigation in `layouts/layout.php`

### Styling

The project uses Bootstrap 5 with custom styling in `css/style.css`. Key custom components:
- Custom carousel styling and animations
- Service cards with hover effects
- Gallery with filtering and modal viewer
- Custom navigation with active state indicators
- Responsive adjustments for all screen sizes

### JavaScript

Main scripts are in `js/main.js` with the following functionality:
- Bootstrap component initialization
- Form validation
- Smooth scrolling
- Gallery filtering and modal controls
- Mobile navigation handling

## Performance Optimizations

- Minimal JavaScript dependencies
- Optimized image loading
- AJAX content loading for smoother page transitions
- CSS transitions instead of JavaScript animations where possible

## Browser Compatibility

The website is compatible with:
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Android Chrome)

## Author

Created as a demonstration of PHP programming skills and responsive web design capabilities.

## License

This project is available for personal and educational use.