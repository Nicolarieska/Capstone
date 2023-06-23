# GoSakit by C23-M4010
### Anggota Tim :
- F015XB453 - Akmal Aliffandhi Anwar
- F059XB172 - Nicola Arieska Fonda
- F014XB015 - Jeremy William Siahaan
- F004XB063 - Fikri Azkia'i Zamzam

### Detail
- Paket Pembelajaran : Front-end dan Back-end
- Tema yang dipilih : Kesejahteraan Penduduk
- Judul Proyek : GoSakit


### Setup Project

1. Pastikan sudah tersedia XAMPP dan Composer pada perangkat anda

2. Unduh project atau copy dari github 

3. Buka project yang sudah ada dengan Visual Studio Code pada perangkat lalu inisiasi Composer pada project dengan masuk ke terminal dan ketik perintah 
     ```bash
    composer install

4. Lakukan generate file .env pada terminal dengan perintah 
    ```bash
    cp .env.example .env
    php artisan key:generate

5. Buka XAMPP dan aktifkan apache dan MySQL serta buat database baru pada phpmyadmin yang disesuaikan dengan nama database di file .env

6. Lakukan migrasi database pada terminal dengan mengetikkan perintah 
     ```bash
    php artisan migrate

7. Jalankan data seeder admin agar dapat login sebagai admin nantinya dengan mengetik perintah pada terminal
    ```bash
    db:seed --class=AdminSeeder

8. Run project dengan mengetik pada terminal perintah
   ```bash
    php artisan serve

9. Buka browser dan kunjungi halaman website http://127.0.0.1:8000 

10. Jika ingin melihat akun admin agar dapat login sebagai admin, dapat mengunjungi folder app-> database->seeders->AdminSeeder.php. Dan jika ingin melakukan CRUD, bisa langsung pada halaman dashboard admin setelah login sebagai admin 

## User

### Login
![image](https://github.com/Nicolarieska/Capstone/assets/90572183/aa44639d-515b-437c-8a83-54de3c4676f4)

Halaman login berfungsi untuk user yang telah mempunyai akun.


### Register
![image](https://github.com/Nicolarieska/Capstone/assets/90572183/c09ad34a-61a2-4fcd-ac40-e0b3b05be89f)

Halaman register berfungsi untuk user yang belum mempunyai akun, pada halaman ini user diminta untuk mengisi email dan password dalam pembuatan akun.


### Data Pribadi
![image](https://github.com/Nicolarieska/Capstone/assets/90572183/f954ab34-13dc-4d97-9266-f5cc084ebf23)

Pada halaman register bagian data pribadi, user diminta untuk mengisi data pribadi.

### Nomor Rekam Medis
![image](https://github.com/Nicolarieska/Capstone/assets/90572183/4141a6bb-563e-49a1-9d04-62056395a0be)

Selanjutnya di bagian ini user bisa mengisi nomor rekam medis apabila telah mempunyai nomor rekam medis dengan mendaftar offline dan belum mempunyai akun dan hanya opsional saja pada halaman ini.

### Dashboard (after login)
![image](https://github.com/Nicolarieska/Capstone/assets/80694693/4892ab23-07dc-4068-a060-8270b0f3be0b)

Setelah login anda akan dihadapkan dengan tampilan seperti ini,setelah itu tekan tombol pendaftaran pada navbar

### Halaman Pendaftaran
![image](https://github.com/Nicolarieska/Capstone/assets/80694693/fa5f6cce-f1bd-483c-b20b-1797ee97d6c3)

Halaman ini berfungsi sebagai sarana pemilihan POLI yang telah di sediakan
### Daftar Dokter
![image](https://github.com/Nicolarieska/Capstone/assets/80694693/b82ed14f-515b-4098-ad0b-adf18be6028e)

Setelah memilih Poli user diharuskan untuk memilih dokter yang ingin mereka temui

### Detail Halaman Dokter
![image](https://github.com/Nicolarieska/Capstone/assets/80694693/69e1c770-a0ec-438d-bafa-00697dcb6efd)

Halaman ini berisi biografi singkat beserta beberapa pilihan jadwal yang telah disediakan. Pilih salah satu jadwal untuk melakukan reservasi

### Konfirmasi Akhir
![image](https://github.com/Nicolarieska/Capstone/assets/80694693/a4127f50-7716-4fd9-8403-1530d41262bd)

Halaman ini berfungsi sebagai halaman konfirmasi akhir sebelum user membuat sebuah reservasi

### Halaman Riwayat
![image](https://github.com/Nicolarieska/Capstone/assets/80694693/aa294231-cd49-418c-ab4a-e16cb18922e7)

Setiap reservasi yang telah user pilih akan tampil di halaman ini

## Admin

### Dashboard
![image](https://github.com/Nicolarieska/Capstone/assets/90572183/3fd5216e-06a0-4a90-aa75-1055643b6b05)

Halaman dashboard berfungsi untuk melihat statistik data admin, dokter, pasien, dan poli yang ada di website.

### Data Admin
![image](https://github.com/Nicolarieska/Capstone/assets/90572183/2aa8d458-1d85-4331-96c5-8f56df186a37)

Halaman data admin berfungsi untuk melihat nama-nama dan email yang tersambung kepada website ini sebagai admin.

### Data Dokter
![image](https://github.com/Nicolarieska/Capstone/assets/90572183/6b78040b-f86e-437d-ba1a-1b70a2bb1ac3)
![image](https://github.com/Nicolarieska/Capstone/assets/90572183/6c069f68-79c1-4482-8b8c-9e00abc08c31)

Halaman data dokter berfungsi untuk melihat nama-nama dokter yang tersedia pada rumah sakit. Di dalam halaman ini, terdapat opsi dimana admin dapat menambah, mengedit, dan menghapus data dokter.

### Data Pasien
![image](https://github.com/Nicolarieska/Capstone/assets/90572183/d7be39f3-dcad-4683-84bd-61032877c22c)

Halaman data pasien berfungsi untuk melihat data pasien yang terdaftar pada aplikasi GoSakit. Dilihat dari gambar, terdapat dua status pasien yang berbeda, yaitu "terverifikasi" dan "blocked". Status "blocked" akan otomatis diberikan pada user yang baru saja mendaftarkan akunnya pada aplikasi dan belum diverifikasi datanya oleh admin.

![image](https://github.com/Nicolarieska/Capstone/assets/90572183/2aa2bdae-7f63-450c-9063-14796d772702)

Kemudian di dalam halaman detail pasien, terdapat biodata dari pasien, serta tombol "kirim notifikasi" yang fungsi utamanya adalah mengirim pesan whatsapp ke nomor pasien ketika akun pasien telah terverifikasi. Namun, juga bisa digunakan untuk mengirim pesan-pesan lain.

### Data Poli
![image](https://github.com/Nicolarieska/Capstone/assets/90572183/241752f5-dd16-405e-999b-4e4e0d29f61d)
![image](https://github.com/Nicolarieska/Capstone/assets/90572183/9822c28d-cfbd-4bac-9f62-98e28cf79231)
Halaman data poli berfungsi untuk melihat nama-nama poli yang tersedia pada rumah sakit. Di dalam halaman ini, terdapat opsi dimana admin dapat menambah, mengedit, dan menghapus data poli.
