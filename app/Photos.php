<?php

namespace App;


class Photos
{
    /**
     * Series of characters that separates each path.
     *
     * @type string
     */
    const pathSeparator = ', ';

    /**
     * Series of characters that separates collection.
     *
     * @type string
     */
    const collectionSeparator = '; ';

    /**
     * Series of characters that indicates a collection is empty.
     *
     * @type string
     */
    const emptyIndicator = '*';

    /**
     * Path to photos.
     *
     * @var string
     */
    protected $expression;

    /**
     * Photos constructor.
     *
     * @param string $expression
     */
    public function __construct($expression)
    {
        $this->expression = $expression;
    }

    /**
     * Lists all the photos available for church.
     *
     * @return array
     */
    public function church()
    {
        if ($this->expression == '')
            return [];

        return $this->separatePath($this->separateCollection(0));
    }

    /**
     * Lists all the photos available for adoration.
     *
     * @return array
     */
    public function adoration()
    {
        if ($this->expression == '')
            return [];

        return $this->separatePath($this->separateCollection(1));
    }

    /**
     * Separates paths from a photo collection.
     *
     * @param string $expression
     * @return array
     */
    private function separatePath($expression)
    {
        $paths = explode(self::pathSeparator, $expression);

        if ($paths[0] != self::emptyIndicator)
            return $paths;

        return [];
    }

    /**
     * Separates photo collection.
     *
     * @param int|null $index
     * @return array
     */
    private function separateCollection($index = null)
    {
        $exploded = explode(self::collectionSeparator, $this->expression);

        if (! is_null($index))
            return $exploded[$index];

        return $exploded;
    }
}