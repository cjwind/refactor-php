<?php

namespace Refactor\PullUpMethod\Before;

class Department extends Party
{
    private int $monthCost;

    public function totalAnnualCost(): int
    {
        return $this->monthlyCost() * 12;
    }

    private function monthlyCost(): int
    {
        return $this->monthCost;
    }
}
