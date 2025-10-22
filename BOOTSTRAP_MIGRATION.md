# Migration from Tailwind to Bootstrap

## Overview
This document describes the migration from Tailwind CSS to Bootstrap for the DESDI 2025 conference website.

## Changes Made

### 1. Removed Tailwind Dependencies
- Removed `@tailwindcss/vite` and `tailwindcss` from package.json
- Updated `vite.config.js` to remove Tailwind plugin
- Cleaned up `resources/css/app.css` to remove Tailwind imports

### 2. Updated Views to Use Bootstrap Classes
- **About Page**: Converted from Tailwind grid system to Bootstrap grid (`span6`, `span12`)
- **Call for Papers**: Updated to use Bootstrap components (`well`, `alert`, `btn`)
- **Committee Page**: Converted to Bootstrap layout with proper spacing
- **Home Page**: Already using Bootstrap (no changes needed)

### 3. Custom CSS Added
- Created `public/desdi-custom.css` with conference-specific styling
- Added custom classes for:
  - `.track-card` - Styling for conference tracks
  - `.committee-card` - Styling for committee members
  - `.date-card` - Highlighted date information
  - `.btn-desdi` - Custom button styling
  - `.alert-desdi` - Custom alert styling

### 4. Bootstrap Classes Used
- **Grid System**: `row-fluid`, `span6`, `span12`
- **Components**: `well`, `alert`, `btn`, `btn-large`
- **Utilities**: `text-center`, `lead`, `text-info`, `text-success`, `text-warning`

## File Structure
```
resources/views/
├── layouts/
│   └── app.blade.php (updated to include custom CSS)
├── about.blade.php (converted to Bootstrap)
├── call-for-papers.blade.php (converted to Bootstrap)
├── committee.blade.php (converted to Bootstrap)
└── home.blade.php (already using Bootstrap)

public/
└── desdi-custom.css (new custom CSS file)

resources/css/
└── app.css (cleaned up, no Tailwind imports)
```

## Benefits of Bootstrap Migration
1. **Consistency**: All pages now use the same Bootstrap framework
2. **Performance**: Removed unused Tailwind dependencies
3. **Maintainability**: Easier to maintain with single CSS framework
4. **Customization**: Custom CSS for conference-specific styling
5. **Responsive**: Bootstrap's responsive grid system

## Usage
The website now uses:
- Bootstrap v2.3.2 (already included in inspire.css)
- Custom CSS for DESDI 2025 specific styling
- No Tailwind CSS dependencies

## Development
To make changes:
1. Edit Bootstrap classes in Blade templates
2. Add custom styles to `public/desdi-custom.css`
3. No need to run Vite for CSS changes (static CSS files)

## Notes
- The site maintains the existing Bootstrap v2.3.2 framework
- Custom CSS is loaded after the main CSS for proper override
- All responsive features are maintained through Bootstrap classes
