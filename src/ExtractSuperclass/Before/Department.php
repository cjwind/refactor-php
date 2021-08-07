<?php

class Department
{
    private $name;
    private array $staff;

    /**
     * @param $name
     * @param $staff
     */
    public function __construct($name, $staff)
    {
        $this->name = $name;
        $this->staff = $staff;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getStaff()
    {
        return $this->staff;
    }

    public function headCount()
    {
        return count($this->staff);
    }

    public function totalAnnualCost()
    {
        return $this->totalMonthlyCost() * 12;
    }

    public function totalMonthlyCost()
    {
        $sum = 0;
        foreach ($this->staff as $staff) {
            $sum += $staff->monthlyCost();
        }
        return $sum;
    }
}
