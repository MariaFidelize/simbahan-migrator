<?php

namespace App\Simbahan;


class Ventilation
{
    /**
     * Collection of ventilation ID.
     *
     * @var array
     */
    protected $ventilations;

    /**
     * Has Air Conditioned property.
     *
     * @var bool
     */
    protected $hasAirconditioned;

    /**
     * Has Ceiling Fan property.
     *
     * @var bool
     */
    protected $hasCeilingFan;

    /**
     * Has Ordinary Fan property.
     *
     * @var bool
     */
    protected $hasOrdinaryFan;

    public function __construct()
    {
        $this->ventilations = [];
    }

    public function setHasAirconditioned($value)
    {
        if ($value)
            $this->append(\App\Models\Ventilation::AIRCONDITIONED);

        $this->hasAirconditioned = $value;

        return $this;
    }

    public function setHasCeilingFan($value)
    {
        if ($value)
            $this->append(\App\Models\Ventilation::CEILING_FAN);

        $this->hasCeilingFan = $value;

        return $this;
    }

    public function setHasOrdinaryFan($value)
    {
        if ($value)
            $this->append(\App\Models\Ventilation::ORDINARY_FAN);

        $this->hasOrdinaryFan = $value;

        return $this;
    }

    public function append($value)
    {
        array_push($this->ventilations, $value);
    }

    public function getValue()
    {
        return $this->ventilations;
    }
}