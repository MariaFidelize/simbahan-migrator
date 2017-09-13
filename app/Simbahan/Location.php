<?php

namespace App\Simbahan;

use App\Models\Location as LocationModel;

class Location
{
    protected $isStandalone;

    protected $isInMall;

    protected $isInSchool;

    protected $isInHospital;

    public function setIsStandalone($value)
    {
        $this->isStandalone = $value;

        return $this;
    }

    public function setIsInMall($value)
    {
        $this->isInMall = $value;

        return $this;
    }

    public function setIsInSchool($value)
    {
        $this->isInSchool = $value;

        return $this;
    }

    public function setIsInHospital($value)
    {
        $this->isInHospital = $value;

        return $this;
    }

    public function getValue()
    {
        if ($this->isStandalone)
            return LocationModel::STANDALONE;

        if ($this->isInMall)
            return LocationModel::MALLS;

        if ($this->isInSchool)
            return LocationModel::SCHOOLS;

        if ($this->isInHospital)
            return LocationModel::HOSPITALS;

        return null;
    }
}