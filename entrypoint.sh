#!/bin/bash

# Check if node_modules directory exists, if not, install dependencies
if [ ! -d "/var/www/html/node_modules" ]; then
    echo "Node modules not found. Installing dependencies..."
    npm install
fi

# Check for package-lock.json existence and create if missing
if [ ! -f "/var/www/html/package-lock.json" ]; then
    echo "package-lock.json not found. Generating..."
    npm install
fi

# Check if vendor directory exists, if not, install dependencies
if [ ! -d "/var/www/html/vendor" ]; then
    echo "Vendor not found. Installing dependencies..."
    composer update
fi

# Start the main process
exec "$@"
