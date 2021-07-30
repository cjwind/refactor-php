<?php

namespace Refactor\PullUpMethod\Before;

class Department extends Party
{
    private int $monthlyCost;

    public function totalAnnualCost(): int
    {
        return $this->monthlyCost * 12;
    }
}
