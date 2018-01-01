<?php

namespace Matthewbdaly\ArtisanStandalone\Base;

use Illuminate\Foundation\Application as BaseApplication;
use Illuminate\Contracts\Foundation\Application as ApplicationContract;
use RuntimeException;

class Application extends BaseApplication implements ApplicationContract
{

    /**
     * Get the path to the application "src" directory.
     *
     * @param  string $path Optionally, a path to append to the app path
     * @return string
     */
    public function path($path = '')
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'src'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }

    /**
     * Get the path to the application configuration files.
     *
     * @param  string  $path Optionally, a path to append to the config path
     * @return string
     */
    public function configPath($path = '')
    {
        return 'vendor'.DIRECTORY_SEPARATOR.'matthewbdaly'.DIRECTORY_SEPARATOR.'artisan-standalone'.DIRECTORY_SEPARATOR.'config'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }

    /**
     * Get the path to the bootstrap directory.
     *
     * @param  string  $path Optionally, a path to append to the bootstrap path
     * @return string
     */
    public function bootstrapPath($path = '')
    {
        return 'bootstrap'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }

    /**
     * Get the path to the routes cache file.
     *
     * @return string
     */
    public function getCachedRoutesPath()
    {
        return __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'matthewbdaly'.DIRECTORY_SEPARATOR.'artisan-standalone'.DIRECTORY_SEPARATOR.'routes/console.php';
    }

    /**
     * Get the application namespace.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    public function getNamespace()
    {
        if (! is_null($this->namespace)) {
            return $this->namespace;
        }

        $composer = json_decode(file_get_contents(base_path('composer.json')), true);

        foreach ((array) data_get($composer, 'autoload.psr-4') as $namespace => $path) {
            return $this->namespace = $namespace;
        }

        throw new RuntimeException('Unable to detect application namespace.');
    }
}
