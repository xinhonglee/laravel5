## POSS System

### 1. Composer Install
<code>
composer install
</code>

### 2. Additional Environment (.env)

CLOUDINARY_CLOUD_NAME=<br>
CLOUDINARY_API_KEY=<br>
CLOUDINARY_API_SECRET=<br>
CLOUDINARY_BASE_URL=<br>
CLOUDINARY_SECURE_URL=<br>
CLOUDINARY_API_BASE_URL=<br>
CLOUDINARY_USER_NAME=<br>

ADMIN_NAME=<br>
ADMIN_EMAIL=<br>
ADMIN_PASSWORD=<br>

### 3. Database Setup
<code>
php artisan migrate
</code>
<br>
<code>
php artisan db:seed
</code>

### 4. Passport Setup
<code>
php artisan passport:client --personal
</code>

### 5. NPM Setup

<code>
npm install
</code>
<br>

<code>
npm run watch
</code>