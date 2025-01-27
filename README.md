# Events Management System

## Project URL
[GitHub Repository](https://github.com/geekquest/events.geekquest.mw.git)

---

## Prerequisites

Before setting up the application, ensure the following tools and services are installed on your system.

### 1. **Install PHP**: ^8.1

The application requires PHP version 8.1 or higher.

#### For Ubuntu:
```bash
sudo apt update
sudo apt install php8.1 php8.1-cli php8.1-common php8.1-mbstring php8.1-xml php8.1-curl php8.1-mysql php8.1-bcmath php8.1-zip php8.1-opcache php8.1-tokenizer
```

#### For macOS (using Homebrew):
```bash
brew install php@8.1
```

#### For Windows:
Download the latest PHP version from the [PHP Windows downloads page](https://windows.php.net/download/), extract the files, and configure your system’s PATH variable to include the PHP directory.

Once installed, check the PHP version:
```bash
php --version
```

---

### 2. **Install Composer** (PHP Dependency Manager)

Composer is required to manage the PHP dependencies for the application.

#### For Linux and macOS:
Run the following command to install Composer globally:
```bash
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

#### For Windows:
Download and install Composer from the [official Composer website](https://getcomposer.org/download/).

To verify installation:
```bash
composer --version
```

---

### 3. **Install Node.js**: ^16.x or Higher

Node.js is required for the JavaScript-based assets and frontend build tools. To install Node.js:

#### For Ubuntu:
```bash
curl -sL https://deb.nodesource.com/setup_16.x | sudo -E bash -
sudo apt install -y nodejs
```

#### For macOS (using Homebrew):
```bash
brew install node@16
```

#### For Windows:
Download the latest stable version of Node.js from the [official Node.js website](https://nodejs.org/en/download/), and run the installer.

To verify installation:
```bash
node --version
npm --version
```

---

### 4. **Install NPM or Yarn**: Latest Version

NPM is included with Node.js. If you prefer using Yarn, you can install it as an alternative package manager.

#### For NPM:
NPM comes bundled with Node.js, so no additional installation is required if you've installed Node.js.

To verify NPM installation:
```bash
npm --version
```

#### For Yarn:
To install Yarn globally:
```bash
npm install -g yarn
```

Verify Yarn installation:
```bash
yarn --version
```

---

### 5. **Install Database**: MySQL or Equivalent

The application requires a MySQL database (or MariaDB/PostgreSQL as alternatives). Install the database management system:

#### For Ubuntu:
```bash
sudo apt update
sudo apt install mysql-server
```

#### For macOS (using Homebrew):
```bash
brew install mysql
```

#### For Windows:
Download and install MySQL from the [MySQL Installer for Windows](https://dev.mysql.com/downloads/installer/).

After installation, run the following command to start MySQL:
```bash
sudo service mysql start
```

Verify MySQL installation:
```bash
mysql --version
```

---

### 6. **Install Git** (Version Control)

Git is necessary to clone the repository and manage version control.

#### For Ubuntu:
```bash
sudo apt update
sudo apt install git
```

#### For macOS (using Homebrew):
```bash
brew install git
```

#### For Windows:
Download and install Git from the [official Git website](https://git-scm.com/download/win).

To verify installation:
```bash
git --version
```

---

## Getting Started

### 1. Clone the Repository
```bash
git clone [https://github.com/geekquest/events.geekquest.mw.git](https://github.com/geekquest/events.geekquest.mw.git)
cd events.geekquest.mw
```

### 2. Install Dependencies
- **Composer Dependencies**:
  ```bash
  composer install
  ```
- **Node.js Dependencies**:
  ```bash
  npm install
  ```

### 3. Set Up Environment Variables
Copy the `.env.example` file to `.env`:
```bash
cp .env.example .env
```
Update the `.env` file with your application and database configuration.

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Run Migrations and Seeders
```bash
php artisan migrate --seed
```

### 6. Build Frontend Assets
For development:
```bash
npm run dev
```
For production:
```bash
npm run build
```

---

## Features and Tools

### Backend
- **Laravel Framework**: ^10.10
- **Authentication**: Laravel Jetstream, Sanctum
- **Roles and Permissions**: Spatie Laravel Permission
- **Image Processing**: Intervention Image
- **PDF Generation**: Barryvdh Laravel DomPDF
- **QR Code Generation**: Simple QrCode
- **Excel Exports**: Maatwebsite Excel
- **Honeypot Security**: Spatie Laravel Honeypot
- **Flash Messages**: SweetAlert

### Frontend
- **TailwindCSS**: ^3.1.0
- **Livewire**: ^3.0 for dynamic components
- **Vite**: ^5.0.0 for fast builds and hot reloading

---

## Development

### Running the Application
Start the development server:
```bash
php artisan serve
```

### Running Tests
Run the unit and feature tests:
```bash
php artisan test
```

---

## Deployment

1. Ensure all dependencies are installed using `composer install --no-dev` and `npm ci`.
2. Build the frontend assets for production:
   ```bash
   npm run build
   ```
3. Set up the web server (e.g., Nginx, Apache) to point to the `public` directory.
4. Configure the environment variables in `.env`.

---

## Scripts

### Composer Scripts
- `post-autoload-dump`: Runs `artisan package:discover`.
- `post-update-cmd`: Publishes assets after composer updates.
- `post-root-package-install`: Copies the `.env.example` file to `.env`.
- `post-create-project-cmd`: Generates the application key.

### NPM Scripts
- `dev`: Runs Vite in development mode.
- `build`: Builds assets for production.

---

## Contributing
Contributions are welcome! Feel free to fork the repository and submit a pull request.

---

## License
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).
