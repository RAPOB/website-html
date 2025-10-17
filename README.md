# Reuben O'Brien's Personal Website

A modern, responsive personal website built with PHP, HTML5, and CSS3. Features a clean, professional design with dark/light theme support, smooth animations, and mobile-first responsive design.

## 🏗️ Technical Architecture

### Core Technologies
- **PHP**: Server-side rendering and dynamic content
- **HTML5**: Semantic markup with modern standards
- **CSS3**: Custom properties (CSS variables), Grid, Flexbox, animations
- **JavaScript**: Minimal client-side interactions (structured data, smooth scrolling)

### Design Philosophy
- **Mobile-first responsive design**
- **Progressive enhancement**
- **Semantic HTML structure**
- **CSS-only animations and interactions**
- **Performance optimized**

## 📁 File Structure & Functions

### `index.php` - Main Website File
**Purpose**: The core website file that renders the complete page
**Key Features**:
- PHP year variable for dynamic copyright
- Comprehensive meta tags for SEO and social sharing
- Structured data (JSON-LD) for search engines
- CSS Grid layout system
- Dark/light theme support via CSS custom properties
- Smooth scroll navigation
- Loading animations with staggered effects
- Mobile-responsive sidebar behavior

**CSS Architecture**:
```css
:root { /* CSS custom properties for theming */ }
@media (prefers-color-scheme: light) { /* Auto light theme */ }
@media (max-width: 900px) { /* Tablet breakpoint */ }
@media (max-width: 640px) { /* Mobile breakpoint */ }
```

**Layout System**:
- CSS Grid: Two-column layout (sidebar + main content)
- Sticky sidebar on desktop, static on mobile
- Responsive navigation that stacks on mobile

### `.cpanel.yml` - Deployment Configuration
**Purpose**: Automates deployment to cPanel hosting
**Function**: Uses rsync to sync files to `/home/reubenob/public_html`
**Excludes**: `.git` directory and the deployment file itself

```yaml
deployment:
  tasks:
    - export DEPLOYPATH=/home/reubenob/public_html
    - /bin/rsync -az --delete --exclude=".git" --exclude=".cpanel.yml" ./ $DEPLOYPATH
```

### `robots.txt` - Search Engine Directives
**Purpose**: Guides search engine crawlers
**Features**:
- Allows all crawlers access to all content
- References sitemap for better indexing
- Sets crawl delay for respectful crawling

### `sitemap.xml` - SEO Site Structure
**Purpose**: Helps search engines understand site structure
**Features**:
- Dynamic last modified dates using PHP
- Prioritized page importance
- Monthly update frequency for content sections

### `images/` Directory
**Purpose**: Static assets storage
**Key Files**:
- `cover.jpeg`: Profile photo and favicon
- `fsae.jpg`: Project images (with fallback handling)

### `preview.html` - Development Preview
**Purpose**: Static HTML version for local development testing
**Contains**: Full website markup without PHP processing

## 🎨 Design Features

### Responsive Layout System
```css
.grid {
  display: grid;
  grid-template-columns: 320px 1fr; /* Desktop: sidebar + content */
  gap: 24px;
}

@media (max-width: 900px) {
  .grid { grid-template-columns: 1fr; } /* Mobile: stacked layout */
}
```

### Theme System
- **CSS Custom Properties**: Enable dynamic theming
- **Auto Theme Detection**: Respects user's system preference
- **Consistent Color Palette**: Semantic color naming

### Animation System
```css
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
```
- **Staggered Loading**: Cards animate in sequence
- **Hover Effects**: Subtle transforms on interactive elements
- **Smooth Scrolling**: CSS scroll-behavior for navigation

### Mobile Optimizations
- **Sticky Sidebar Disabled**: Prevents content blocking on mobile
- **Responsive Navigation**: Horizontal scroll prevention
- **Touch-Friendly**: Appropriate tap targets and spacing
- **Compressed Images**: Smaller dimensions for mobile viewports

## 🔧 Component Architecture

### Profile Sidebar (`aside.profile`)
- **Avatar**: Dynamic image with fallback handling
- **Affiliation Links**: Acumino and University of Glasgow
- **Social Links**: Stacked vertical layout in styled bubble
- **Responsive Behavior**: Sticky on desktop, static on mobile

### Content Cards (`section.card`)
- **About**: Professional summary and achievements
- **Projects**: Visual project showcase with images
- **Publications**: Academic papers with direct links
- **Teams & Affiliations**: Professional connections
- **Contact**: Simple contact preference

### Navigation System
```html
<nav>
  <a href="#about">About</a>
  <!-- Smooth scroll to sections -->
</nav>
```

## 🚀 Performance Features

### SEO Optimization
- **Structured Data**: JSON-LD for rich search results
- **Open Graph**: Social media preview optimization
- **Meta Tags**: Comprehensive SEO meta information
- **Semantic HTML**: Proper heading hierarchy and landmarks

### Loading Performance
- **CSS-only Animations**: No JavaScript dependencies for UI
- **Optimized Images**: Responsive image sizing
- **Minimal Dependencies**: Self-contained CSS and minimal external resources

### Social Media Integration
```html
<meta property="og:title" content="Reuben O'Brien - Robotics Engineer & PhD Student">
<meta property="og:image" content="https://reubenobrien.com/images/cover.jpeg">
```

## 🔄 File Interactions

### Deployment Flow
1. **Development**: Edit files in local environment
2. **Git Commit**: Version control via Git
3. **cPanel Deployment**: `.cpanel.yml` triggers automatic sync
4. **Live Site**: Files copied to `public_html` directory

### Content Management
- **Profile Updates**: Edit `index.php` directly
- **Image Management**: Add files to `images/` directory
- **SEO Updates**: Modify meta tags and structured data in `index.php`

### Theme System Flow
```
User's system preference → CSS media query → CSS custom properties → Applied styles
```

## 🛠️ Development Setup

### Local Development
```bash
# Start PHP development server
php -S localhost:8000

# View at: http://localhost:8000/index.php
```

### File Organization
```
website-html/
├── index.php          # Main website
├── .cpanel.yml        # Deployment config
├── robots.txt         # SEO directives
├── sitemap.xml        # Site structure
├── images/            # Static assets
│   ├── cover.jpeg     # Profile photo/favicon
│   └── fsae.jpg       # Project images
└── preview.html       # Development preview
```

## 🎯 Key Features Summary

- **Responsive Design**: Mobile-first with breakpoints at 640px and 900px
- **Theme Support**: Dark/light mode with system preference detection
- **SEO Optimized**: Structured data, sitemap, and comprehensive meta tags
- **Performance**: CSS-only animations, minimal JavaScript, optimized assets
- **Accessibility**: Semantic HTML, proper ARIA labels, keyboard navigation
- **Professional Layout**: Clean typography, consistent spacing, visual hierarchy
- **Social Integration**: Open Graph and Twitter Card support
- **Deployment Ready**: Automated cPanel deployment configuration

## 📱 Browser Support
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile browsers (iOS Safari, Chrome Mobile)
- Progressive enhancement for older browsers
