<?php

namespace Refactor\ExtractSuperclass\After;

class Employee extends Party
{
    private $id;
    private $monthlyCost;

    public function __construct($id, $name, $monthlyCost)
    {
        parent::__construct($name);
        $this->id = $id;
        $this->monthlyCost = $monthlyCost;
    }

    public function monthlyCost()
    {
        return $this->monthlyCost;
    }

    public function getId()
    {
        return $this->id;
    }
}
