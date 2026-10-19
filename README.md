# Panduan Instalasi & Pengoperasian Laravel 12

Dokumen ini berisi panduan langkah demi langkah untuk menginstal dan menjalankan proyek **Laravel 12** dari awal, termasuk konfigurasi lingkungan (environment) dan dependensi yang dibutuhkan.

## 🛠️ 1. Prasyarat Sistem (Prerequisites)

Sebelum menginstal Laravel 12, pastikan komputer Anda telah terpasang perangkat lunak dengan syarat minimum berikut:

### A. PHP (Versi Minimum 8.2)

Laravel 12 membutuhkan **PHP versi 8.2 hingga 8.4**.

* **Windows:** Menggunakan [Laravel Herd](https://herd.laravel.com/), [Laragon](https://laragon.org/), atau [XAMPP](https://www.apachefriends.org/) (dengan PHP 8.2+).
* **macOS:** Menggunakan [Laravel Herd](https://herd.laravel.com/) atau Homebrew (`brew install php`).
* **Linux (Ubuntu/Debian):**
  ```
  sudo apt update
  sudo apt install php8.2 php8.2-cli php8.2-fpm php8.2-curl php8.2-mysql php8.2-xml php8.2-mbstring php8.2-zip php8.2-bcmath php8.2-intl
  ```

Cek versi PHP yang terpasang:
```
php -v
```

### B. Composer

Composer digunakan untuk mengunduh kerangka kerja Laravel 12 dan *package* pendukungnya. Pastikan Composer Anda sudah versi terbaru:

* Unduh/instal dari [getcomposer.org](https://getcomposer.org/)
* Pembaruan Composer:
  ```
  composer self-update
  ```
* Cek versi Composer:
  ```
  composer --version
  ```

### C. Node.js & NPM

Node.js dan NPM digunakan untuk kompilasi aset *frontend* melalui Vite.

* Unduh dari [nodejs.org](https://nodejs.org/) (disarankan versi LTS).
* Cek instalasi:
  ```
  node -v
  npm -v
  ```

### D. Database Server

Laravel 12 secara bawaan (*default*) mendukung **SQLite** tanpa konfigurasi rumit, tetapi Anda juga bisa memilih:
* **SQLite** (bawaan, tanpa instalasi server terpisah)
* **MySQL / MariaDB**
* **PostgreSQL**

---

## 🚀 2. Cara Membuat Proyek Laravel 12 Baru

### Opsi A: Menggunakan Composer (Rekomendasi Utama)

Buka terminal/command prompt dan jalankan perintah berikut:

```
composer create-project laravel/laravel nama-proyek-anda
```

### Opsi B: Menggunakan Laravel Installer (CLI)

1. Pasang atau perbarui Laravel Installer ke versi terbaru:
   ```
   composer global require "laravel/installer"
   ```
2. Buat proyek baru dengan wizard interaktif (opsional memilih starter kit seperti React/Vue/Livewire):
   ```
   laravel new nama-proyek-anda
   ```

---

## ⚙️ 3. Konfigurasi Proyek

Masuk ke folder proyek yang baru dibuat:

```
cd nama-proyek-anda
```

### 1. Salin File Environment & Key

Jika membuat proyek dari `composer create-project` atau `laravel new`, file `.env` dan *application key* biasanya sudah terkonfigurasi secara otomatis. 

Jika mengkloning dari repository Git:
```
cp .env.example .env
php artisan key:generate
```
*(Di Windows Powershell: `copy .env.example .env`)*

### 2. Pengaturan Database pada File `.env`

Di Laravel 12, SQLite diaktifkan secara bawaan jika tidak diatur lain. Jika Anda ingin menggunakan MySQL, buka file `.env` dan sesuaikan:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=root
DB_PASSWORD=
```

> **Catatan:** Pastikan database `nama_database_anda` sudah dibuat di MySQL/phpMyAdmin Anda.

### 3. Jalankan Migrasi Database

```
php artisan migrate
```

### 4. Jalankan Aset Frontend (Vite)

Instal dependensi JavaScript dan jalankan server pengembangan frontend:

```
npm install
npm run dev
```

---

## 🎯 4. Menjalankan Server Lokal Laravel 12

Buka jendela terminal baru di folder proyek Anda dan jalankan server pengembangan:

```
php artisan serve
```

Aplikasi Anda kini siap diakses melalui browser di:
👉 **`http://127.0.0.1:8000`**

---

## 📌 Perintah Utama Artisan di Laravel 12

| Perintah | Fungsi |
| :--- | :--- |
| `php artisan serve` | Menjalankan server pengembangan lokal |
| `php artisan migrate` | Menjalankan migrasi database |
| `php artisan migrate:fresh --seed` | Mengosongkan database & mengisi data awal (*seeder*) |
| `php artisan make:model NamaModel -mcr` | Membuat Model, Migration, Controller, dan Resource |
| `php artisan route:list` | Menampilkan seluruh daftar *route* terdaftar |
| `php artisan config:clear` | Membersihkan *cache* konfigurasi aplikasi |
| `npm run build` | Mengompilasi aset frontend untuk mode produksi |

---

## 🛠️ Troubleshooting Ringkas

* **Masalah Versi PHP:** Pastikan versi PHP di terminal adalah 8.2 atau lebih tinggi (`php -v`).
* **Izin Akses Folder (Linux/macOS):**
  ```
  chmod -R 775 storage bootstrap/cache
  ```
* **Pembaruan Class Autoload:**
  ```
  composer dump-autoload
  ```
