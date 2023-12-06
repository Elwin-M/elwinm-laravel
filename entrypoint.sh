#!/bin/bash

# Source the .env file to set environment variables (if it exists)
if [ -f ".env" ]; then
    echo "Loading environment variables from .env file..."
    source .env
fi

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

# Check APP_DEBUG value
if [ "$APP_DEBUG" = "true" ]; then
    # Run npm run dev for development
    echo "Running npm run dev..."
    npm run dev
else
    # Run npm run build for production
    echo "Running npm run build for production..."
    npm run build
fi

# Continue the rest of the process
exec "$@"
