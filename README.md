## _API Wilayah Indonesia | Laravel Lumen_

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework) [![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Mempermudah para developer yang memerlukan API Wilayah Indonesia, untuk kepentingan Dropdown Select pada pemilihan alamat rumah, pengiriman paket, dan lain-lain ✨.

[URL API](http://dev.ahmaad.my.id/api/daerahindonesia/)

## Dokumentasi API
Dokumentai API Beserta Request Method, Untuk Parameter Bersifat Opsional
| Nama | Request Method | URL |
| ------ | ------ | ------ |
| Provinsi | GET | /api/daerahindonesia/provinsi |
| Kota/Kabupaten | GET | /api/daerahindonesia/kota/{id_provinsi} |
| Kecamatan | GET | /api/daerahindonesia/kecamatan/{id_kota} |
| Kelurahan | GET | /api/daerahindonesia/kelurahan/{id_kecamatan} |

## Installation
Kebutuhan yang perlu diinstall

- PHP >= 7.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension

Setelah Itu, Lakukan Perintah Berikut.

```sh
git clone https://github.com/ahmdsk/Api-Wilayah-Indonesia
import wilayah_indo.sql > XAMPP | LAMPP | Lainnya
cd Api-Wilayah-Indonesia
composer install
php -S localhost:8000 -t public/
```

## Dokumentasi Lumen
Untuk mempelajari lumen silahkan buka dokumentasi berikut [Lumen website](https://lumen.laravel.com/docs).

## Lisensi
[MIT license](https://opensource.org/licenses/MIT).