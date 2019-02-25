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

### 5. Redis Setup
Mac OS
- Install
<br>
<code>
brew install redis
</code>
<br>
- Start
<br>
<code>
redis-server
</code>
<br>

- Launch Redis on computer starts
<br>
<code>
ln -sfv /usr/local/opt/redis/*.plist ~/Library/LaunchAgents
</code>
<br>

- Start Redis server via “launchctl”
<br>
<code>
launchctl load ~/Library/LaunchAgents/homebrew.mxcl.redis.plist
</code>
<br>

Ubuntu

- Install
<br>
<code>
apt-get update
</code>
<br>
<code>
apt-get install redis-server
</code>
<br>
- Start 
<br>
<code>
redis-server
</code>

### 6. NPM Setup
<code>
npm install
</code>
<br>

<code>
npm run watch
</code>