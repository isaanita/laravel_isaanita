# Laravel Isaanita Project

## Deskripsi
Project ini dibuat menggunakan **Laravel 10**, **jQuery**, dan **Bootstrap**.  
Fitur utama:

- Halaman login menggunakan **username**, bukan email.
- Halaman setelah login adalah CRUD:
  1. **Data Rumah Sakit**  
     - Kolom: ID, Nama Rumah Sakit, Alamat, Email, Telepon
  2. **Data Pasien**  
     - Kolom: ID, Nama Pasien, Alamat, No Telpon, ID Rumah Sakit  
     - Relasi pasien dengan rumah sakit
     - Dropdown filter pasien berdasarkan Rumah Sakit
     - Tombol delete

- Migrations dan seed disertakan sehingga database bisa dibuat otomatis.
- Struktur project sesuai standar Laravel.

---

## Requirement
- PHP >= 8.2.10
- Laravel 12.41.1
- MySQL
- Composer

---

## Username & Password
- username: admin
- password: password123

---

## Installasi

1. Clone repository:
```bash
git clone https://github.com/isaanita/laravel_isaanita
cd laravel_isaanita