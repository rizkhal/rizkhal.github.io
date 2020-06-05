---
extends: _layouts.post
section: content
title: Bagaimana cara simbol "&" bekerja pada fungsi php?
date: 2020-06-06
cover_image: /assets/posts/bagaimana-cara-simbol-&-bekerja-pada-fungsi-php.jpg
description: Bagaimana cara simbol "&" bekerja pada fungsi php?
categories: [php]
---

### Apa itu "&" pada fungsi di php ?
Itu bisa disebut fungsi argumen, fungsi yang parameternya menggunakan simbol `&` akan dikirim dengan referensinya,
oleh karena itu jika nilai atau value dari argumen didalam fungsi diubah maka nilai itu tidak bisa diubah diluar fungsi.

### Bagaimana cara menggunakannya ?
Cara menggunakannya dengan menambahkan simbol `&` sebelum parameter itu direferensikan.

### Contoh

```php
<?php
class Foo
{
    public function __construct()
    {
        $say = 'Halo';

        $this->sayHelo($say);

        echo $say;
    }

    public function sayHelo(&$name)
    {
        $name .= ' Ayu.';
    }
}

new Foo(); // result: Halo Ayu.

```
Jika kita coba meng-override property `$say` setelah method `sayHelo()` dieksekusi maka hasilnya tidak akan ada perubahan.
Ini juga bisa kita gunakan untuk mengubah value dari `array`, cara nya cukup dengan menambahkan simbol `&` setelah `array_expression` ditulis.

### Contoh

```php
$array = [1, 2, 3, 4, 5];

foreach ($array as &$value){
    $value = $value * 2;
}

print_r($array); // result: [2, 4, 6, 8, 10];
```

Referensi: <a target="_blank" href="https://www.php.net/manual/en/functions.arguments.php">https://www.php.net/manual/en/functions.arguments.php</a>
