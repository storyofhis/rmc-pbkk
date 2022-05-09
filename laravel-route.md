# Laravel Route Dasar

[Kembali](README.md)

## Daftar Isi

-   [Laravel Route Dasar](#laravel-route-dasar)
    -   [Daftar Isi](#daftar-isi)
    -   [Latar Belakang Topik](#latar-belakang-topik)
    -   [Skenario Basic Routing](#skenario-basic-routing)
    -   [Konsep-Konsep](#konsep-konsep)
    -   [Langkah-Langkah Tutorial](#langkah-langkah-tutorial)
        -   [Langkah Pertama](#langkah-pertama)
        -   [Langkah Kedua](#langkah-kedua)
        -   [Langkah Ketiga](#langkah-ketiga)
        -   [Langkah Keempat](#langkah-keempat)
        -   [Langkah Kelima](#langkah-kelima)
    -   [Kesimpulan](#kesimpulan)

## Latar Belakang Topik

Dalam mengakses sebuah web, route adalah bagian yang mengatur rute pada project aplikasi web. Hal paling mendasar pada route di Laravel adalah biasanya route menerima URI (sekuen karakter unik yang memberikan identifikasi terhadap teknologi web) serta closure (fungsi anonim). Penggunaan kedua hal tersebut akan memudahkan kita mengatur project Laravel nantinya. Routes berfungsi untuk mengatur lalu lintas file berdasarkan request dari pengguna. Routes terletak di dalam folder /routes.
Routes utama Laravel terletak dalam file web.php

![website-route](https://user-images.githubusercontent.com/73664125/167381189-8d132e97-85df-4849-9e25-669ddcc8b925.png)


Misal kita ingin membangun web. Tentu, agar lebih terorganisasi, kita ingin akses web kita dapat diakses selayaknya directory pada operating system. Pada contoh ini, kita akan membangun route di mana memberikan akses URI “/pegawai” yang menampilkan view welcome. Tentu untuk melakukan penggunaan itu, penggunaan route Laravel akan memudahkan dalam mengakses lokasi URI tersebut. Kita juga nantinya, dapat pula melakukan redirecting view misal dari “/employee” di mana employee dan pegawai memiliki arti yang sama agar bisa mengakses link pegawai pada akhirnya.

Banyaknya fitur tersebut lah yang akan kita pelajari pada konsep Laravel Route.

## Skenario Basic Routing
Berikut adalah langkah membuat sebuah website portfolio sederhana yang terdiri dari halaman utama dan 3 halaman utama lain:

- home
- about
- education
- projects

## Routes Default

Berikut adalah contoh Routes yang dibuat:

![image](https://user-images.githubusercontent.com/73664125/167382779-52de7a17-01cd-4a07-a2bb-d30059a53077.png)


Penjelasan:

- get pada contoh merupakan tipe request
- ‘/’merupakan url, dimana tanda slash mengacu ke root folder
- welcome mengarah ke welcome.blade.php

Silahkan mencoba mengetikkan potongan program berikut di /routes/web.php
![image](https://user-images.githubusercontent.com/73664125/167382948-c03a1a47-3eb9-46c1-bc28-2484314e8bda.png)


Silahkan mencoba mengubah potongan program di /routes/web.php menjadi:
![image](https://user-images.githubusercontent.com/73664125/167383046-264c4783-45ff-44c3-b62a-411f8848ef4d.png)



## Konsep-Konsep

Konsep dari Laravel Route ini akan terbagi menjadi dua, yakni route api dan route web. Route api ini secara otomatis akan menambahkan “/api” pada bagian awal router. Sedangkan, route web akan memberikan akses penuh terhadap route. Secara default keseluruhan file route ini dapat diakses pada directory “routes” tergantung apakah kita ingin mengakses web (`routes\web.php`) atau api (`routes\api.php`). Seluruh file pada route ini diatur secara otomatis oleh `App\Providers\RouteServiceProvider`.

## Langkah-Langkah Tutorial

### Langkah Pertama

Sebelum kita memulai project Laravel, kita dapat melakukan [instalasi Laravel](https://laravel.com/docs/8.x/installation). Terdapat banyak cara untuk menginstall project Laravel, namun di sini kita akan menggunakan composer.

```
composer create-project laravel/laravel laravel-tutorial

cd laravel-tutorial

php artisan serve
```

Nantinya, akan terbuat folder laravel-tutorial sebagai berikut.
![route-1](https://user-images.githubusercontent.com/73664125/167381399-c0ae20e6-2d45-4fdd-babb-d53fe7fc8fac.png)


Selain itu, setelah kita memasukkan command `php artisan serve` maka kita akan mendapatkan akses development server aplikasi Laravel seperti berikut.
![route-2](https://user-images.githubusercontent.com/73664125/167381480-e11828b3-99b7-4422-9566-d4c175074b94.png)


Jika kita mengakses development server tersebut, maka kita dapatkan tampilan sebagai berikut.
![route-3](https://user-images.githubusercontent.com/73664125/167381519-1b4b8dda-b65b-4455-b4f9-742de466674a.png)


### Langkah Kedua

Sekarang kita akan membangun contoh view sederhana untuk URI “/pegawai”. Di sini, kita mengakses `resources\views`. Akan terlihat file `welcome.blade.php`. Lakukan copy file tersebut dan hasilnya ganti menjadi `welcome-pegawai.blade.php`.
![route-4](https://user-images.githubusercontent.com/73664125/167381558-1242b991-28ca-43ed-89b7-3a36f01cb789.png)


Setelah itu, ganti isi body menjadi:

```html
<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"
        style="font-size: 3em"
    >
        Laravel Pegawai
    </div>
</body>
```

### Langkah Ketiga

Setelah ini, kita mencoba untuk membangun router ke URI “/pegawai”. Di sini, mulanya kita membuat akses route pada file `routes\web.php`.

![route-5](https://user-images.githubusercontent.com/73664125/167381633-10278cd3-5994-4f5e-b7b0-e67227796072.png)

Dapat kita lihat bahwa di sini, terdapat class `Route` dengan method `get`. Ini merupakan method dalam melakukan akses HTTP terhadap web aplikasi Laravel. Dapat dilihat pula, parameter dari method ini sebagai berikut:
`‘/’` sebagai URI
`function()` sebagai Closure untuk menjalankan proses

Sekarang, kita menentukan [HTTP request method](https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods) yang diinginkan. Karena kita hanya menampilkan data view sederhana kita akan memakai `GET` sebagai request method-nya. Selanjutnya, kita tinggal menggunakan kode berikut.

```php
Route::get('/pegawai', function () {
    return view('welcome-pegawai');
});
```

Langkah Ketiga - versi 2
Adapun karena kita hanya menampilkan view, kita juga dapat menggunakan method `view` yang nantinya mengambil parameter URI dan nama file view.

```php
Route::view("/pegawai", "welcome-pegawai");
```

### Langkah Keempat

Sekarang kita coba memanggil command `php artisan serve`. Maka tampilannya akan menjadi sebagai berikut.

![route-6](https://user-images.githubusercontent.com/73664125/167381708-39bb0187-41e5-4cc4-a34f-268f96d02114.png)


### Langkah Kelima

Sekarang kita akan membuat redirect dari “/employee” menuju route “/pegawa”. Untuk melakukan hal ini, kembali ke file `routes\web.php`. Di sini, kita akan menggunakan method `redirect` yang mengambil dua parameter, yakni URI asal dan URI tujuan.

```
Route::redirect("/employee", "/pegawai");
```

Jika kita menjalankan command `php artisan serve` dan mengakses URI “/employee”, maka kita akan diarahkan segera ke route “/pegawai”.

## Kesimpulan

Penggunaan Laravel Route dapat membantu penggunaan akses web menjadi lebih terorganisasi. Keseluruhan kustomisasi Laravel Route tinggal diakses pada directory `routes` dan kita dapat melihat bermacam kemudahannya. Selain itu, class `Route` menyediakan method yang lengkap untuk memberikan bermacam model request yang dapat diajukan oleh developer.

