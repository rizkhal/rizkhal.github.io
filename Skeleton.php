<?php

/**
 * ¯/_(ツ)_/¯
 * 
 * HOW TO USE IT ?
 * type in console:
 * php Skeleton.php amazing title post --category=[tag1,tag2] --image=[image-id]
 */

declare(strict_types=1);

if (! function_exists('dd')) {
    /**
     * Die dump pretty print debugging
     * @return array
     */
    function dd()
    {
        array_map(function($x) {
                print_r($x);
                // var_dump($x);
        }, func_get_args());
        die;
    }
}

class Skeleton
{
    /**
     * Filter arguments
     * 
     * @param void
     */
    public function __construct($argument)
    {
        preg_match('/(^.*).--category.(.*\w).--image.(.*\w)/', implode(' ', $argument), $argument);

        $skeleton = $this->getSkeleton();
        $this->buildSkeleton($argument, $skeleton);
    }

    /**
     * Build skeleton
     * 
     * @param  array $argument
     * @param  string $skeleton
     * @return void
     */
    protected function buildSkeleton(array $argument, string $skeleton): void
    {
        preg_match('/^.+?\.php.(.+)$/', $argument[1], $match);

        $slug = $this->slug($match[1]);

        $resource = $this->replaceDatePost($skeleton)
                        ->replaceTags($argument[2], $skeleton)
                        ->replaceThumbnailName($slug, $skeleton, $argument[3])
                        ->replaceTitleAndDescription($match[1], $skeleton);

        file_put_contents("source/_posts/{$slug}.md", $resource);
    }

    /**
     * Replace tags
     * 
     * @param  string $argument
     * @param  string &$skeleton
     * @return self
     */
    protected function replaceTags(string $argument, string &$skeleton): self
    {
        $skeleton = str_replace('{{ tags }}', str_replace(',', ', ', $argument), $skeleton);

        return $this;
    }

    /**
     * Replace date of post
     * 
     * @param  string &$skeleton
     * @return self
     */
    protected function replaceDatePost(string &$skeleton): self
    {
        $skeleton = str_replace('{{ date }}', date('Y-m-d'), $skeleton);

        return $this;
    }

    /**
     * Replace thumbnail of posts filename
     * 
     * @param  string $filename 
     * @param  string &$skeleton
     * @return self          
     */
    protected function replaceThumbnailName(string $filename, string &$skeleton, string $id): self
    {
        try {
            copy("https://i.imgflip.com/{$id}.jpg", "source/assets/posts/{$filename}.jpg");
        } catch (\Exception $e) {
            dd($e->getMessaege());
        }

        $skeleton = str_replace(['{{ filename }}'], $filename, $skeleton);

        return $this;
    }

    /**
     * Replace title and description of page
     * 
     * @param  string $argument
     * @param  string &$skeleton
     * @return string
     */
    protected function replaceTitleAndDescription(string $argument, string $skeleton): string
    {
        return str_replace(['{{ title }}', '{{ description }}'], ucfirst($argument), $skeleton);
    }

    /**
     * Get skeleton
     * 
     * @return string
     */
    protected function getSkeleton(): string
    {
        return file_get_contents('Skeleton.stub');
    }

    /**
     * Make slug of posts
     * 
     * @param  string $slug
     * @return string
     */
    protected function slug(string $slug): string
    {
        return str_replace(' ', '-', $slug);
    }
}

/** exec */
$skeleton = new Skeleton($argv);
