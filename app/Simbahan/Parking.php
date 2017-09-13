<?php

namespace App\Simbahan;


class Parking
{
    /**
     * Parking ID collection.
     *
     * @var array
     */
    protected $parkings;

    /**
     * Has Private Parking.
     *
     * @var bool
     */
    protected $hasPrivateParking;

    /**
     * Has Mall Parking.
     *
     * @var bool
     */
    protected $hasMallParking;

    /**
     * Has Street parking.
     *
     * @var bool
     */
    protected $hasStreetParking;

    /**
     * Other parking field.
     *
     * @var bool
     */
    protected $otherParking;

    public function __construct()
    {
        $this->parkings = [];
    }

    /**
     * Set HasPrivateParking property.
     *
     * @param bool $value
     * @return $this
     */
    public function setHasPrivateParking($value)
    {
        if ($value)
            $this->append(\App\Models\Parking::CHURCH_PARKING);

        $this->hasPrivateParking = $value;

        return $this;
    }

    /**
     * Set HasMallParking property.
     *
     * @param bool $value
     * @return $this
     */
    public function setHasMallParking($value)
    {
        if ($value)
            $this->append(\App\Models\Parking::MALL_PARKING);

        $this->hasMallParking = $value;

        return $this;
    }

    /**
     * Set HasStreetParking property.
     *
     * @param bool $value
     * @return $this
     */
    public function setHasStreetParking($value)
    {
        if ($value)
            $this->append(\App\Models\Parking::STREET_PARKING);

        $this->hasStreetParking = $value;

        return $this;
    }

    /**
     * Set OtherParking property.
     *
     * @param bool $value
     * @return $this
     */
    public function setOtherParking($value)
    {
        if ($value)
            $this->append(\App\Models\Parking::OTHER_PARKING);

        $this->otherParking = $value;

        return $this;
    }

    /**
     * Append the id to the array list.
     *
     * @param void
     */
    private function append($value)
    {
        array_push($this->parkings, $value);
    }

    /**
     * Return the value.
     *
     * @return array
     */
    public function getValue()
    {
        return $this->parkings;
    }
}