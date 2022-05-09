# Laravel Tutorial Controller
[Kembali](README.md)
# Daftar Isi
1. [Pengertian](https://github.com/storyofhis/rmc-pbkk/blob/main/Laravel-Controller.md#pengertian)
2. [Konsep](https://github.com/storyofhis/rmc-pbkk/blob/main/Laravel-Controller.md#Konsep)
3. [Langkah-Langkah](https://github.com/storyofhis/rmc-pbkk/blob/main/Laravel-Controller.md#Langkah-langkah)
    - [Langkah Pertama](https://github.com/storyofhis/rmc-pbkk/blob/main/Laravel-Controller.md#Langkah-Pertama-Membuat-file-Controller)
    - [Langkah Kedua](https://github.com/storyofhis/rmc-pbkk/blob/main/Laravel-Controller.md#Langkah-Kedua-Memanggil-Controller)


# Pengertian
Laravel Controller merupakan salah satu bagian dimana seluruh fungsional web dibuat. Pada Controller dilakukan pengaturan untuk mengakses Model terkait dengan Database dan juga bagaimana mengirimkan datanya ke View. Berbagai pemrosesan juga dilakukan di dalam Controller. Controller adalah salah satu komponen inti dari MVC yang berfungsi sebagai penghubung antara request user (View) ke model yang nantinya akan di kembalikan lagi ke View dalam bentuk response. Controller ini akan banyak berisi logika – logika dalam menyusun suatu fungsi tertentu. Contohnya adalah aktivitas CRUD (Create, Read, Update, Delete) yang prosesnya berjalan di dalam Controller.

# Konsep
Salah satu contoh aktivitas pada controller adalah aktivitas CRUD (Create, Read, Update, Delete).

![alt txt](https://github.com/storyofhis/rmc-pbkk/blob/main/dokumentasi/mvc_laravel.png)

# Langkah-Langkah
## Langkah Pertama Membuat file Controller
Ada 2 cara dalam membuat controller pada laravel. Yang pertama, dengan cara membuat langsung file controller barunya di dalam folder app/Http/Controllers. Sedangkan cara yang kedua, dengan menggunakan perintah php artisan dari laravel.
### Cara Pertama : membuat file secara manual di dalam folder app/Http/Controllers
Kita langsung membuat file controller baru pada laravel dengan membuat langsung filenya di dalam folder controllers. Di sini kita akan mengikuti format penulisan pada laravel, jadi nama file controllernya dibuat dengan huruf besar di awal Controllernya. Misalnya kita akan membuat controller dosen, buat file baru dengan nama DosenController.php dalam folder controllers. Berikut adalah lokasi directorinya pada kasus ini : laravel-tutorial/app/Http/Controllers/DosenController.php
Perhatikan syntax di bawah ini :

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //di sini isi controller dosen
}
```
Pada syntax tersebut, di deklarasikan class controller DosenController, dengan wajib extends Controller dari laravel.
![alt txt](https://github.com/storyofhis/rmc-pbkk/blob/main/dokumentasi/controller.png)

### Cara Kedua : membuat file dengan php artisan
Cara kedua, kita dapat membuat file controller baru seperti pada cara pertama dengan cara yang lebih mudah. Caranya dengan memanfaatkan php artisan yang terdapat pada laravel. Dengan fitur ini kita dapat membuat serta mengontrol project kita. php artisan adalah fitur unggulan yang ada pada laravel, yang dibuat untuk memudahkan kita dalam pengembangan menggunakan laravel. php artisan untuk membuat file controller baru dapat dibuat dengan syntax berikut yang diketik melalui terminal atau command prompt (CMD)
``` php
php artisan make:controller MahasiswaController
```
Perintah `make:controller` di atas adalah perintah dari php artisan untuk membuat controller baru sesuai nama yang diinginkan. Pada kasus ini file controller tersebut bernama MahasiswaController. Maka file controller `MahasiswaController.php` akan dibuat secara otomatis. Selain itu, dengan memanfaatkan `php artisan make:controller` ini kita dapat langsung menulis kode sesuai template Resource Controller pada dalam controller dengan menambahkan `--resource` setelah nama file controller :
``` php
php artisan make:controller MahasiswaController --resource
```

Berikut adalah MahasiswaController jika dibuat dengan resource :
``` php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

```
Berikut adalah method yang dapat dilakukan oleh Resource Controller :
| Verb | URL | Action | Route Name |
|-----------|----------------------|---------|----------------|
| GET | /mahasiswa | index | mahasiswa.index |
| GET | /mahasiswa/create | create | mahasiswa.create |
| POST | /mahasiswa | store | mahasiswa.store |
| GET | /mahasiswa/{id} | show | mahasiswa.show |
| GET | /mahasiswa/{id}/edit | edit | mahasiswa.edit |
| PUT/PATCH | /mahasiswa/{id} | update | mahasiswa.update |
| DELETE | /mahasiswa/{id} | destroy | mahasiswa.destroy |

## Langkah Kedua Memanggil Controller
Penggunaan controller yang sederhana, controller dapat dipanggil melalui route pada file `web.php` pada direktori : `laravel-tutorial/routes/web.php`.
Disini kita akan menambahkan route baru untuk memanggil controller. Perhatikan syntax berikut :

```php
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
```

dan tambahkan `use App\Http\Controllers\MahasiswaController;` pada file web.php dalam routes

Maksud dari syntax di atas adalah pada saat URL “dosen” di akses, maka kita memerintahkan untuk menjalankan method/function `index` yang ada dalam controller `MahasiswaController`. Karena tadi kita membuat file controller tanpa template resource method controller yang tersedia maka kita harus membuat method nya terlebih dahulu pada file controller `MahasiswaController.php`

```php
public function index(){
    return "Halo ini adalah method index, dalam controller MahasiswaController.";
}
```
Saat dijalankan maka, controller tersebut akan mencetak apa yang direturn oleh function index pada file controller. Berikut adalah hasilnya dengan akses alamat yang dibuat oleh php artisan serve misal `http://127.0.0.1:8000/mahasiswa`.
hasilnya:

![alt txt](https://github.com/storyofhis/rmc-pbkk/blob/main/dokumentasi/tanpa%20view.png)

atau jika kita membuat halaman view , bisa dengan membuat file baru terlebih dahulu, disini dberi nama 'mahasiswa.blade.php' di folder 'resource/views', berikut isi dari file view mahasiswa.blade.php:
```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>View Mahasiswa</title>
</head>
<body>
  <h1>Halo ini view Mahasiswa</h1>
  <p>ini adalah method index</p>
  <h1>Dalam controller MahasiswaController</h1>
</body>
</html
```
Setelah itu pada file `MahasiswaController.php` dapat dituliskan syntax berikut:
```php
public function index(){
    return view ('mahasiswa');
}
```
![alt txt](https://github.com/storyofhis/rmc-pbkk/blob/main/dokumentasi/dengan%20view.png)


### Cara lain penulisan route
 selain dapat menuliskan dengan syntax diatas, terdapat cara penulisan lain yaitu:
 
 Pertama, buka file 'app/Providers/RouteServiceProvider.php'
 Kedua, Tambahkan line berikut:
 ``` php
 protected $namespace = 'App\Http\Controllers'; 
 ```
 Ketiga, tambahkan syntax `->namespace($this->namespace)` di `function boot` seperti berikut:
 ![alt txt](https://github.com/storyofhis/rmc-pbkk/blob/main/dokumentasi/RouteProvider.png)
 
 Setelah itu, pada `web.php`, dapat menuliskan route berikut:
 ``` php
 Route::get('/mahasiswa', 'MahasiswaController@index');
 ```
 atau jika menggunakan CRUD dapat menggunakan:
 ``` php
 Route::resource('/mahasiswa', 'MahasiswaController');
 ```
 
