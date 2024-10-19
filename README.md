
# 📚 Komik Apps by RinasCode  

Komik Apps adalah aplikasi berbasis web yang mendukung pengelolaan data komik secara interaktif. Aplikasi ini menawarkan fitur **CRUD lengkap** dengan validasi, **upload file** untuk gambar sampul, **slug** otomatis untuk URL yang ramah pengguna, dan beberapa fitur tambahan seperti **pagination**, **searching**, dan manajemen database menggunakan **seeder, faker**, dan **migration**. Aplikasi ini dibangun dengan pendekatan **OOP (Object-Oriented Programming)** untuk menjaga kualitas dan keteraturan kode.

## 🔧 Teknologi yang Digunakan
- **PHP 8.x**  
- **CodeIgniter 4**  
- **MySQL Database**  
- **Bootstrap** untuk antarmuka pengguna  
- **Composer** untuk dependency management  

## 🚀 Fitur Aplikasi
- **CRUD (Create, Read, Update, Delete)**: Kelola data komik dengan mudah.  
- **Validasi Form**: Pastikan input pengguna sesuai format yang diharapkan.  
- **Upload Gambar**: Simpan gambar sampul komik di server dengan aman.  
- **Slug Otomatis**: Setiap komik memiliki URL-friendly slug.  
- **Pagination**: Bagi data komik menjadi beberapa halaman untuk navigasi lebih baik.  
- **Searching**: Cari komik berdasarkan judul atau penulis.  
- **Seeder dan Faker**: Isi database dengan data dummy untuk pengujian cepat.  
- **Migration**: Migrasi dan pengelolaan skema database secara otomatis.  
- **OOP (Object-Oriented Programming)**: Struktur kode modular dan terorganisir.

## 📂 Struktur Folder Penting
- **/app/Controllers**: Mengatur alur aplikasi dan menghubungkan model dengan tampilan.  
- **/app/Models**: Mengelola logika database dan query CRUD.  
- **/app/Views**: Mengatur tampilan HTML dengan integrasi PHP.  
- **/writable/uploads**: Menyimpan gambar sampul komik yang diunggah.  

## ⚙️ Instalasi
1. **Clone repository**:  
   ```bash
   git clone <repository-url>
   ```  
2. **Masuk ke direktori proyek**:  
   ```bash
   cd komik-app  
   ```  
3. **Install dependensi** dengan Composer:  
   ```bash
   composer install  
   ```  
4. **Konfigurasi database** di `.env` file:  
   ```dotenv
   database.default.hostname = localhost  
   database.default.database = komik_db  
   database.default.username = root  
   database.default.password =  
   ```  
5. **Jalankan migration** untuk membuat tabel:  
   ```bash
   php spark migrate  
   ```  
6. **Isi database** dengan data dummy menggunakan seeder:  
   ```bash
   php spark db:seed KomikSeeder  
   ```  
7. **Jalankan server lokal**:  
   ```bash
   php spark serve  
   ```

## 🛠️ Cara Penggunaan
1. **Tambah komik**: Isi form dengan informasi komik dan unggah gambar sampul.  
2. **Edit/Hapus komik**: Klik pada komik tertentu untuk mengedit atau menghapus data.  
3. **Pencarian**: Gunakan kotak pencarian untuk menemukan komik dengan cepat.  
4. **Pagination**: Navigasi antar halaman dengan pagination di bagian bawah.  

## 📦 Contoh Seeder dengan Faker
```php
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class KomikSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; i < 10; $i++) {
            $data = [
                'judul' => $faker->sentence(3),
                'slug' => url_title($faker->sentence(3), '-', true),
                'penulis' => $faker->name,
                'penerbit' => $faker->company,
                'sampul' => 'default.png'
            ];

            $this->db->table('komik')->insert($data);
        }
    }
}
```

## 🧑‍💻 Contoh Model dengan Fungsi CRUD dan Searching
```php
<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'komik';
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    public function search($keyword)
    {
        return $this->table('komik')
                    ->like('judul', $keyword)
                    ->orLike('penulis', $keyword)
                    ->findAll();
    }
}
```

# udah pakai crf juga biar ga di bajak hanya bisa di buka lewat halaman ini saja.

