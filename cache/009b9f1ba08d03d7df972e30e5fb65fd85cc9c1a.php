<?php $__env->startSection('content'); ?><p>Say you want to apply a repository pattern in your laravel application, and need a lot of class interfaces that function as layers to make the code more compact in controller.
Will be very wasteful of time, effort and boring if you create and type a class whose contents are almost the same.
Therefore, let's make a simple command to create a class interface quickly.</p>

<p>Create command class with</p>

<pre><code class="language-bash">php artisan make:command RepositoryCommand
</code></pre>

<p>Then create a stubs file in <code>app/Console/repository.stub</code> and make like this</p>

<pre><code class="language-php">&lt;<?php echo e('?php'); ?>


namespace {{ namespace }}

interface {{ class }}
{
    /**
     * List all of data
     * 
     * <?php echo e('@'); ?>return collection
     */
    public function all();

    /**
     * Save new data
     * 
     * <?php echo e('@'); ?>param  array  $request
     * <?php echo e('@'); ?>return bool
     */
    public function save(array $request);

    /**
     * Update data where id
     * 
     * <?php echo e('@'); ?>param  string $id
     * <?php echo e('@'); ?>param  array  $request
     * <?php echo e('@'); ?>return bool
     */
    public function update(string $id, array $request);

    /**
     * Delete data
     * 
     * <?php echo e('@'); ?>param  string $id
     * <?php echo e('@'); ?>return bool
     */
    public function delete(string $id);
}
</code></pre>

<p>After that, let's start by creating a command to create this file with dynamic classes and namespaces</p>

<p>Open your <code>RepositoryCommand.php</code> and make like this</p>

<pre><code class="language-php">&lt;<?php echo e('?php'); ?>


declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RepositoryCommand extends Command
{
    protected $signature = 'make:repository {name}';

    protected $description = 'Create a new repository class';

    /**
     * Create a new controller creator command instance.
     *
     * <?php echo e('@'); ?>return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the command.
     *
     * <?php echo e('@'); ?>return void
     */
    public function handle(): void
    {
        $name = $this-&gt;getArgument('name');

        $this-&gt;putContents(app_path($name), $this-&gt;buildClass($name));

        $this-&gt;info("Repository created successfully.");
    }

    /**
     * Build class
     * 
     * <?php echo e('@'); ?>param  string $name
     * <?php echo e('@'); ?>return string
     */
    protected function buildClass(string $name): string
    {
        $stub = $this-&gt;getStub();

        return $this-&gt;replaceNamespace($stub)-&gt;replaceClass($stub, $name);
    }

    /**
     * Replace class in stub file
     * 
     * <?php echo e('@'); ?>param  string $stub
     * <?php echo e('@'); ?>param  string $name
     * <?php echo e('@'); ?>return string
     */
    protected function replaceClass(string $stub, string $name): string
    {
        $class = str_replace($this-&gt;getNamespace($name).'\\', '', $name);

        return str_replace(['{{ class }}', '{{class}}'], $class, $stub);
    }

    /**
     * Replace namespace
     * 
     * <?php echo e('@'); ?>param  string &amp;$stub
     * <?php echo e('@'); ?>return self
     */
    protected function replaceNamespace(&amp;$stub): self
    {
        $namespace = str_replace('\\', '', $this-&gt;laravel-&gt;getNamespace());

        $stub = str_replace(['{{ namespace }}', '{{namespace}}'], $namespace, $stub);

        return $this;
    }

    /**
     * Get the full namespace for a given class, without the class name.
     *
     * <?php echo e('@'); ?>param  string  $name
     * <?php echo e('@'); ?>return string
     */
    protected function getNamespace(string $name): string
    {
        return trim(implode('\\', array_slice(explode('\\', $name), 0, 0)), '\\');
    }

    /**
     * Get argument from console
     * 
     * <?php echo e('@'); ?>return string
     */
    protected function getArgument($name): string
    {
        return trim($this-&gt;argument($name));
    }

    /**
     * Put contents
     * 
     * <?php echo e('@'); ?>param  string $filename
     * <?php echo e('@'); ?>param  string $resources
     * <?php echo e('@'); ?>return void
     */
    protected function putContents(string $filename, string $resources): void
    {
        file_put_contents("{$filename}.php", $resources);
    }

    /**
     * Get stubs
     * 
     * <?php echo e('@'); ?>return string
     */
    protected function getStub(): string
    {
        return file_get_contents(app_path('Console/repository.stub'));
    }
}
</code></pre>

<p>After that check the command that we have made with <code>php artisan list</code>, if nothing is wrong, then you will see the command <code>make:repository</code>.</p>

<p>Now you can try with <code>php artisan make:repository FooRepository</code> and see your class interface at <code>app/FooRepository.php</code></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>