# Konawe Tourism

Konawe Tourism adalah sebuah website yang dirancang untuk mempermudah wisatawan dalam mendapatkan informasi terkait tempat-tempat wisata di Kabupaten Konawe Selatan. Situs ini bertujuan menjadi panduan lengkap bagi para wisatawan yang ingin mengeksplorasi keindahan alam di daerah tersebut

## Fitur

- Fitur 1: Pengguna dapat melihat obyek wisata yang tersedia di daerah konawe.

- Fitur 2: Pengguna dapat melakukan pencarian obyek wisata dengan mudah.

- Fitur 3: Pengguna dapat mengisi form untuk memberikan penilaian pada obyek wisata.

- Fitur 4: Admin dapat menambah obyek wisata baru.
- Fitur 5: Admin dapat memperbarui obyek wisata, seperti harga tiket terbaru.



## Prasyarat

- PHP >= 8.2
- Composer
- Node.js dengan npm
- MySQL

## Instalasi

1. Clone repositori ini:

    ```bash
    git clone https://github.com/RikkyM/konawe-tourism.git
    cd konawe-tourism
    ```

2. Instal dependensi menggunakan Composer:

    ```bash
    composer install
    ```


3. Instal dependensi Node.js menggunakan npm:

    ```bash
    npm install
    ```

4. Salin file `.env.example` menjadi `.env`:

    ```bash
    cp .env.example .env
    ```

5. Atur konfigurasi database dan pengaturan lainnya di file `.env`.

6. Buat kunci aplikasi:

    ```bash
    php artisan key:generate
    ```

7. Migrasikan tabel database:

    ```bash
    php artisan migrate
    ```

8. Seed database dengan data awal:

    ```bash
    php artisan db:seed
    ```

9. Jalankan server pengembangan:

    ```bash
    php artisan serve
    ```

    Aplikasi akan berjalan di `http://localhost:8000`.
