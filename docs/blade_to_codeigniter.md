### Cara menambahkan blade ke dalam CodeIgniter

Blade pada laravel adalah engine yang dirancang dengan cantik untuk mencipatakan program yang mudah dipahami dan mudah di maintenance berikut adalah cara cara untuk memasang blade engine milik laravel pada framework CodeIgniter

Pasang blade pada vendor

```
composer require jenssegers/blade
```

Setelah blade berhasil dipasang, kita perlu melakukan berapa konfigurasi

##### 1.) Tambahkan blade ke dalam classmap (app/Config/Autoload.php)

```php
    public $classmap = [
        // Menambahkan blade laravel pada project
        'Jenssegers\Blade\Blade',
    ];
```

##### 2.) Masih di dalam file autoload (app/Config/Autoload.php), kalian scroll dan tambahkan 'blade' pada array helper agar kita dapat menambahkan helper sendiri untuk mengaktifkan fungsi blade view tambahan

```php
    public $helpers = [ 'blade' ];
```

##### 3.) Buat file helper dengan nama blade_helper.php, dan kalian simpan dalam file helper seperti ini (app/Helper/blade_helper.php)

```php
<?php

use Jenssegers\Blade\Blade;
function blade_view($template, $data = []) {
    $blade = new Blade(APPPATH . 'Views', APPPATH . 'Views/cache');
    echo $blade->make($template, $data)->render();
}
```

##### 4.) Yang terakhir kalian dapat menambahkan alias yang menuju pada class blade di dalam vendor (app/Config/Modules.php)

```php
    public $aliases = [
        'events',
        'filters',
        'registrars',
        'routes',
        'services',
        'Blade' => Jenssegers\Blade\Blade::class,
    ];
```
