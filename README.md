# UTS Sistem Informasi Perpustakaan - Laudia ANJELINA

Folder/project: `uts_laudia_anjelina_09010282529070`

## Menjalankan dengan XAMPP + Laravel
1. Extract ZIP dan buka folder project ini di VS Code.
2. Jalankan XAMPP. Pastikan **MySQL** aktif.
3. Buka phpMyAdmin: `http://localhost/phpmyadmin`
4. Buat database: `uts_laudia_anjelina_09010282529070`
5. Di terminal VS Code jalankan `composer install`.
6. Salin `.env.example` menjadi `.env`.
7. Jalankan `php artisan key:generate`.
8. Jalankan `php artisan migrate:fresh --seed`.
9. Jalankan `php artisan serve`.
10. Buka `http://127.0.0.1:8000`.

Login demo:
- Email: `admin@perpustakaan.test`
- Password: `password`

Catatan: XAMPP digunakan untuk MySQL/database. Aplikasi Laravel dijalankan dengan `php artisan serve`.
