E-Kesehatan Ibu & Anak – Edukasi & Monitoring Sederhana

Deskripsi Proyek

Website E-Kesehatan Ibu & Anak ini dibuat untuk membantu proses edukasi, pemantauan kunjungan, dan pencatatan pemeriksaan dasar*antara bidan/admin dan ibu/pasien.
Sistem ini menyediakan konten edukatif, jadwal kunjungan terstruktur, serta pencatatan data yang lebih aman dan efisien dibandingkan metode manual.

Pembagian Tugas anggota Kelompok:
Frontend: Azizah, Fauzan, Destri
Backend: Dimas Aprilino, Elghiariel, Dinda
Style Css: Fauzan


Tujuan

* Memberikan akses edukasi kesehatan ibu & anak secara mudah dan informatif.
* Mempermudah pencatatan kunjungan dan pemeriksaan pasien.
* Mendukung proses digitalisasi layanan dasar kesehatan dengan sistem aman dan terstruktur.


Fitur Utama

* Manajemen Pengguna (bidan/admin dan ibu/pasien)
* CRUD Data: pasien, kunjungan, artikel, reminder
* Validasi Form Ketat (client & server)
* Artikel Edukasi dengan struktur HTML5 Semantik
* Jadwal Kunjungan+ notifikasi sederhana
* Login/Logout Aman: `password_hash`, `password_verify`, `session_regenerate_id`
* Interaksi DOM: modal, konfirmasi, toast
* Layout responsif menggunakan Flex/Grid ≥ 3 breakpoint


Teknologi yang Digunakan

* Frontend:HTML5 Semantic, CSS3 (Flexbox/Grid), JavaScript (DOM & Events)
* Backend:PHP (Prepared Statements)
* Database: MySQL/MariaDB
* Keamanan: Session + Cookies, Password Hashing, Validasi Input
* Metode HTTP: GET/POST

Struktur Database (Ringkas)

* users(id, role, name, email, password_hash)
* patients (id, user_id, usia, alamat, data pemeriksaan)
* visits (id, patient_id, tanggal, catatan)
* articles (id, judul, konten, tanggal)
* reminders (id, patient_id, pesan, tanggal_kirim)

Alur Pembuatan Proyek

1. Analisis kebutuhan & penentuan fitur inti
2. Mendesain UI/UX responsif dengan layout Grid/Flex
3. Membuat struktur database & backend CRUD aman
4. Membangun frontend + validasi form
5. Integrasi frontend–backend (GET/POST)
6. Pengujian fungsionalitas & keamanan session
7. Deployment & dokumentasi
Cara Instalasi

1. Clone repository
2. Import file database `.sql` ke MySQL
3. Atur koneksi database pada `/config/database.php`
4. Jalankan project melalui local server (XAMPP/Laragon)

Lisensi

Project ini bebas digunakan untuk kebutuhan pembelajaran dan pengembangan.
