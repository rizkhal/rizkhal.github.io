<?php $__env->startSection('content'); ?><h3>Apa itu "&amp;" pada fungsi di php ?</h3>

<p>Itu bisa disebut fungsi argumen, fungsi yang parameternya menggunakan simbol <code>&amp;</code> akan dikirim dengan referensinya,
oleh karena itu jika nilai atau value dari argumen didalam fungsi diubah maka nilai itu tidak bisa diubah diluar fungsi.</p>

<h3>Bagaimana cara menggunakannya ?</h3>

<p>Cara menggunakannya dengan menambahkan simbol <code>&amp;</code> sebelum parameter itu direferensikan.</p>

<h3>Contoh</h3>

<pre><code class="language-php">&lt;<?php echo e('?php'); ?>

class Foo
{
    public function __construct()
    {
        $say = 'Halo';

        $this-&gt;sayHelo($say);

        echo $say;
    }

    public function sayHelo(&amp;$name)
    {
        $name .= ' Ayu.';
    }
}

new Foo(); // result: Halo Ayu.

</code></pre>

<p>Jika kita coba meng-override property <code>$say</code> setelah method <code>sayHelo()</code> dieksekusi maka hasilnya tidak akan ada perubahan.
Ini juga bisa kita gunakan untuk mengubah value dari <code>array</code>, cara nya cukup dengan menambahkan simbol <code>&amp;</code> setelah <code>array_expression</code> ditulis.</p>

<h3>Contoh</h3>

<pre><code class="language-php">$array = [1, 2, 3, 4, 5];

foreach ($array as &amp;$value){
    $value = $value * 2;
}

print_r($array); // result: [2, 4, 6, 8, 10];
</code></pre>

<p>Referensi: <a target="_blank" href="https://www.php.net/manual/en/functions.arguments.php">https://www.php.net/manual/en/functions.arguments.php</a></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>