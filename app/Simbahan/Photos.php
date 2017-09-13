<?php

namespace App\Simbahan;


class Photos
{
    /**
     * Path to the images.
     *
     * @var string
     */
    public $DIRECTORY;

    public $churchUid;

    /**
     * List of files
     *
     * @var array
     */
    protected $files;

    const CHURCH_PREFIX = 'CH_';

    const ADORATION_PREFIX = 'AC_';

    /**
     * Photos constructor.
     *
     * @param string $churchUid
     */
    public function __construct($churchUid)
    {
        $this->churchUid = $churchUid;
        $this->DIRECTORY = storage_path('app/images');
        $this->files = $this->removeSystemDirectory(scandir($this->DIRECTORY));
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

    public function forChurch()
    {
        $files = collect($this->files);

        $churchPhotos = $files->filter(function ($path, $index) {
            return $this->startsWith($path, self::CHURCH_PREFIX . $this->churchUid);
        });

        return $churchPhotos->flatten();
    }

    public function forAdoration()
    {
        $files = collect($this->files);

        $adorationPhotos = $files->filter(function ($path, $index) {
            return $this->startsWith($path, self::ADORATION_PREFIX . $this->churchUid);
        });

        return $adorationPhotos->flatten();
    }

    private function startsWith($haystack, $needle)
    {
        $length = strlen($needle);

        return (substr($haystack, 0, $length) === $needle);
    }
}