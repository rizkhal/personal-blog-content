<?php

declare(strict_types=1);

/**
 * ¯/_(ツ)_/¯
 * 
 * HOW TO USE IT ?
 * type in console:
 * php ayu.php --title="The amazing title" --cover="img id from https://i.imgflip.com"
 */

if (!function_exists('dd')) {
    /**
     * Die dump pretty print debugging
     * @return array
     */
    function dd()
    {
        array_map(function ($x) {
            print_r($x);
        }, func_get_args());
        die;
    }
}

class Ayu
{
    /**
     * Filter arguments
     * 
     * @param void
     */
    public function __construct($argument)
    {
        preg_match('~^.+?\.php.--title=(.*).--cover=(.*)~', implode(' ', $argument), $matches);

        $this->build($matches);
    }

    /**
     * Build skeleton
     * 
     * @param  array $argument
     * @param  string $skeleton
     * @return void
     */
    protected function build(array $matches): void
    {
        $id = $matches[2];
        $title = $matches[1];
        $slug = $this->generateSlug($title);
        $stub = file_get_contents('stubs/ayu.stub');

        $contents = $this->replaceCover($stub, $id, $slug)->replaceTitle($stub, $title);
        $results = file_put_contents("contents/{$slug}.md", $contents);

        if ($results) {
            print("Successfully create file 🥳 🎉 \n");
            return;
        }

        throw new \Exception("Error..", 1);
    }

    /**
     * Replace thumbnail of posts filename
     * 
     * @param  string $filename 
     * @param  string &$skeleton
     * @return self          
     */
    protected function replaceCover(string &$stub, string $id, string $filename): self
    {
        $filename = $this->downloadCover($id, $filename);

        $stub = str_replace("%cover", $filename, $stub);
        return $this;
    }

    /**
     * Replace title
     *
     * @param string $stub
     * @param string $title
     * @return void
     */
    protected function replaceTitle(string &$stub, string $title): string
    {
        return str_replace("%title", ucfirst($title), $stub);
    }

    /**
     * Download image
     *
     * @return string
     */
    public function downloadCover(string $id, string $filename): string
    {
        $cover = "assets/{$filename}.png";

        try {
            copy("https://i.imgflip.com/{$id}.jpg", $cover);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return $cover;
    }

    /**
     * Make slug of posts
     * 
     * @param  string $slug
     * @return string
     */
    protected function generateSlug(string $filename): string
    {
        $filename = str_replace(' ', '-', $filename);
        return $filename . "-" . time();
    }
}

/** exec */
$skeleton = new Ayu($argv);
