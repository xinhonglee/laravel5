## POSS System

### 1. Environment (.env)

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

### 2. Database Setup
<code>
php artisan migrate
</code>
<br>
<code>
php artisan db:seed
</code>

### 3. Passport Setup
<code>
php artisan passport:client --personal
</code>

###