<?php

namespace Refactor\PullUpMethod\Before;

class Employee extends Party
{
    private int $monthCost;

    public function annualCost(): int
    {
        return $this->monthlyCost() * 12;
    }

    private function monthlyCost(): int
    {
        return $this->monthCost;
    }
}
