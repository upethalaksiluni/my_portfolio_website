#!/bin/bash

set -e

echo "🚀 Starting deployment process..."

# Variables
APP_NAME="portfolio-website"
AWS_REGION="us-east-1"
EB_ENVIRONMENT="portfolio-production"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Functions
log_info() {
    echo -e "${GREEN}[INFO]${NC} $1"
}

log_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

log_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# Check if AWS CLI is installed
if ! command -v aws &> /dev/null; then
    log_error "AWS CLI is not installed. Please install it first."
    exit 1
fi

# Check if EB CLI is installed
if ! command -v eb &> /dev/null; then
    log_error "Elastic Beanstalk CLI is not installed. Please install it first."
    exit 1
fi

# Install dependencies
log_info "Installing PHP dependencies..."
composer install --no-interaction --optimize-autoloader --no-dev

log_info "Installing Node.js dependencies..."
npm install

log_info "Building frontend assets..."
npm run build

# Create deployment package
log_info "Creating deployment package..."
zip -r deployment-$(date +%Y%m%d-%H%M%S).zip . \
    -x "node_modules/*" \
    -x ".git/*" \
    -x "tests/*" \
    -x "storage/logs/*" \
    -x ".env" \
    -x "*.md" \
    -x "AWS-Deployment/docker-compose.yml"

# Deploy to Elastic Beanstalk
log_info "Deploying to AWS Elastic Beanstalk..."
eb deploy $EB_ENVIRONMENT

log_info "✅ Deployment completed successfully!"
