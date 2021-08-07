<?php

class Employee
{
    private $id;
    private $name;
    private $monthlyCost;

    public function __construct($id, $name, $monthlyCost)
    {
        $this->id = $id;
        $this->name = $name;
        $this->monthlyCost = $monthlyCost;
    }

    public function getMonthlyCost()
    {
        return $this->monthlyCost;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function annualCost()
    {
        return $this->monthlyCost * 12;
    }
}
