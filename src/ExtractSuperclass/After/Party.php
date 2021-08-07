<?php

namespace Refactor\ExtractSuperclass\After;

abstract class Party
{
    protected $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function annualCost()
    {
        return $this->monthlyCost() * 12;
    }

    abstract public function monthlyCost();
}
