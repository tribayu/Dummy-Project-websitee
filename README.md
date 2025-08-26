

# Product Management - Laravel Dummy Project

Proyek ini adalah contoh aplikasi Laravel sederhana untuk latihan **Landing Page, Autentikasi, dan CRUD Produk**.
Dibuat sebagai fondasi awal pengembangan aplikasi Laravel dalam tim.



## Cara Instalasi

Clone repository

```bash
git clone https://github.com/username/CRUD_PRODUK.git
cd CRUD_PRODUK
```

Install dependencies

```bash
composer install
npm install && npm run build
```

Copy file `.env`

```bash
cp .env.example .env
```

Generate key

```bash
php artisan key:generate
```

Atur database di `.env`. Contoh menggunakan MySQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_dummy
DB_USERNAME=root
DB_PASSWORD=
```

Jalankan migrasi & seeder

```bash
php artisan migrate --seed
```

---

## Cara Menjalankan Proyek

```bash
php artisan serve
```

Akses di browser: [http://localhost:8000](http://localhost:8000)


## 📂 Struktur Folder Penting

```bash
CRUD_PRODUK/
├── app/
│   ├── Http/Controllers/      # Controller (ProdukController, ProfileController, Auth, dll.)
│   ├── Models/                # Model (Produk, User)
│   └── Providers/             # AppServiceProvider
│
├── database/
│   ├── migrations/            # File migrasi tabel (users, produk, dll.)
│   ├── seeders/               # Seeder untuk dummy data (ProdukSeeder, DatabaseSeeder)
│   └── database_dumy/         # SQL dummy (laravel_dummy.sql)
│
├── public/                    # File publik (favicon, robots.txt, index.php)
│   └── images/anim.gif        # Animasi GIF untuk landing page
│
├── resources/
│   ├── views/                 # Blade templates
│   │   ├── auth/              # Login, Register, Forgot Password, dll.
│   │   ├── components/        # Layouts, navigation
│   │   ├── produk/            # CRUD Produk (create, edit, index)
│   │   └── profile/           # Dashboard & welcome page
│   ├── css/                   # Tailwind / custom css
│   └── js/                    # File js
│
├── routes/                    # Routing aplikasi (web.php, auth.php)
├── tests/                     # Unit & Feature test (ProdukTest, ProfileTest)
└── README.md


## Sample User Login

Seeder membuat akun dummy otomatis, gunakan data berikut untuk mencoba login:

Email: bayu@gmail.com
Password: bayu@#$%




## Tech Stack

* **Backend:** Laravel 11+
* **Frontend:** Blade + TailwindCSS
* **Database:** MySQL
* **Auth:** Laravel Breeze

