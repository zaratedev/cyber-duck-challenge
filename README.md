# Cyber Duck Challenge

# Installation

### Clone this repository

```
git clone https://github.com/zaratedev/cyber-duck-challenge.git

cd cyber-duck-challenge
```

### Install composer dependencies

```
composer install
```

### Clone .env
```
cp .env.example .env 
```

### Key generate
```
php artisan key:generate
```

### Setup database

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cyber-duck-challenge
DB_USERNAME=root
DB_PASSWORD=
```

### Run migrate & seeders

```
php artisan migrate --seed
```
