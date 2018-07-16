# simpelcrudlaravel52

CRUD Data anggota ini saya buat menggunakan Laravel 5.2, silahkan dikembangkan sesuai kebutuhan anda bisa dengan forked dan akan saya update ke repository ini kembali.

```
Petunjuk penggunaan :
- Silahkan anda hapus '--' pada folder vendor dan file .env
- Jika file .env tidak bisa di rename coba buka menggunakan notepad++ -> save as -> save as type : All types (*.*)
```

Saya disini menggunakan virtual host, jadi silahkan anda sesuaikan saja.

pada file hosts tambahkan line ini :

```
127.0.0.1       laravel52.dev
```

Tambahkan juga script ini pada httpd-vhost.conf letakkan di bagian paling bawah :

```
<VirtualHost *:80>
    ServerAdmin laravel@laravel52.example.com
    DocumentRoot "C:/www/laravel52/public"
    ServerName laravel52.dev
	ServerAlias laravel52.dev
	<Directory "C:/www/laravel52/public">
		Deny from all
		Allow from 127.0.0.1
		Require local
	</Directory>
</VirtualHost>
```

Untuk DocumentRoot "C:/www/laravel52/public" --> silahkan sesuaikan dengan lokasi root project anda

## Konfigurasi database :
- Lakukan import database db_laravel52.sql ke MySql anda
- Buka file .env dan sesuaikan settingan seperti dibawah ini :

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_laravel52
DB_USERNAME=root
DB_PASSWORD=
```

by iwane.prasetiyo@gmail.com



## Official Documentation Laravel

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## License of Laravel

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
