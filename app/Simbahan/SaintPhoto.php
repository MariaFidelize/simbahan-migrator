<?php


namespace App\Simbahan;


class SaintPhoto
{
    /**
     * Path to the images.
     *
     * @var string
     */
    public $DIRECTORY;

    /**
     * List of files
     *
     * @var Collection
     */
    public $files;

    public function __construct()
    {
        $this->DIRECTORY = storage_path('app/images/saints');
        $this->files = collect($this->removeSystemDirectory(scandir($this->DIRECTORY)));
    }

    public function removeSystemDirectory($files)
    {
        $currentDirectory = array_search('.', $files);

        if ($currentDirectory !== false)
            array_forget($files, $currentDirectory);

        $parentDirectory = array_search('..', $files);

        if ($parentDirectory !== false)
            array_forget($files, $parentDirectory);

        return $files;
    }

    public function hasImage($saintId)
    {
        return $this->files->map(function($path) {
            return explode('.', $path)[0];
        })->contains($saintId);
    }

    public function getImage($saintId)
    {
        if (! $this->hasImage($saintId))
            return "";

        return $this->files->filter(function ($path) use ($saintId) {
            return explode('.', $path)[0] == $saintId;
        })->flatten()->first();
    }
}