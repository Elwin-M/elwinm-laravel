#!/bin/bash

# Check if node_modules directory exists, if not, install Node.js dependencies
if [ ! -d "/var/www/html/node_modules" ]; then
    echo "Node modules not found. Installing Node.js dependencies..."
    npm install
fi

# Check for package-lock.json existence and create if missing
if [ ! -f "/var/www/html/package-lock.json" ]; then
    echo "package-lock.json not found. Generating..."
    npm install
fi

# Check if vendor directory exists, if not, install PHP dependencies using Composer
if [ ! -d "/var/www/html/vendor" ]; then
    echo "Vendor directory not found. Installing PHP dependencies..."
    composer install
fi

# Start the main process
exec "$@"
