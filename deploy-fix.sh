#!/bin/bash

# Website deployment troubleshooting script
echo "=== Website Deployment Troubleshooting ==="
echo "Date: $(date)"
echo

# Check if files exist in source directory
echo "1. Checking source files in website-html:"
if [ -f "index.php" ]; then
    echo "✓ index.php exists"
else
    echo "✗ index.php missing"
fi

if [ -f ".htaccess" ]; then
    echo "✓ .htaccess exists"
else
    echo "✗ .htaccess missing"
fi

if [ -f "robots.txt" ]; then
    echo "✓ robots.txt exists"
else
    echo "✗ robots.txt missing"
fi

if [ -d "images" ]; then
    echo "✓ images directory exists"
    echo "   Images found: $(ls images/ 2>/dev/null | wc -l)"
else
    echo "✗ images directory missing"
fi

echo

# Manual deployment commands (safer than Git deployment)
echo "2. Manual deployment to public_html:"
echo "Running manual copy commands..."

# Create target directory if needed
mkdir -p /home/reubenob/public_html/

# Copy files with explicit permissions
if [ -f "index.php" ]; then
    cp index.php /home/reubenob/public_html/
    chmod 644 /home/reubenob/public_html/index.php
    echo "✓ Copied index.php"
fi

if [ -f ".htaccess" ]; then
    cp .htaccess /home/reubenob/public_html/
    chmod 644 /home/reubenob/public_html/.htaccess
    echo "✓ Copied .htaccess"
fi

if [ -f "robots.txt" ]; then
    cp robots.txt /home/reubenob/public_html/
    chmod 644 /home/reubenob/public_html/robots.txt
    echo "✓ Copied robots.txt"
fi

if [ -f "sitemap.xml" ]; then
    cp sitemap.xml /home/reubenob/public_html/
    chmod 644 /home/reubenob/public_html/sitemap.xml
    echo "✓ Copied sitemap.xml"
fi

if [ -d "images" ]; then
    cp -r images /home/reubenob/public_html/
    chmod 755 /home/reubenob/public_html/images
    chmod 644 /home/reubenob/public_html/images/*
    echo "✓ Copied images directory"
fi

echo

# Fix permissions on public_html
echo "3. Fixing permissions:"
chmod 755 /home/reubenob/public_html/
echo "✓ Set public_html directory permissions to 755"

echo

# Check what was deployed
echo "4. Checking deployed files:"
if [ -f "/home/reubenob/public_html/index.php" ]; then
    echo "✓ index.php deployed ($(stat -c%s /home/reubenob/public_html/index.php) bytes)"
else
    echo "✗ index.php not found in public_html"
fi

if [ -f "/home/reubenob/public_html/.htaccess" ]; then
    echo "✓ .htaccess deployed"
else
    echo "✗ .htaccess not found in public_html"
fi

echo

echo "=== Deployment complete! ==="
echo "Visit https://reubenobrien.com to test"
