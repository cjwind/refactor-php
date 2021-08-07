<?php

namespace Refactor\ExtractSuperclass\After;

class Department extends Party
{
    private array $staff;

    /**
     * @param $name
     * @param $staff
     */
    public function __construct($name, $staff)
    {
        parent::__construct($name);
        $this->staff = $staff;
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

    public function monthlyCost()
    {
        $sum = 0;
        foreach ($this->staff as $staff) {
            $sum += $staff->monthlyCost();
        }
        return $sum;
    }
}
