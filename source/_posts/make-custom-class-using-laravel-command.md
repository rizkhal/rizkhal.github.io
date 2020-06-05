---
extends: _layouts.post
section: content
title: Make custom class using laravel command
date: 2020-06-04
cover_image: /assets/posts/make-custom-class-using-laravel-command.jpg
description: Laravel command for make custom class
categories: [laravel]
---

Say you want to apply a repository pattern in your laravel application, and need a lot of class interfaces that function as layers to make the code more compact in controller.
Will be very wasteful of time, effort and boring if you create and type a class whose contents are almost the same.
Therefore, let's make a simple command to create a class interface quickly.

Create command class with

```bash
php artisan make:command RepositoryCommand
```

Then create a stubs file in `app/Console/repository.stub` and make like this

```php
<?php

namespace {{ namespace }}

interface {{ class }}
{
    /**
     * List all of data
     * 
     * @return collection
     */
    public function all();

    /**
     * Save new data
     * 
     * @param  array  $request
     * @return bool
     */
    public function save(array $request);

    /**
     * Update data where id
     * 
     * @param  string $id
     * @param  array  $request
     * @return bool
     */
    public function update(string $id, array $request);

    /**
     * Delete data
     * 
     * @param  string $id
     * @return bool
     */
    public function delete(string $id);
}
```

After that, let's start by creating a command to create this file with dynamic classes and namespaces

Open your `RepositoryCommand.php` and make like this

```php
<?php

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
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle(): void
    {
        $name = $this->getArgument('name');

        $this->putContents(app_path($name), $this->buildClass($name));

        $this->info("Repository created successfully.");
    }

    /**
     * Build class
     * 
     * @param  string $name
     * @return string
     */
    protected function buildClass(string $name): string
    {
        $stub = $this->getStub();

        return $this->replaceNamespace($stub)->replaceClass($stub, $name);
    }

    /**
     * Replace class in stub file
     * 
     * @param  string $stub
     * @param  string $name
     * @return string
     */
    protected function replaceClass(string $stub, string $name): string
    {
        $class = str_replace($this->getNamespace($name).'\\', '', $name);

        return str_replace(['{{ class }}', '{{class}}'], $class, $stub);
    }

    /**
     * Replace namespace
     * 
     * @param  string &$stub
     * @return self
     */
    protected function replaceNamespace(&$stub): self
    {
        $namespace = str_replace('\\', '', $this->laravel->getNamespace());

        $stub = str_replace(['{{ namespace }}', '{{namespace}}'], $namespace, $stub);

        return $this;
    }

    /**
     * Get the full namespace for a given class, without the class name.
     *
     * @param  string  $name
     * @return string
     */
    protected function getNamespace(string $name): string
    {
        return trim(implode('\\', array_slice(explode('\\', $name), 0, 0)), '\\');
    }

    /**
     * Get argument from console
     * 
     * @return string
     */
    protected function getArgument($name): string
    {
        return trim($this->argument($name));
    }

    /**
     * Put contents
     * 
     * @param  string $filename
     * @param  string $resources
     * @return void
     */
    protected function putContents(string $filename, string $resources): void
    {
        file_put_contents("{$filename}.php", $resources);
    }

    /**
     * Get stubs
     * 
     * @return string
     */
    protected function getStub(): string
    {
        return file_get_contents(app_path('Console/repository.stub'));
    }
}
```

After that check the command that we have made with `php artisan list`, if nothing is wrong, then you will see the command `make:repository`.

Now you can try with `php artisan make:repository FooRepository` and see your class interface at `app/FooRepository.php`
