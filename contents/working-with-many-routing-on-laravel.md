%title:Working with many routing on Laravel
%date:Dec 12th, 2022
%slug:working-with-many-routing-on-laravel
%cover:custom-select2-icon.png
%description:Just write the clean routing, never mind fucking subdirectory!
==========


## Introduction

When working in big project, we will have a lot of laravel routing.
Sometimes, we will have a lot of line number if all of the fucking routing we put inside the `web.php`.
So, in this post, i will show simple way to dealing with that.

See the tree folder structure inside `routes` directroy below


    .
    ├── api
    │   └── api.php
    ├── channels.php
    ├── console.php
    └── web
        ├── core
        │   ├── integration.php
        │   └── setting.php
        ├── public
        │   ├── auth.php
        │   └── index.php
        ├── client
        │   ├── auth.php
        │   └── index.php
        └── web.php
        
    5 directories, 10 files
    
You can add many routing file inside the subfolder *core*, *public*, *client* or create more folder.

Lets, make the helper functions to handle it

```php
if (! function_exists('include_route_files')) {
    /**
     * Loops through a folder and requires all PHP files
     * Searches sub-directories as well.
     *
     * @param  array  $folder
     */
    function include_route_files($folder)
    {
        try {
            $rdi = new RecursiveDirectoryIterator($folder);
            $it = new RecursiveIteratorIterator($rdi);

            while ($it->valid()) {
                if (! $it->isDot() && $it->isFile() && $it->isReadable() && $it->current()->getExtension() === 'php') {
                    require $it->key();
                }

                $it->next();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
```

## How to use?

Inside the `web.php` file


```php
// for core routing
Route::prefix('core')->as('core.')->group(function () {
    include_route_files(__DIR__ . '/core/');
});

// for public routing
Route::prefix('public')->as('public.')->group(function () {
    include_route_files(__DIR__ . '/public/');
});

// and many more
```

Now we save more line inside the `web.php` and have readable and maintenable routing.

Thanks ❤️
